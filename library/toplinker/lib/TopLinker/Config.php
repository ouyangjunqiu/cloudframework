<?php

/**
 * Class TopLinker_Config
 *
 * @link http://open.taobao.com/doc/detail.htm?id=111
 */
class TopLinker_Config
{
    /**
     * @var array
     */
    private static $urls = array(
        'http' => 'http://gw.api.taobao.com/router/rest',
        'oauth' => 'https://eco.taobao.com/router/rest',
    );

    /**
     * Top APP key
     * @var string
     */
    public $appKey;

    /**
     * Top APP secret key
     * @var string
     */
    public $secretKey;

    /**
     * TopLinker max parallel request
     * @var int
     */
    public $maxRequest = 25;

    /**
     * cUrl agent options
     * @var int
     */
    public $curlOptions = array();

    /**
     * Result format
     * @var string
     */
    private $format = 'json';

    /**
     * @var string
     */
    private $signMethod = 'md5';

    /**
     * @var string
     */
    private $apiVersion = "2.0";

    /**
     * @var string
     */
    private $authMethod = 'http';

    /**
     * @var string
     */
    private $sdkVersion = "top-sdk-php-20110929";

    /**
     * @param $appKey
     * @param $secretKey
     * @internal param array $params
     */
    public function __construct($appKey, $secretKey)
    {
        $this->appKey = $appKey;
        $this->secretKey = $secretKey;
    }

    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
    }

    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return array(
            'app_key' => $this->appKey,
            'format' => $this->format,
            'partner_id' => $this->sdkVersion,
            'sign_method' => $this->signMethod,
            'timestamp' => date("Y-m-d H:i:s"),
            'v' => $this->apiVersion,
        );
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return self::$urls[$this->authMethod];
    }
}
