<?php 
require __DIR__ . '/../views/contact.view.php';
use Database\QueryBuilder;

$query = new QueryBuilder;
foreach($query->selectAll($_POST['table']) as $row)
{
	echo $row['id'];
}

?>