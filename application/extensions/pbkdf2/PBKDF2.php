<?php defined('BASEPATH') or exit('No direct script access allowed');  

class PBKDF2 extends CComponent {
	
	const DEFAULT_HASH_ALGORITHM = 'sha256';
	const DEFAULT_ITERATIONS = 1024;
	const DEFAULT_SALT_BYTES = 32;
	const DEFAULT_HASH_BYTES = 32;
	const DEFAULT_STATIC_SALT = 'aPzMkl7y99vUDZWWyoflnYGkBi8ZoSCXDiDo/7MH+Iw=';
	
	protected $_hashAlgorithm;
	
	protected $_iterations;
	
	protected $_saltBytes;
	
	protected $_hashBytes;
	
	protected $_staticSalt;
	
	
	public function __construct(
			$hashAlgorithm = self::DEFAULT_HASH_ALGORITHM, 
			$iterations = self::DEFAULT_ITERATIONS, 
			$saltBytes = self::DEFAULT_SALT_BYTES, 
			$hashBytes = self::DEFAULT_HASH_BYTES, 
			$staticSalt = self::DEFAULT_STATIC_SALT) {

		$this->_hashAlgorithm = $hashAlgorithm;
		$this->_iterations = $iterations;
		$this->_saltBytes = $saltBytes;
		$this->_hashBytes = $hashBytes;
		$this->_staticSalt = $staticSalt;
		
	}
	
	public function hash($string, $iv = '') {
		return base64_encode($this->runPBKDF2Algorithm(
							$this->_hashAlgorithm,
							$string,
							$iv,
							$this->_iterations,
							$this->_hashBytes,
							true
					));
	}
	
	public function generateIV() {
		return base64_encode(mcrypt_create_iv($this->_saltBytes, MCRYPT_DEV_URANDOM));
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
			$last = $iv . $this->_staticSalt . pack('N', $i);
			// first iteration
			$last = $xorsum = hash_hmac($algorithm, $last, $password, true);
			// perform the other $count - 1 _iterations
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