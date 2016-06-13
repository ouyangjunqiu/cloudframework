<?php
namespace cloud\core\model;

use cloud\core\model\commands\DbBatchCommand;
use CDbConnection;
use CDbException;
use CLogger;
use Yii;

/**
 * 增强版 ActiveRecord
 *
 * 提供以下几个功能
 * 1.不同 Model对应不用数据库功能
 * 2.自动使用语言文件翻译字段的功能
 * 3.合并错误信息输出文本功能
 *
 * @author Jeffrey Au <fly88oj@163.com>
 * @version $Id$
 */
class ExModel extends Model
{
    public static $db = array();

    /**
     * @return CDbConnection
     * @throws CDbException
     */
    public function getDbConnection()
    {
        $componentName = $this->connectionName();
        if (isset(self::$db[$componentName])) {
            return self::$db[$componentName];
        } else {
            self::$db[$componentName] = Yii::app()->getComponent($componentName);
            if (self::$db[$componentName] instanceof CDbConnection){
                return self::$db[$componentName];
            }
            else {
                $message = 'Active Record keyword requires a "' . $componentName . '" CDbConnection application component.';
                Yii::log($message, CLogger::LEVEL_ERROR, 'extended');
                throw new CDbException(Yii::t('yii', $message));
            }
        }
    }

    /**
     * @return string
     */
    public function connectionName()
    {
        return 'db';
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        $result = array();
        $attributes = $this->attributeNames();
        $relations = array_keys($this->relations());
        $attributes = array_merge($relations, $attributes);
        foreach ($attributes as $attribute) {
            $special = get_class($this) . '.' . $attribute;
            $label = Yii::t('models', $special);
            if ($label == $special)
                $label = Yii::t('models', $attribute);
            $result[$attribute] = $label;
        }
        return $result;
    }

    /**
     * @param string $separator
     * @return string
     */
    public function getErrorsText($separator = '<br/>')
    {
        $messages = array();
        $errors = $this->getErrors();
        foreach ($errors as $error)
            $messages[] = pos($error);
        return implode($separator, $messages);
    }

    /**
     * @return array|mixed|null
     */
    public function getIdentity()
    {
        return $this->getPrimaryKey();
    }


    /**
     * Batch Insert Command
     * @param $columnValues
     * @throws CDbException
     */
    public function batchInsert($columnValues){

        $db = $this->getDbConnection();
        $db->setActive(true);
        $batchCommand = new DbBatchCommand($db);
        $batchCommand->insert($this->tableName(),$columnValues);
    }

    /**
     * @param mixed $condition query condition or criteria.
     * @param array $params parameters to be bound to an SQL statement.
     * @return array list of active records satisfying the specified condition. An empty array is returned if none is found.
     */
    public function findAllAsArray($condition = '', $params = array())
    {
        $model = $this->findAll($condition, $params);
        $array =  Array();
        foreach ($model as $m) {
            $array[] = $m->attributes;
        }
        return $array;
    }

}