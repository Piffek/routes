<?php
namespace Database;
use Database\Connection;
class QueryBuilder extends Connection
{
	public function selectAll()
	{
		$db = $this->make() -> prepare('SELECT * FROM buyings');
		$db->execute();
		return $db;
	}
}