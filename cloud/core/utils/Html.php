<?php
/**
 * User: ouyangjunqiu
 * Date: 16/5/3
 * Time: 下午2:16
 */

namespace cloud\core\utils;


class Html extends \CHtml
{
    public static function selectCombox($name,$selected,$values = array(),$htmlOptions = array()){

        if(!isset($htmlOptions["class"])){
            $htmlOptions["class"] = "btn-group";
        }

        if(!isset($htmlOptions["data-toggle"])){
            $htmlOptions["data-toggle"] = "buttons";
        }

        $content = "";
        foreach($values as $k=>$v){
            if($k == $selected) {
                $content.= "<label class=\"btn btn-default active\"><input type=\"radio\" name=\"{$name}\" value=\"{$k}\" autocomplete=\"off\">{$v}</label>";
            }else{
                $content.= "<label class=\"btn btn-default\"><input type=\"radio\" name=\"{$name}\" value=\"{$k}\" autocomplete=\"off\">{$v}</label>";
            }
        }

        return self::tag("div",$htmlOptions,$content);

    }

}