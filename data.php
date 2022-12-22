<?php
$todo = htmlspecialchars(trim($_POST['todo']));
if ($todo) {
    $db_connect= mysqli_connect('localhost','root','','todo');
    $todo_insert_query = "INSERT INTO `task`( `task_list`) VALUES ('$todo')";
    $todo_insert_db = mysqli_query($db_connect,$todo_insert_query);
    header('location:./index.php');
}
else {
    echo 'task daw';
}
?>