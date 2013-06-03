<?php
/**
 * A component for executing Yii console application commands in background
 *
 * @author Louis DaPrato
 */
class EConsoleRunner extends CComponent
{
	const ID = 'extensions.EConsoleRunner';
	
    private $_bootstrapPath;
    
    /**
     * Constructor which takes the an optional name of the bootstrap file to use 
     * and an optional base directory to find the bootstrap file.
     * The base directory defaults to the directory above the one returned by Yii::app()->basePath
     * @param string $bootstrapFile path to bootstrap file that will launch the application. Defaults to null meaning use the bootstrap file packaged with this extension.
     */
    public function __construct($bootstrapPath = null) {
        if($bootstrapPath === null)
        	$bootstrapPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'console.php';
        
        $bootstrapPath = realpath($bootstrapPath);
        if($bootstrapPath === false || !is_file($bootstrapPath))
        	throw new CException(Yii::t(self::ID, 'Bootstrap file "{path}" is invalid or does not exist.', array('{path}' => $bootstrapPath)));
        
		$this->_bootstrapPath = $bootstrapPath;
    }
    
    /**
     * Returns the the path to the bootstrap file that should create and run the console application.
     * @return string the base path.
     */
    public function getBootstrapPath()
    {
    	return $this->_bootstrapPath;
    }
    
    /**
     * Run console command in background
     * @param string $cmd arguments that will be passed to the console application via the command line.
     * @param boolean $background if true the application will be ran in the background.
     * @return mixed If ran in the background the termination status of the process that was run will be returned. In case of an error then -1 is returned. Otherwise the output of the command will be returned.
     */
    public function run($cmd, $background = true)
    {
    	$cmd = PHP_BINDIR . DIRECTORY_SEPARATOR . 'php ' . $this->_bootstrapPath . ' ' . $cmd;
    	if($background)
    	{
    		if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
    			$cmd = 'start /b ' . $cmd;
    		else
    			$cmd .= ' /dev/null &';
    		return pclose(popen($cmd, 'r'));
    	}
    	$stdout = popen($cmd, 'r');
    	$data = '';
    	while(!feof($stdout))
    		$data .= fread($stdout, 1024);
    	pclose($stdout);
    	return $data;
    }

}
?>