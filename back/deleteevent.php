<?php
require_once('db.php');

$get_id=$_GET['id_event'];

// sql to delete a record
$sql = "Delete from event where id_event = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:event.php');
?>