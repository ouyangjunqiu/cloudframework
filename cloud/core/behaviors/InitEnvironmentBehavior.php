<?php

namespace cloud\core\behaviors;
use cloud\core\utils\Convert;
use cloud\core\utils\DateTime;
use cloud\core\utils\Env;
use CBehavior;
use CException;
use cloud\Cloud;

/**
 * Class InitEnvironmentBehavior
 */
class InitEnvironmentBehavior extends CBehavior
{

    public function attach( $owner )
    {
        $owner->attachEventHandler('onInitModule', array($this, 'handle'));
    }


    public function handle( $event ) {

        Cloud::app()->performance->startClock();
        Cloud::app()->performance->startMemoryUsageMarker();

        define( 'STATICURL', Cloud::app()->assetManager->getBaseUrl() );

        define( 'IN_MOBILE', Env::checkInMobile() );
        define( 'TIMESTAMP', time() );
        define( 'IN_APP', Env::checkInApp() );
        $this->setTimezone();

        if ( function_exists( 'ini_get' ) ) {
            $memorylimit = @ini_get( 'memory_limit' );
            if ( $memorylimit && Convert::ConvertBytes( $memorylimit ) < 33554432 && function_exists( 'ini_set' ) ) {
                ini_set( 'memory_limit', '128m' );
            }
        }

        $global = array(
            'timestamp' => TIMESTAMP,
            'version' => VERSION,
            'clientip' => Env::getClientIp(),
            'referer' => '',
            'charset' => CHARSET,
            'authkey' => '',
            'newversion' => 0,
            'config' => array(),
            'setting' => array(),
            'user' => array(),
            'cookie' => array(),
            'session' => array(),
            'lunar' => DateTime::getlunarCalendar(),
            'staticurl' => STATICURL
        );

        $global['phpself'] = Env::getScriptUrl();
        $sitePath = substr( $global['phpself'], 0, strrpos( $global['phpself'], '/' ) );
        $global['isHTTPS'] = Env::isHttps();
        $global['siteurl'] = Env::getSiteUrl( $global['isHTTPS'], $sitePath );
        $url = parse_url( $global['siteurl'] );
        $global['siteroot'] = isset( $url['path'] ) ? $url['path'] : '';
        $global['siteport'] = empty( $_SERVER['SERVER_PORT'] ) || $_SERVER['SERVER_PORT'] == '80' || $_SERVER['SERVER_PORT'] == '443' ? '' : ':' . $_SERVER['SERVER_PORT'];

        Cloud::app()->setting->copyFrom( $global );
    }

    private function setTimezone() {
        if ( function_exists( 'date_default_timezone_set' ) ) {
            @date_default_timezone_set('PRC');
        }
    }

}