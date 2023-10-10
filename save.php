<?php
include "conn.php" ;
$task = $_POST['task'] ;
$query = $db->prepare("INSERT INTO tasks_tbl SET task_col = ?");
$save = $query->execute(array($task));
header("location: index.php");

?>