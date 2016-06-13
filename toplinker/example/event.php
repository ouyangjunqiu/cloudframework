<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$appKey = 0;
$secretKey = '';

$config = new TopLinker_Config($appKey, $secretKey); // TopLinker 配置对象
$linker = new TopLinker($config);

$counter = new Damai_Api_Counter(); // 创建 TopLinker 事件监听器
$linker->addListener($counter); // 添加到 TopLinker 里面

$linker->call('taobao.time.get', 'process'); // 接口没有额外参数可以不传

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

class Damai_Api_Counter implements TopLinker_Event_Listener
{
    public function onBeforeRequest(TopLinker_Request_Abstract $request, $url, $post)
    {
        $apiName = $request->getMethod();
        echo "正在请求 {$apiName} 接口\n";
    }

    public function onAfterRequest(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        $apiName = $request->getMethod();
        echo "已经请求 {$apiName} 接口\n";
    }

}