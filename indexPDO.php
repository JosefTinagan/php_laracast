<?php

require 'Task.php';

try{
	$pdo = new PDO("mysql:localhost=3306;dbname=mytodo","root","");
} catch (PDOException $e){
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasksPDO = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->description);

require 'index.view.php';
?>
