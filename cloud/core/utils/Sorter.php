<?php
namespace cloud\core\utils;
/**
 * Created by PhpStorm.
 * User: ouyangjunqiu
 * Date: 16/4/27
 * Time: 上午8:54
 */
class Sorter {
    private $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    public function compare($a,$b){
        return $a[$this->field] == $b[$this->field]?0:($a[$this->field] > $b[$this->field] ? -1 : 1);
    }

    public static function sort(&$data,$field){
        $sorter = new self($field);
        usort($data,array($sorter,"compare"));
    }
}