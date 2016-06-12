<?php
/**
 * TOP API: taobao.logistics.address.search request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_LogisticsAddressSearch extends TopLinker_Request_Abstract
{
    /**
     * 可选，参数列表如下：<br><font color='red'>
    no_def:查询非默认地址<br>
    get_def:查询默认取货地址<br>
    cancel_def:查询默认退货地址<br>
    缺省此参数时，查询所有当前用户的地址库
    </font>
     **/
    public $rdef;

    public function rules()
    {
        return array();
    }
}
