<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$appKey = 0;
$secretKey = '';

$config = new TopLinker_Config($appKey, $secretKey); // 先创建 TopLinker 配置对象
$config->maxRequest = 10; // 设置最大并发请求数，默认值是 100
$linker = new TopLinker($config); // 把配置传入

$params = array('fields' => '');
$linker->call('taobao.time.get', 'process', $params); // 无需 Session 的请求

$session = '';
$linker->call('taobao.time.get', 'process', $params, $session); // 带有 Session 的请求

$linker->finish(); // 等待所有异步请求完成，防止请求全部完成前 PHP 提前结束

function process(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response) {
    if (!$response->hasError()) {
        // 处理结果
        print_r($response->getData());
    } else {
        // 处理错误
        print_r($response->getError());
    }
}