<?php
require '../lib/TopLinker/Autoloader.php';
TopLinker_Autoloader::register();

$appKey = 0;
$secretKey = '';

$config = new TopLinker_Config($appKey, $secretKey); // 先创建 TopLinker 配置对象
$linker = new TopLinker($config); // 把配置传入

$object = new SomeLogicClass($linker, 'showResult');
$object->process();

class SomeLogicClass
{
    private $linker;
    private $callback;

    private $tasks = array(
        'fetchResourceOne',
        'fetchResourceTwo',
        'combineResources',
        // 'uselessTask', 可配置的任务执行开关和顺序
        'saveResult'
    );

    private $step = 0;

    private $result = null;

    public function __construct(TopLinker $linker, callable $callback)
    {
        $this->linker = $linker;
        $this->callback = $callback;
    }

    public function process()
    {
        if ($this->step < count($this->tasks)) {
            call_user_func(array($this, $this->tasks[$this->step++]));
        } else {
            call_user_func($this->callback, $this->result);
        }
    }

    public function callback(TopLinker_Request_Abstract $request, TopLinker_Response_Abstract $response)
    {
        call_user_func(array($this, $this->tasks[$this->step]), $response->getData());
    }

    private function fetchResourceOne($result = null)
    {
        if (null === $result) {
            $this->linker->call('taobao.time.get', array($this, 'callback'));
        } else {
            # 处理结果数据
            $this->process(); // 操作完成后下一步
        }
    }

    private function fetchResourceTwo($result = null)
    {
        if (null === $result) {
            $this->linker->call('taobao.time.get', array($this, 'callback'));
        } else {
            # 处理结果数据
            $this->process(); // 操作完成后下一步
        }
    }

    private function combineResources()
    {
        // 处理结果数据
        $this->process(); // 没有异步操作时直接跳到下一步
    }

    private function uselessTask()
    {
        // 处理结果数据
        $this->process(); // 没有异步操作时直接跳到下一步
    }

    private function saveResult()
    {
        // 处理结果数据
        $this->process(); // 没有异步操作时直接跳到下一步
    }
}

function showResult($result) {
    echo $result;
}