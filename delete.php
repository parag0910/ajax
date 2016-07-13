<?php

$dbcon=mysqli_connect("localhost","root","qaz");
mysqli_select_db($dbcon,"ajaxdb");
session_start();

$task = $_GET['task'];


$sql= "DELETE FROM tdl WHERE task= '$task' ";
$res=mysqli_query($dbcon,$sql);

?>

