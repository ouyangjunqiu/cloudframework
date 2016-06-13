<?php

namespace cloud\core\components;

use CDbLogRoute;

class Log extends CDbLogRoute {

    public $logTableName = '{{log}}';
    public $connectionID = 'db';

    public function init() {
        date_default_timezone_set( 'PRC' );
        $tableId = \cloud\core\model\Log::getLogTableId();
        $this->logTableName = \cloud\core\model\Log::getTableName( $tableId );
        parent::init();
    }

    protected function createLogTable( $db, $tableName ) {
        $db->createCommand()->createTable( $tableName, array(
            'id' => 'pk',
            'level' => 'varchar(128)',
            'category' => 'varchar(128)',
            'logtime' => 'integer',
            'message' => 'text',
                ), 'ENGINE=MyISAM' );
    }

}
