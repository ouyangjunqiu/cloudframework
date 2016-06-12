<?php

interface TopLinker_Event_Listener
{
    /**
     * @param TopLinker_Request_Abstract $request
     * @param $url
     * @param $post
     * @return mixed
     */
    public function onBeforeRequest(TopLinker_Request_Abstract $request, $url, $post);

    /**
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     * @return mixed
     */
    public function onAfterRequest(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response);
}
