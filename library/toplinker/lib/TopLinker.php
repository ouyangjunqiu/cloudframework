<?php

class TopLinker
{
    /**
     * @var TopLinker_Config
     */
    private $config;

    /**
     * @var ParallelCurl
     */
    private $agent;

    /**
     * @var TopLinker_Event_Listener[]
     */
    private $listeners = array();

    /**
     * @var null|TopLinker_Request_Abstract
     */
    private $lastRequest = null;

    /**
     * @var null|TopLinker_Response_Abstract
     */
    private $lastResponse = null;

    /**
     * @param TopLinker_Config $config
     */
    public function __construct(TopLinker_Config $config)
    {
        $this->config = $config;
        $this->agent = new ParallelCurl($config->maxRequest, $config->curlOptions);
    }

    public function setConfig($appKey, $secretKey)
    {
        $this->config->setAppKey($appKey);
        $this->config->setSecretKey($secretKey);
    }

    /**
     * Call and receive API data by asynchronous
     *
     * @param string $apiName
     * @param callable $callback
     * @param array $params
     * @param null|string $session
     * @return void
     */
    public function call($apiName, $callback, array $params = array(), $session = null)
    {
        $request = $this->createRequest($apiName, $params);
        $this->sendRequest($request, $callback, $session);
    }

    /**
     * Call and receive API data by synchronous
     *
     * @param $apiName
     * @param $callback
     * @param array $params
     * @param null $session
     */
    public function callSync($apiName, $callback, array $params = array(), $session = null)
    {
        $this->call($apiName, $callback, $params, $session);
        $this->finish();
    }

    /**
     * Load api data synchronously using return object
     *
     * @param $apiName
     * @param array $params
     * @param null $session
     * @return TopLinker_Response_Abstract
     */
    public function load($apiName, array $params = array(), $session = null)
    {
        $this->callSync($apiName, array($this, 'loadData'), $params, $session);
        return $this->lastResponse;
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     */
    private function loadData(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        if ($request === $this->lastRequest) {
            $this->lastResponse = $response;
        }
    }

    /**
     * Wait all requests finished
     * Avoid process stop before requests finish
     * @return void
     */
    public function finish()
    {
        $this->agent->finishAllRequests();
    }

    /**
     * @return int
     */
    public function countOutstandingRequest()
    {
        return count($this->agent->outstanding_requests);
    }

    /**
     * @param string $session
     * @return TopLinker_Client
     */
    public function createClient($session)
    {
        $client = new TopLinker_Client($this, $session);
        return $client;
    }

    /**
     * @param TopLinker_Event_Listener $listener
     */
    public function addListener(TopLinker_Event_Listener $listener)
    {
        $this->listeners[] = $listener;
    }

    /**
     * @param string $apiName
     * @param array $params
     * @return TopLinker_Request_Abstract
     */
    public function createRequest($apiName, array $params = array())
    {
        return TopLinker_Request::create($apiName, $params);
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param callable $callback
     * @param null|string $session
     * @throws Exception
     * @return void
     */
    public function sendRequest(TopLinker_Request_Abstract $request, $callback, $session = null)
    {
        if (!$request->isValid()) {
            throw new Exception('Request parameters not valid');
        }
        $url = $this->buildRequestUrl($request, $session);
        $post = $request->getParams();
        if (empty($post)) {
            $post = null;
        }
        $userData = array(
            'request' => $request,
            'callback' => $callback
        );
        $this->raiseEvent('onBeforeRequest', array($request, $url, $post));
        $this->lastRequest = $request;
        $this->agent->startRequest($url, array($this, 'afterRequest'), $userData, $post);
    }

    public function afterRequest($content, $url, $ch, $userData)
    {
        /** @var TopLinker_Request_Abstract $request */
        $request = $userData['request'];
        $apiName = $request->getMethod();
        $response = TopLinker_Response::create($apiName, $content, $url);
        $this->raiseEvent('onAfterRequest', array($request, $response));
        call_user_func($userData['callback'], $request, $response);
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param null|string $session
     * @return string
     */
    private function buildRequestUrl(TopLinker_Request_Abstract $request, $session = null)
    {
        $params = $this->config->getParams();
        $params['sign'] = $this->buildRequestSignature($request, $session);
        $params['method'] = $request->getMethod();
        if (null !== $session) {
            $params['session'] = $session;
            $params['access_token'] = $session;
        }
        $query = http_build_query($params);
        return $this->config->getUrl() . '?' . $query;
    }

    /**
     * @param TopLinker_Request_Abstract $request
     * @param null|string $session
     * @return string
     */
    private function buildRequestSignature(TopLinker_Request_Abstract $request, $session = null)
    {
        $signature = new TopLinker_Signature($this->config->secretKey);
        $signature->setParams($this->config->getParams());
        $signature->setParams($request->getParams());
        $signature->setParam('method', $request->getMethod());
        if (null !== $session) {
            $signature->setParam('session', $session);
            $signature->setParam('access_token', $session);
        }
        return $signature->generate();
    }

    /**
     * @param $eventName
     * @param $params
     */
    private function raiseEvent($eventName, $params)
    {
        foreach ($this->listeners as $listener) {
            call_user_func_array(array($listener, $eventName), $params);
        }
    }
}
