<?php

class TopLinker_Response_Data extends ArrayObject
{
    /**
     * @param null $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct($input = null, $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct($input, $flags, $iterator_class);
        $this->convertArrayToObject($this);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this[$key])) {
            return $this[$key];
        }
        return null;
    }

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function __set($key, $value)
    {
        return $this[$key] = $value;
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this[$key]);
    }

    /**
     * @param $key
     */
    public function __unset($key)
    {
        unset($this[$key]);
    }

    /**
     * @param TopLinker_Response_Data $array
     * @return TopLinker_Response_Data
     */
    private function convertArrayToObject(TopLinker_Response_Data $array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = new self($value);
            }
        }
    }
}