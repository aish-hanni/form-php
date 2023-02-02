<?php

$id = $_GET['id'];

$sql = "delete from books where id = ".$id;

include('connect.php');

$conn->query($sql);  

header("Location: http://form-php.test/index.php");

?>