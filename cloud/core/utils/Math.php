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

    /**
     * 最小二乘法（又称最小平方法）是一种数学优化技术。它通过最小化误差的平方和寻找数据的最佳函数匹配。
     * @param array $plot 二维数据 x1=>y1,x2=>y2
     * @return float|int
     */
    public static function polyfitEx($plot = array()){
        if(empty($plot)){
            return 0;
        }

        $x = array_keys($plot);
        $y = array_values($plot);

        $a = self::polyfit($x,$y);
        return $a;
    }

    /**
     * 最小二乘法（又称最小平方法）是一种数学优化技术。它通过最小化误差的平方和寻找数据的最佳函数匹配。
     * @param array $x
     * @param array $y
     * @return float
     */
    public static function polyfit($x = array(),$y = array()){

        $n = count($x);
        $Exy = 0;
        $Ex2 = 0;
        $Ex = 0;
        $Ey = 0;
        for($i=0;$i<$n;$i++){
            $Exy += $x[$i]*$y[$i];
            $Ex2 += $x[$i]*$x[$i];
            $Ex += $x[$i];
            $Ey += $y[$i];
        }
        $a = ($n*$Exy-$Ex*$Ey)/($n*$Ex2-$Ex*$Ex);
        return $a;
    }

}