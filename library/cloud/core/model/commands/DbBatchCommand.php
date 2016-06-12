<?php
namespace cloud\core\model\commands;
use CDbCommand;
use CDbException;

/**
 * 
 * 批量插入数据到数据库...
 * $batch_command = new CDbBatchCommand(Yii::app()->db);
 * $batch_command->insert('table_name',array(array('name'=>'name1'),array('name'=>name2)))
 * @author oShine
 *
 */

class DbBatchCommand extends CDbCommand
{
    /**
     * @param string $table
     * @param array $columns
     * @return int|void
     * @throws CDbException
     */
	public function insert($table, $columns)
	{

		if(empty($columns)) return 0;
		if(reset($columns) === FALSE)return 0;
		$names = array_keys((array)reset($columns));
		foreach ($names as $k=>$v)
		{
			$names[$k] = $this->getConnection()->quoteColumnName($v);
		}

        $params=array();
        $values = array();
        foreach ($columns as $column) {

			$column = (array)$column;
			foreach($column as $name=>$value)
			{
				$name = $this->getConnection()->quoteColumnName($name);
				$key = array_search($name, $names);
				$params[$key] = "'".addslashes($value)."'";

			}
				
			$values[] = '('.implode(', ', $params) . ')';
		}

		$values = implode(',', $values);

		$sql='INSERT INTO ' . $this->getConnection()->quoteTableName($table)
				. ' (' . implode(', ',$names) . ') VALUES '.$values;
			
		return $this->setText($sql)->execute();
		
	}


    /**
     * @param $table
     * @param $columns
     * @return int
     * @throws CDbException
     */
	public function replace($table, $columns)
	{
		$params=array();

		if(empty($columns)) return 0;
		if(reset($columns) === FALSE)return 0;
		$names = array_keys((array)reset($columns));
		foreach ($names as $k=>$v)
		{
			$names[$k] = $this->getConnection()->quoteColumnName($v);
		}

		foreach ($columns as $column) {

			$column = (array)$column;
			foreach($column as $name=>$value)
			{
				$name = $this->getConnection()->quoteColumnName($name);
				$key = array_search($name, $names);
				$params[$key] = "'".addslashes($value)."'";

			}

			$values[] = '('.implode(', ', $params) . ')';
		}

		$values = implode(',', $values);
		$sql='REPLACE INTO ' . $this->getConnection()->quoteTableName($table)
		. ' (' . implode(', ',$names) . ') VALUES '.$values;

		return $this->setText($sql)->execute();

	}
	
}