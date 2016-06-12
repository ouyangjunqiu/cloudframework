<?php

class TopLinker_Client
{
    /**
     * Client token by web authorization
     * @var string
     */
    private $session;

    /**
     * Parent linker
     * @var TopLinker
     */
    private $parent;

    /**
     * @param TopLinker $parent
     * @param $session
     */
    public function __construct(TopLinker $parent, $session)
    {
        $this->parent = $parent;
        $this->session = $session;
    }

    /**
     * Call and receive API data by asynchronous
     *
     * @param string $apiName
     * @param callable $callback
     * @param array $params
     * @return void
     */
    public function call($apiName, $callback, array $params = array())
    {
        $this->parent->call($apiName, $callback, $params, $this->session);
    }

    public function finish()
    {
        $this->parent->finish();
    }

    public function setParentConfig($appKey, $secretKey)
    {
        $this->parent->setConfig($appKey, $secretKey);
    }

    /**
     * Call and receive API data by synchronous
     *
     * @param $apiName
     * @param $callback
     * @param array $params
     */
    public function callSync($apiName, $callback, array $params = array())
    {
        $this->parent->callSync($apiName, $callback, $params, $this->session);
    }

    /**
     * Load api data synchronously using return object
     *
     * @param $apiName
     * @param array $params
     * @return TopLinker_Response_Abstract
     */
    public function load($apiName, array $params = array())
    {
        return $this->parent->load($apiName, $params, $this->session);
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param callable $callback
     */
    public function sendRequest(TopLinker_Request_Abstract $request, $callback)
    {
        $this->parent->sendRequest($request, $callback, $this->session);
    }
}
