<?php 
// Name: Usman Haider        MultiTask-TodoList      Date:03/23/2024


require 'functions.php'; // Include the functions file

$get_todo = getTodo(); // Retrieve all todo items

// Check if status parameter is set in the URL and process status change
if(isset($_GET['status']) && $_GET['id']){
    $id = $_GET['id'];
    $status = $_GET['status'];
    if($_GET['status'] === 'undone'){
        changeStatus($id, $status); // Change status to undone
    }
    if($_GET['status'] === 'done'){
        changeStatus($id, $status); // Change status to done
    }
}else{
    ?>
    <script>window.href.location ='todo.php';</script> <!-- Redirect if status parameter is not set -->
    <?php
}

// Check if action parameter is set in the URL and process action
if(isset($_GET['action']) && $_GET['id']){
    $id = $_GET['id'];
    if($_GET['action'] === 'delete'){
        delete($id); // Delete todo item
    }
}else{
    ?>
    <script>window.href.location ='todo.php';</script> <!-- Redirect if action parameter is not set -->
    <?php
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">

    <title>To Do List</title>
  </head>
  <body>
  <div class="background-image"> <img src = "img/To-do.webp"> </div>

      <div class="container">
          <div class="row">
              <div class="col-lg-12">
               <div class="card">
                   <div class="card-header d-flex align-items-center justify-content-between">
                       <h3>MultiTask-TodoList</h3>
                       <a href="index.php" class="btn btn-info float-right">Add a new Todo</a>
                   </div>
                   <div class="card-body">
                   <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Todo</th>
                            <th scope="col">Deadline</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($get_todo as $todo){
                            ?>
                            <tr>
                                <th><?= $todo['id']; ?></th>
                                <td><?= $todo['todo']; ?></td>
                                <td><?= $todo['Deadline']; ?></td>
                                <td><?= date('M-d-Y, h:i a', strtotime($todo['created_at'])); ?></td>
                                <td><?= date('M-d-Y, h:i a', strtotime($todo['updated_at'])); ?></td>
                                <td>
                                    <?php 
                                        // Check the status of the todo item and display appropriate action buttons
                                        if($todo['status'] == 1){ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=undone" class="btn btn-success">Done</a>
                                       <?php }else{ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=done" class="btn btn-secondary">Undone</a>
                                       <?php } ?>

                                    <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="todo.php?id=<?= $todo['id']; ?>&action=delete" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                   </div>
               </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
