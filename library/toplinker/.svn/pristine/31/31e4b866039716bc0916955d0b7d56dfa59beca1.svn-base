<?php

class TopLinker_Signature
{
    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var array
     */
    private $params = array();

    public function __construct($secretKey, array $params = array())
    {
        $this->secretKey = $secretKey;
        $this->params = $params;
    }

    public function setParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function setParams(array $params)
    {
        $this->params = array_merge($this->params, $params);
    }

    public function getParam($key)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    public function generate()
    {
        ksort($this->params);

        $result = $this->secretKey;
        foreach ($this->params as $key => $value) {
            if ((!empty($value) || is_numeric($value)) && "@" != $value[0]) {
                $result .= $key . $value;
            }
        }
        $result .= $this->secretKey;

        return strtoupper(md5($result));
    }
}
