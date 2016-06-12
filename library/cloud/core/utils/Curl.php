<?php
namespace cloud\core\utils;
/**
 * cURL 常用操作封装
 *
 * @author Jeffrey Au <fly88oj@163.com>
 * @version $Id$
 */
class Curl
{

    /**
     * @var array $defaultOptions
     */
    public static $defaultOptions = array(
        CURLOPT_FAILONERROR => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_CONNECTTIMEOUT => 15,
        CURLOPT_TIMEOUT => 60,
        //CURLOPT_COOKIESESSION => 1,
    );
    /**
     * 返回 JSON 内容为对象
     */
    const JSON_OBJECT = 0;

    /**
     * 返回 JSON 内容为数组
     */
    const JSON_ARRAY = 1;

    /**
     * cURL Handle
     *
     * @var resource
     */
    private $curl;

    /**
     * 当前（默认） cURL 参数
     *
     * @var array
     */
    private $options = array();

    /**
     * 最后一次请求的错误信息
     *
     * @var null|string
     */
    private $error = null;

    /**
     * @var int
     */
    private $httpCode = null;

    /**
     * @param array $options 可选的覆盖默认 cURL 参数
     */
    public function __construct(array $options = array())
    {
        $this->curl = curl_init();
        $this->options = self::$defaultOptions;
        foreach($options as $key=>$option){
            $this->options[$key] = $option;
        }
    }

    /**
     * 设置 cURL 多个选项
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
        foreach ($options as $key => $value) {
            $this->setOption($key, $value);
        }
    }

    /**
     * 设置 cURL 单个选项
     *
     * @param $key
     * @param $value
     */
    public function setOption($key, $value)
    {
        $this->options[$key] = $value;
    }

    /**
     * 发送 GET 请求并返回解析后的 JSON 内容
     *
     * @param $url
     * @param array $data
     * @param int $type
     * @return null|object|array
     */
    public function getJson($url, array $data = array(), $type = self::JSON_ARRAY)
    {
        $content = $this->get($url, $data);
        return json_decode($content, $type);
    }

    /**
     * 发送 GET 请求
     *
     * @param $url
     * @param array $data
     * @return null|string
     */
    public function get($url, array $data = array())
    {
        if (!empty($data)) {
            if (false === strpos($url, '?')) {
                $url .= '?';
            } else {
                $url .= '&';
            }
            $url .= http_build_query($data);
        }
        $options = array(
            CURLOPT_URL => $url,
        );
        return $this->request($options);
    }

    /**
     * 发送 cURL 请求
     *
     * @param array $options
     * @return mixed
     */
    private function request(array $options = array())
    {
        $this->setOptions($options);
        curl_setopt_array($this->curl, $this->options);
        $result = curl_exec($this->curl);
        $errorNo = curl_errno($this->curl);
        $response = curl_getinfo( $this->curl );
        if ($errorNo) {
            $this->error = '[' . $errorNo . '] ' . curl_error($this->curl);
        } else {
            $this->error = null;
        }
        if(isset($response['http_code'])){
            $this->httpCode = $response['http_code'];
        }

        return $result;
    }

    /**
     * 发送 POST 请求并返回解析后的 JSON 内容
     *
     * @param $url
     * @param array $data
     * @param int $return
     * @return null|object|array
     */
    public function postJson($url, array $data = array(), $return = self::JSON_ARRAY)
    {
        $content = $this->post($url, $data);
        return json_decode($content, $return);
    }

    /**
     * 发送 POST 请求
     *
     * @param $url
     * @param array $data
     * @return null|string
     */
    public function post($url, array $data = array())
    {
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
        );
        if (!empty($data)) {
            if ($this->isMultiPart($data)) {
                $options[CURLOPT_POSTFIELDS] = $data;
            } else {
                $options[CURLOPT_POSTFIELDS] = http_build_query($data);
            }
        }
        return $this->request($options);
    }

    private function isMultiPart($data)
    {
        foreach ($data as $value) {
            if ('@' == $value[0])
                return true;
        }
        return false;
    }

    /**
     * 判断最后一次请求是否有错误
     *
     * @return bool
     */
    public function hasError()
    {
        return null !== $this->error;
    }

    /**
     * 获取最后一次请求的错误信息
     *
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    public function getHttpCode()
    {
        return $this->httpCode;
    }
} 