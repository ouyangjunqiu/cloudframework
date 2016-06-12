<?php

class TopLinker_Helper_PageCombiner_Handler_Retry implements TopLinker_Helper_PageCombiner_Handler
{
    /**
     * 结果判断 key
     * @var int
     */
    public $lookupKey = 'msg';

    /**
     * 结果判断值
     * @var int
     */
    public $lookupValue = 'App Call Limited';

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
     * @param TopLinker_Helper_PageCombiner_Referee $referee
     * @param TopLinker_Request_Abstract $request
     * @param TopLinker_Response_Abstract $response
     */
    public function handle(TopLinker_Helper_PageCombiner_Referee $referee, TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        if ($response->getData($this->lookupKey) == $this->lookupValue) {
            if ($this->retied < $this->maxRetry) {
                $referee->retry();
                $this->retied++;
            }
        }
        $referee->accept();
    }
}
