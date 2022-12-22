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
    <div  class="container">
        <div class="row mt-5" >
<div class="col-lg-10 mx-auto" >
<div class="card shadow">
<div class="card-header">
<h2>To-do list application</h2>
</div>
<div class="card-body p-4">
<form action="./data.php" method="post">

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Enter task" aria-label="Recipient's username" aria-describedby="button-addon2" name="todo">
  <button class="btn btn-primary" type="submit" id="button-addon2">Add Task</button>
</div>

</form>
<table class="table table-hover">
<?php
        $serial=1;
        $db_connect= mysqli_connect('localhost','root','','todo');
        $todo = "SELECT * FROM `task`";
        $todo_db = mysqli_query($db_connect,$todo);
    ?>
  <tbody>
    
    <?php
        foreach ($todo_db as $todos) : ?>
           <tr>
      <th ><?= $serial++?></th>
      <td style="width: 950px;"><?=$todos['task_list']?></td>
      <td><a href="./update.php?id=<?=$todos['id']?>"  class="btn"><i class="fa fa-pencil-square-o" style="font-size:18px;color:blue;" aria-hidden="true"></i></a></td>
      <td><a href="./delete.php?id=<?=$todos['id']?>" class="btn"><i class="fa fa-times " style="font-size:20px;color:red;" aria-hidden="true"  ></i></a></td>
    </tr> 

           <?php
        endforeach
    ?>
   
  </tbody>
</table>

</div>
</div>
</div>
        </div>
                
                
</div>
                

            
  </body>
</html>