<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

/**
 * 实现 Page Combiner 结果判断处理器
 * Class Handler
 */
class Handler implements TopLinker_Helper_PageCombiner_Handler
{
    /**
     * 自定义最大重试次数
     * @var int
     */
    public $maxRetry = 3;

    /**
     * 记录已经重试次数
     * @var int
     */
    private $retied = 0;

    /**
     * 结果判断函数
     * 结果正确调用 $referee->accept()
     * 结果重试调用 $referee->retry()
     * 停止请求调用 $referee->stop()
     *
     * @param TopLinker_Helper_PageCombiner_Referee $referee
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     */
    public function handle(TopLinker_Helper_PageCombiner_Referee $referee, TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        if ($response->getData('msg') == 'App Call Limited') {
            if ($this->retied < $this->maxRetry) {
                $referee->retry();
                $this->retied ++;
            }
        }
        $referee->accept();
    }
}

$appKey = '';
$secretKey = '';

$config = new TopLinker_Config($appKey, $secretKey); // 先创建 TopLinker 配置对象
$config->curlOptions = array(
    CURLOPT_PROXY => 'http://192.168.1.223:8888/',
);
$linker = new TopLinker($config); // 把配置传入ession 的请求

$params = array(
    'nick' => '',
    'campaign_id' => '',
    'page_size' => '5',
    'page_no' => '1',
);
$session = '';

$handler = new Handler();
$combiner = new TopLinker_Helper_PageCombiner($linker, 'process', $session);
$combiner->totalPagePath = 'adgroups.page_size'; // 总页数路径
$combiner->setHandler($handler); // Page Combiner 默认没有 Handler

$linker->call('taobao.simba.adgroupsbycampaignid.get', array($combiner, 'process'), $params, $session); // 带有 Session 的请求

$linker->finish(); // 等待所有异步请求完成，防止请求全部完成前 PHP 提前结束

function process($data) {
    var_dump($data);
}