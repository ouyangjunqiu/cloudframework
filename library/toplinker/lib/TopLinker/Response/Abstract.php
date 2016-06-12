<?php

abstract class TopLinker_Response_Abstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $rawData;

    /**
     * @var array
     */
    private $data;

    /**
     * @param $content
     * @param null $url
     */
    public function __construct($content, $url = null)
    {
        if (function_exists('xdebug_disable')) {
           // $original = ini_get('max_nesting_level');
            ini_set('xdebug.max_nesting_level', 10000);
        }

        $this->url = $url;
        $this->rawData = $content;
        @$rawArray = (array)json_decode($content, true);
        $this->data = new TopLinker_Response_Data($rawArray);
        
        $this->init();
    }

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param null|string $key
     * @return array|mixed|null
     */
    public function getData($key = null)
    {
        $data = pos($this->data);
        if (null !== $key) {
            if (isset($data[$key])) {
                $result = $data[$key];
            } else {
                $result = null;
            }
        } else {
            $result = $data;
        }
        return $result;
    }

    /**
     * @return string
     */
    public function getRawData()
    {
        return $this->rawData;
    }

    /**
     * @return bool
     */
    public function hasError()
    {
        return isset($this->data['error_response']);
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->data['error_response'];
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function __get($key)
    {
        $data = $this->getData();
        if (isset($data[$key])) {
            return $data[$key];
        } else {
            return null;
        }
    }

    protected function init()
    {

    }
}
