<?php
/**
 * TOP API: taobao.picture.get request
 *
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class TopLinker_Request_PictureGet extends TopLinker_Request_Abstract
{
    /**
     * 是否删除,unfroze代表没有删除
     **/
    public $deleted;

    /**
     * 查询上传结束时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    public $endDate;

    /**
     * 图片查询结果排序,time:desc按上传时间从晚到早(默认), time:asc按上传时间从早到晚,sizes:desc按图片从大到小，sizes:asc按图片从小到大,默认time:desc
     **/
    public $orderBy;

    /**
     * 页码.传入值为1代表第一页,传入值为2代表第二页,依此类推,默认值为1
     **/
    public $pageNo;

    /**
     * 每页条数.每页返回最多返回100条,默认值40
     **/
    public $pageSize;

    /**
     * 图片分类ID
     **/
    public $pictureCategoryId;

    /**
     * 图片ID
     **/
    public $pictureId;

    /**
     * 查询上传开始时间点,格式:yyyy-MM-dd HH:mm:ss
     **/
    public $startDate;

    /**
     * 图片标题,最大长度50字符,中英文都算一字符
     **/
    public $title;

    public function rules()
    {
        return array();
    }
}
