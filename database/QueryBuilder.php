<?php
namespace Database;
use Database\Connection;
class QueryBuilder extends Connection
{
	public function selectAll($table)
	{
		$db = $this->make() -> prepare('SELECT * FROM '.$table.'');
		$db->execute();
		return $db;
	}
}