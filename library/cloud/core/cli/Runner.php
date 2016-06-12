<?php

namespace cloud\core\cli;
use CComponent;
use Yii;

/**
 * Class Runner
 * @package cloud\core\cli
 * @author oShine <oshine.ouyang@da-mai.com>
 * @version 1.1.0.1
 */
class Runner extends CComponent
{
    /**
     * @var string $_scriptName
     */
    private $_scriptName;

    /**
     * Executes the requested command.
     * @param array $args list of user supplied parameters (including the entry script name and the command name).
     * @return int|null application exit code returned by the command.
     * @throws \CException
     */
    public function run($args)
    {
        $this->_scriptName=$args[0];
        array_shift($args);
        list($module,$name,$action) = explode(":",$args[0]);
        $args[0] = isset($action)?$action:"";
        $controller = $this->createCommand($module,$name);
        if($controller == null){
            $controller = $this->createController($module,$name);
        }
        if($controller == null) {
            throw new \CException("not found command!");
        }
        $controller->init();
        return $controller->run($args);
    }

    /**
     * @return string the entry script name
     */
    public function getScriptName()
    {
        return $this->_scriptName;
    }

    /**
     * @param string $name command name (case-insensitive)
     * @param string $module
     * @return Controller the command object. Null if the name is invalid.
     */
    public function createController($module,$name)
    {
        $module = strtolower($module);
        $name=strtolower($name);

        $cliNamespace =  'application\modules\\' .$module . '\cli\\';
        $className = ucfirst($name)."Controller";
        $basePath = PATH_MODULES.DIRECTORY_SEPARATOR.$module;
        $classFile = $basePath.DIRECTORY_SEPARATOR."cli".DIRECTORY_SEPARATOR.$className.'.php';
        if(is_file($classFile) && class_exists($cliNamespace.$className)){
            $class =  Yii::createComponent($cliNamespace.$className,$name,$this);
            if($class instanceof Controller)
                return $class;
        }
        return null;
    }

    /**
     * @param $module
     * @param $name
     * @return null|string
     */
    public  function createCommand($module,$name){
        $module = strtolower($module);
        $name=strtolower($name);

        $cliNamespace =  'application\modules\\' .$module . '\cli\\';
        $className = ucfirst($name)."Command";
        $basePath = PATH_MODULES.DIRECTORY_SEPARATOR.$module;
        $classFile = $basePath.DIRECTORY_SEPARATOR."cli".DIRECTORY_SEPARATOR.$className.'.php';
        if(is_file($classFile) && class_exists($cliNamespace.$className)){
            $class =  Yii::createComponent($cliNamespace.$className,$name,$this);
            if($class instanceof Controller)
                return $class;
        }
        return null;
    }


}