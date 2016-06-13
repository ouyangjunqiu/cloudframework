<?php
/**
 * TOP API: taobao.topats.result.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TopatsResultGet extends TopLinker_Request_Abstract
{
    /**
     * 任务id号，创建任务时返回的task_id
     **/
    public $taskId;

    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
        $this->apiParas["task_id"] = $taskId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->taskId, "taskId");
    }
}
