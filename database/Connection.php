<?php
namespace Database;
use PDO;
use PDOException;
include __DIR__.'/../config.php';

class Connection
{

	public function make()
	{
		try{
			return new PDO(
				'mysql:host='.HOST . ';dbname='. DBNAME, USERNAME, PASSWORD
			);

		}catch(PDOException $e){
			die('connection failed'.$e->getMessage());
		}
	}
}
