<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$appKey = 0;
$secretKey = '';
$session = '';

$config = new TopLinker_Config($appKey, $secretKey); // TopLinker 配置对象
$linker = new TopLinker($config);

$client = $linker->createClient($session); // 创建对应某一客户 Session 的客户端对象
$client->call('taobao.simba.account.balance.get', 'process'); // 此时不需要传 Session
$client->call('taobao.simba.rpt.custeffect.get', 'process'); // 同上

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