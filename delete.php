<?php
include "conn.php";
$id = $_GET['id'];
$query = $db->prepare("DELETE FROM tasks_tbl WHERE id = ?");
$delete = $query->execute(array($id));
header("location: index.php");

?>