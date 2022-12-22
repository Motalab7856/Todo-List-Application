<?php
$db_connect= mysqli_connect('localhost','root','','todo');
$id= $_GET['id'];
$todo_delete_query= "DELETE FROM `task` WHERE id=$id";
$todo_delete_db= mysqli_query($db_connect,$todo_delete_query);
header('location: ./index.php');
?>