<?php
$todo = htmlspecialchars(trim($_POST['todo']));
$id=$_POST['id'];
if ($todo) {
    $db_connect= mysqli_connect('localhost','root','','todo');
    $todo_update_query = "UPDATE `task` SET `task_list`='$todo' where id=$id";
    $todo_update_db = mysqli_query($db_connect,$todo_update_query);
    header('location:./index.php');
}
else {
    echo 'task daw';
}
?>