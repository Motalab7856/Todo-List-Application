<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row mt-5" >
<div class="col-lg-10 mx-auto" >
<div class="card shadow">
<div class="card-header">
<h2>To-do list Update</h2>
</div>
<div class="card-body p-4">
<form action="./updata_data.php" method="post">
<?php
        $id= $_GET['id'];
        $db_connect= mysqli_connect('localhost','root','','todo');
        $todo = "SELECT `task_list` FROM `task` WHERE id=$id";
        $todo_db = mysqli_query($db_connect,$todo);
        $todos = mysqli_fetch_assoc($todo_db);
        
    ?>
<div class="input-group mb-3">
  <input type="text" class="form-control"  aria-describedby="button-addon2" name="todo" value="<?=$todos['task_list']?>" >
  <input type="text"  name="id" value="<?=$id?>"  hidden >
  
  <button class="btn btn-primary" type="submit" id="button-addon2">Update Task</button>
</div>
              
</form>



</div>
</div>
</div>
        </div>
                
                
</div>
                

            
  </body>
</html>