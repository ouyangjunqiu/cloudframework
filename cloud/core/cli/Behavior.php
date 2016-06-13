<?php
namespace cloud\core\cli;

use CBehavior;

/**
 * Class Behavior
 * @package cloud\core\cli
 * @author oShine <oshine.ouyang@da-mai.com>
 * @version 1.1.0.0
 */
class Behavior extends CBehavior
{
    /**
     * Declares events and the corresponding event handler methods.
     * The default implementation returns 'onAfterConstruct', 'onBeforeValidate' and 'onAfterValidate' events and handlers.
     * If you override this method, make sure you merge the parent result to the return value.
     * @return array events (array keys) and the corresponding event handler methods (array values).
     * @see CBehavior::events
     */
    public function events()
    {
        return array(
            'onBeforeAction' => 'beforeAction',
            'onAfterAction' => 'afterAction'
        );
    }
    /**
     * Responds to {@link CConsoleCommand::onBeforeAction} event.
     * Overrides this method if you want to handle the corresponding event of the {@link CBehavior::owner owner}.
     * @param Event $event event parameter
     */
    protected function beforeAction($event)
    {
    }

    /**
     * Responds to {@link CConsoleCommand::onAfterAction} event.
     * Overrides this method if you want to handle the corresponding event of the {@link CBehavior::owner owner}.
     * @param Event $event event parameter
     */
    protected function afterAction($event)
    {
    }
}