<?php

/**
 * 性能检测组件，可用于生成模式检测性能
 *
 * @package cloud.core.components
 * @author oshine <oshine.ouyang@da-mai.com>
 */

namespace cloud\core\components;

use cloud\Cloud;
use cloud\core\utils\Convert;
use CApplicationComponent;

class PerformanceMeasurement extends CApplicationComponent {

    /**
     * 开始时间，一般记录在流程初始化开始
     * @var integer
     */
    protected $startTime;

    /**
     * 内存使用
     * @var integer
     */
    protected $memoryUsage;

    /**
     * 用于生产模式的测试运行时间标记数组。
     * @var array
     */
    protected $timings = array();

    /**
     * 开始计时
     */
    public function startClock() {
        $this->startTime = microtime( true );
    }

    /**
     * 结束计时并返回用时
     * @return double
     */
    public function endClockAndGet() {
        $endTime = microtime( true );
        return number_format( ($endTime - $this->startTime ), 6 );
    }

    /**
     * 
     * 给时间标记数组增加一对记录，已存在的会更新
     * @param string $identifer 标记
     * @param number $time 秒数
     */
    public function addTimingById( $identifer, $time ) {
        if ( isset( $this->timings[$identifer] ) ) {
            $this->timings[$identifer] = $this->timings[$identifer] + $time;
        } else {
            $this->timings[$identifer] = $time;
        }
    }

    /**
     * 返回耗时记录数组
     * @return array 
     */
    public function getTimings() {
        return $this->timings;
    }

    /**
     * 开始标记内存使用
     */
    public function startMemoryUsageMarker() {
        $this->memoryUsage = memory_get_usage();
    }

    /**
     * 获取上一个标记到现在的内存使用情况
     * @param boolean $format 是否要格式化输出
     * @return mixed
     */
    public function getMemoryMarkerUsage( $format = true ) {
        $usage = (int) (memory_get_usage() - $this->memoryUsage);
        if ( $format ) {
            return Convert::sizeCount( $usage );
        }
        return $usage;
    }

    public function getDbStats() {
        $stats = Cloud::app()->db->getStats();
        return $stats[0];
    }

    /**
     * 获取当前内存使用情况
     * @return integer
     */
    public function getMemoryUsage() {
        return memory_get_usage();
    }

}
