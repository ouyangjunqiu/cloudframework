<?php
/**
 * 继承CPhpMessageSource的消息来源类。
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;

use CPhpMessageSource;

class MessageSource extends CPhpMessageSource {

    /**
     * 为指定的语言和分类加载信息的翻译。
     * <code>
     * 	$data['lang'] = Yii::app()->getMessages()->loadMessages( 'dashboard.frameworkMenu','zh_cn' );
     * </code>
     * @param string $category 指定目录
     * @param string $language 指定语言
     * @return array
     */
    public function loadMessages( $category, $language ) {
        return parent::loadMessages( $category, $language );
    }

}
