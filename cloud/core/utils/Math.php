<?php
/**
 * Class Math
 * @package cloud\core\utils
 * @author oShine <oshine.ouyang@da-mai.com>
 */
namespace cloud\core\utils;


class Math
{
    /**
     * 计算上升或下降百分比
     * 假设原来的数是a,现在的数是b,
     * 如果b>a,上升的百分数=[(b-a)/a]*100%;
     * 如果a>b,下降的百分数=[(a-b)/a]*100%.
     * @param $a
     * @param $b
     * @return float|int
     */
    public static function growth($a,$b){
        if($a > $b ){
            return -(round(@(($a-$b)/$a)*100,2));
        }else if($a < $b){
            return (round(@(($b-$a)/$b)*100,2));
        }
        return 0;
    }

    /**
     * 通过千位分组来格式化数字
     * @param $number
     * @return string
     */
    public static function nString($number){
        return number_format($number,2);
    }

}