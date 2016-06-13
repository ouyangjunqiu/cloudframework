<?php

abstract class TopLinker_Request_Abstract
{
    /**
     * 是否需要用户 Session
     * @var bool
     */
    protected $session = false;

    /**
     * @param array $params
     */
    public function __construct($params = array())
    {
        $this->setParams($params);
    }

    /**
     * @return array
     */
    public function getParams()
    {
        $r = new ReflectionClass($this);
        /** @var ReflectionProperty[] $properties */
        $properties = $r->getProperties();
        $result = array();
        foreach ($properties as $property) {
            if ($property->isPublic()) {
                $key = $property->getName();
                $value = $this->$key;
                if (!empty($value) || is_numeric($value)) {
                    $result[$key] = $this->$key;
                }
            }
        }
        return $result;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setParam($key, $value)
    {
        if (property_exists($this, $key)) {
            $this->$key = $value;
        }
    }

    /**
     * @param array $params
     */
    public function setParams(array $params)
    {
        foreach ($params as $key => $value) {
            $this->setParam($key, $value);
        }
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return TopLinker_Request::getApiName($this);
    }

    /**
     * @return bool
     */
    public function isUseSession()
    {
        return $this->session;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        $rules = $this->rules();
        foreach ($rules as $rule) {
            # @TODO: Add real rule process
        }
        return true;
    }

    /**
     * @return array
     */
    protected function rules()
    {
        return array();
    }
}
