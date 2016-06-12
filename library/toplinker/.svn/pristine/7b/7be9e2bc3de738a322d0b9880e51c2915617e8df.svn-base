<?php
/**
 * TOP API: taobao.users.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_UsersGet extends TopLinker_Request_Abstract
{
    /**
     * 查询字段：User数据结构的公开信息字段列表，以半角逗号(,)分隔
     **/
    public $fields;

    /**
     * 用户昵称，多个以半角逗号(,)分隔，最多40个
     **/
    public $nicks;

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas["fields"] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setNicks($nicks)
    {
        $this->nicks = $nicks;
        $this->apiParas["nicks"] = $nicks;
    }

    public function getNicks()
    {
        return $this->nicks;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->fields, "fields");
        //RequestCheckUtil::checkNotNull($this->nicks, "nicks");
    }
}
