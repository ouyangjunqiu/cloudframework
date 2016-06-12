<?php
/**
 * @desc ExtDate.php
 * @author created by oShine on  2015/4/21
 */
namespace cloud\core\utils;

class ExtRangeDate {

    public $startDate;
    public $endDate;

    public function __construct($startDate,$endDate){
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public static function month(){
        return self::range(30);
    }

    public static function range($day){
        $endDate =  date('Y-m-d', strtotime('-1 DAYS'));
        $startDate = date('Y-m-d', strtotime("-$day DAYS"));
        $rangeDate = new self($startDate,$endDate);
        return $rangeDate;
    }

    public static function rangeNow($day){
        $day = $day - 1;
        $endDate =  date('Y-m-d');
        $startDate = date('Y-m-d', strtotime("-$day DAYS"));
        $rangeDate = new self($startDate,$endDate);
        return $rangeDate;
    }

    public static function week(){
        return self::range(7);
    }

    public static function max(){
        return self::range(29);
    }

    public static function yesterday(){
        return self::range(1);
    }

    public static function lastWeek(){
        $endDate =  date('Y-m-d', strtotime('-8 DAYS'));
        $startDate = date('Y-m-d', strtotime("-14 DAYS"));
        $rangeDate = new self($startDate,$endDate);
        return $rangeDate;
    }

    public static function beforeYesterday(){
        $endDate =  date('Y-m-d', strtotime('-2 DAYS'));
        $startDate = date('Y-m-d', strtotime("-2 DAYS"));
        $rangeDate = new self($startDate,$endDate);
        return $rangeDate;
    }

}