<?php

namespace cloud\core\cli;

use CEvent;

/**
 * Class Event
 * @package cloud\core\cli
 * @author oShine <oshine.ouyang@da-mai.com>
 * @version 1.1.0.0
 */
class Event extends CEvent
{
    /**
     * @var string the action name
     */
    public $action;
    /**
     * @var boolean whether the action should be executed.
     * If this property is set true by the event handler, the console command action will quit after handling this event.
     * If false, which is the default, the normal execution cycles will continue, including performing the action and calling
     * {@link CConsoleCommand::afterAction}.
     */
    public $stopCommand=false;
    /**
     * @var integer exit code of application.
     * This property is available in {@link CConsoleCommand::onAfterAction} event and will be set to the exit code
     * returned by the console command action. You can set it to change application exit code.
     */
    public $exitCode;

    /**
     * Constructor.
     * @param mixed $sender sender of the event
     * @param string $params the parameters to be passed to the action method.
     * @param string $action the action name
     * @param integer $exitCode the application exit code
     */
    public function __construct($sender=null,$params=null,$action=null,$exitCode=0){
        parent::__construct($sender,$params);
        $this->action=$action;
        $this->exitCode=$exitCode;
    }
}