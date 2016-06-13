<?php
/**
 * TOP API: taobao.fenxiao.distributors.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_FenxiaoDistributorsGet extends TopLinker_Request_Abstract
{
    /**
     * 分销商用户名列表。多个之间以“,”分隔;最多支持50个分销商用户名。
     **/
    public $nicks;

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->nicks, "nicks");
    }
}
