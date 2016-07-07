<?php
/**
 * @file MimeType.php
 * @author ouyangjunqiu
 * @version Created by 16/7/7 12:11
 */

namespace cloud\core\utils;


class MimeType
{
    /**
     * @param $ext
     */
   public static function get($ext){
       $maps = array();
       $fp = fopen(dirname(__FILE__)."/table/MIME_Type.csv","r");
       while ($data = fgetcsv($fp)) {
           $k = str_replace(".","",trim($data[0]));
           $maps[$k] = $data[1];
       }
       fclose($fp);

       $ext = str_replace(".","",trim($ext));
       return isset($maps[$ext]) && !empty($maps[$ext])?$maps[$ext]:$maps["*"];
   }

}