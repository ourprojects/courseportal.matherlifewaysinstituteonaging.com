<?php defined('BASEPATH') or exit('No direct script access allowed');  

class PBKDF2 extends CComponent {
	
	public $hashAlgorithm = 'sha256';
	
	public $iterations = 1024;
	
	public $saltBytes = 32;
	
	public $hashBytes = 32;
	
	public $staticSalt = 'aPzMkl7y99vUDZWWyoflnYGkBi8ZoSCXDiDo/7MH+Iw=';
	
	public $string = null;
	
	private $_hash = null;
	private $_iv = null;
	
	public function setIV($value) {
		$this->_iv = $value;
	}
	
	public function getIV($generateIvIfNull = true) {
		if($generateIvIfNull && $this->_iv === null)
			$this->_iv = $this->generateIV();
		return $this->_iv;
	}
	
	public function getHash($string = null) {
		if($string !== null)
			$this->string = $string;
		if($this->string === null)
			$this->_hash = null;
		else if($string !== null || $this->_hash === null)
			$this->_hash = base64_encode($this->runPBKDF2Algorithm(
							$this->hashAlgorithm,
							$this->string,
							$this->getIV(),
							$this->iterations,
							$this->hashBytes,
							true
					));
		return $this->_hash;
	}
	
	public function verifyHash($hash) {
		return $this->getHash() === $hash;
	}
	
	public function generateIV() {
		return base64_encode(mcrypt_create_iv($this->saltBytes, MCRYPT_DEV_URANDOM));
	}
	
	/**
	 * Compares two strings $a and $b in length-constant time.
	 * Prevents runtime analysis
	 */
	protected function slowEquals($a, $b) {
		$diff = strlen($a) ^ strlen($b);
		for($i = 0; $i < strlen($a) && $i < strlen($b); $i++) {
			$diff |= ord($a[$i]) ^ ord($b[$i]);
		}
		return $diff === 0;
	}
	
	/**
	 * PBKDF2 key derivation function as defined by RSA's PKCS #5: https://www.ietf.org/rfc/rfc2898.txt
	 * @param string $algorithm - The hash algorithm to use. Recommended: SHA256
	 * @param string $password - The password.
	 * @param string $iv - A salt that is unique to the password.
	 * @param int $count - Iteration count. Higher is better, but slower. Recommended: At least 1000.
	 * @param int $key_length - The length of the derived key in bytes.
	 * @param string $raw_output - If true, the key is returned in raw binary format. Hex encoded otherwise.
	 * @return A $key_length-byte key derived from the password and salt.
	 *
	 * Test vectors can be found here: https://www.ietf.org/rfc/rfc6070.txt
	 */
	protected function runPBKDF2Algorithm($algorithm, $password, $iv, $count, $key_length, $raw_output = false) {
		$algorithm = strtolower($algorithm);
		if(!in_array($algorithm, hash_algos(), true))
			throw new HttpException(500, Yii::t('yii','PBKDF2 ERROR: Unrecognized hash algorithm "{algorithm}".'), array('algorithm' => $algorithm));
		if($count <= 0 || $key_length <= 0)
			throw new HttpException(500, Yii::t('yii','PBKDF2 ERROR: Invalid parameters.'));
	
		$hash_length = strlen(hash($algorithm, "", true));
		$block_count = ceil($key_length / $hash_length);
	
		$output = '';
		for($i = 1; $i <= $block_count; $i++) {
			// $i encoded as 4 bytes, big endian.
			$last = $iv . $this->staticSalt . pack('N', $i);
			// first iteration
			$last = $xorsum = hash_hmac($algorithm, $last, $password, true);
			// perform the other $count - 1 iterations
			for ($j = 1; $j < $count; $j++) {
				$xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
			}
			$output .= $xorsum;
		}
	
		if($raw_output)
			return substr($output, 0, $key_length);
		else
			return bin2hex(substr($output, 0, $key_length));
	}
	
}