<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$tasksPDOREF = fetchAllTasks($pdo);

require 'index.view.php';
?>