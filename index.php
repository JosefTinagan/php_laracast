<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);


// $greetings = "Hello, World";

// $names = [
// 	'Jeff',
// 	'John',
// 	'Mary'
// ];

// $breedOfDogs = [
// 	'Alaskan Malamute',
// 	'Golden Retriever',
// 	'Husky',
// 	'Samoyed',
// 	'Bernese Mountain Dog'
// ];

// $person = [
// 	'age' => 31,
// 	'hair' => 'brown',
// 	'career' => 'web developer'
// ];

// $task = [
// 	'title' => 'Groceries',
// 	'date' => 'Tomorrow',
// 	'assigned_to' => 'Me',
// 	'Completed' => true
// ];

// ageChecker(22);

// class Task{
// 	public $description;
// 	public $completed = false;

// 	public function __construct($description){
// 		$this->description = $description;
// 	}

// 	public function complete(){
// 		$this->completed=true;
// 	}

// 	public function isComplete(){
// 		return $this->completed;
// 	}

// 	public function description(){
// 		return $this->description;
// 	}


// };

// $tasks = [
// 		new Task('Go to the store'),
// 		new Task('Finish homework'),
// 		new Task('Clean room')
// ];

// $tasks[0]->complete();

require 'index.view.php';


?>