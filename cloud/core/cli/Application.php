<?php

namespace cloud\core\cli;
use cloud\core\components\Application AS WebApplication;

/**
 * Class Application
 * @package cloud\core\cli
 * @author oShine <oshine.ouyang@da-mai.com>
 * @version 1.1.0.0
 */
class Application extends WebApplication
{

    private $_runner;


    /**
     * Pre Initializes the application by creating the command runner.
     */

    protected function preinit()
    {
        if (function_exists('date_default_timezone_set')) {
            @date_default_timezone_set('PRC');
        }
    }

    /**
     * Initializes the application by creating the command runner.
     */
    protected function init()
    {
        parent::init();
        if(!isset($_SERVER['argv'])) // || strncasecmp(php_sapi_name(),'cli',3))
            die('This script must be run from the command line.');
        $this->_runner = $this->createRunner();
    }

    /**
     * Processes the request.
     * This is the place where the actual request processing work is done.
     * Derived classes should override this method.
     */
    public function processRequest()
    {
        $exitCode=$this->_runner->run($_SERVER['argv']);
        if(is_int($exitCode))
            $this->end($exitCode);

    }

    private function createRunner(){
        return new Runner();
    }

    /**
     * Displays the captured PHP error.
     * This method displays the error in console mode when there is
     * no active error handler.
     * @param integer $code error code
     * @param string $message error message
     * @param string $file error file
     * @param string $line error line
     */
    public function displayError($code,$message,$file,$line)
    {
        echo "PHP Error[$code]: $message\n";
        echo "    in file $file at line $line\n";
        $trace=debug_backtrace();
        // skip the first 4 stacks as they do not tell the error position
        if(count($trace)>4)
            $trace=array_slice($trace,4);
        foreach($trace as $i=>$t)
        {
            if(!isset($t['file']))
                $t['file']='unknown';
            if(!isset($t['line']))
                $t['line']=0;
            if(!isset($t['function']))
                $t['function']='unknown';
            echo "#$i {$t['file']}({$t['line']}): ";
            if(isset($t['object']) && is_object($t['object']))
                echo get_class($t['object']).'->';
            echo "{$t['function']}()\n";
        }
    }
}