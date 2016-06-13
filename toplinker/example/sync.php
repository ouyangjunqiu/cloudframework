<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$appKey = 0;
$secretKey = '';

$config = new TopLinker_Config($appKey, $secretKey); // 先创建 TopLinker 配置对象
$linker = new TopLinker($config); // 把配置传入

$params = array('fields' => '');
$linker->callSync('taobao.time.get', 'process', $params); // 使用回调方式获取同步下载结果

$response = $linker->load('taobao.time.get', $params); // 使用返回值方式获取同步下载结果

function process(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response) {
    if (!$response->hasError()) {
        // 处理结果
        print_r($response->getData());
    } else {
        // 处理错误
        print_r($response->getError());
    }
}