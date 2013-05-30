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
     * Constructor which takes the name of the bootstrap file 
     * and an optional base directory to look for the console application file.
     * The base directory defaults to the directory above the one returned by Yii::app()->basePath
     * @param string $BootstrapFile filename for console application
     * @param string $basePath path to directory to look for console application file
     */
    public function __construct($bootstrapFile, $basePath = null) {
        if($basePath === null)
        	$basePath = Yii::app()->getBasePath() . DIRECTORY_SEPARATOR . 'commands';

        $this->_bootstrapPath = realpath(rtrim($basePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . trim($bootstrapFile, DIRECTORY_SEPARATOR));
        if($this->_bootstrapPath === false || !is_file($this->_bootstrapPath))
        	throw new CException(Yii::t(self::ID, 'Bootstrap file "{path}" does not exist.', array('{path}' => $this->_bootstrapPath)));
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
     * @return integer The termination status of the process that was run. In case of an error then -1 is returned.
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
        	
    	}
    	return pclose(popen($cmd, 'r'));
    }

}
?>