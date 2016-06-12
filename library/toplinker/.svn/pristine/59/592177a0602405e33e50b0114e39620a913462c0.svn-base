<?php
/**
 * TOP API: taobao.taocode.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_TaocodeGet extends TopLinker_Request_Abstract
{
    /**
     * 淘代码详情
     **/
    public $taoCode;

    public function setTaoCode($taoCode)
    {
        $this->taoCode = $taoCode;
        $this->apiParas["tao_code"] = $taoCode;
    }

    public function getTaoCode()
    {
        return $this->taoCode;
    }

    public function rules()
    {
        return array();
        //RequestCheckUtil::checkNotNull($this->taoCode, "taoCode");
    }
}
