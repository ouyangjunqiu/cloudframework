<?php

class TopLinker_Request
{
    const API_PREFIX = 'taobao.';
    const CLASS_PREFIX = 'TopLinker_Request_';

    /**
     * @param $apiName
     * @param array $params
     * @return TopLinker_Request_Abstract
     * @throws Exception
     */
    public static function create($apiName, array $params = array())
    {
        $className = self::getClassName($apiName);
        if (!class_exists($className)) {
            throw new Exception("TopLinker api {$apiName} has not request class", 101);
        }
        return new $className($params);
    }

    /**
     * @param $apiName
     * @return string
     */
    public static function getClassName($apiName)
    {
        $noPrefix = str_replace(self::API_PREFIX, '', $apiName);
        $parts = explode('.', $noPrefix);
        $parts = array_map('ucfirst', $parts);
        $result = self::CLASS_PREFIX . implode('', $parts);
        return $result;
    }

    /**
     * @param string|TopLinker_Request_Abstract $className
     * @return string
     */
    public static function getApiName($className)
    {
        if (is_object($className)) {
            if ($className instanceof TopLinker_Request_Abstract) {
                $className = get_class($className);
            } else {
                throw new Exception("Object is not a TopLinker_Request_Abstract class");
            }
        }
        $result = '';
        $noPrefix = str_replace(self::CLASS_PREFIX, '', $className);
        $length = strlen($noPrefix);
        for ($i = 0; $i < $length; $i ++) {
            if (preg_match('/[A-Z]/', $noPrefix[$i])) {
                $result .= '.';
            }
            $result .= $noPrefix[$i];
        }
        $result = trim($result, '.');
        $result = self::API_PREFIX . $result;
        $result = strtolower($result);
        return $result;
    }
}
