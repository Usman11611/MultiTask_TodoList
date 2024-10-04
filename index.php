<?php 
// Name: Usman Haider        MultiTask-TodoList      Date:03/23/2024


require 'functions.php'; // Include the functions file

// Check if form is submitted
if(isset($_POST['todo_submit'])){
    createTodo($_POST); // Create a new todo item
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
              <div class="col-lg-6 m-auto">
               <div class="card">
                   <div class="card-header">
                       <h3>MultiTask-TodoList</h3>
                   </div>
                   <div class="card-body">
                        <!-- Form for adding new todo -->
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <!-- Dropdown for selecting priority -->
                                <select class="form-control" name="priority">
                                    <option value="1">Low</option>
                                    <option value="2">Medium</option>
                                    <option value="3">High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="todo">To Do</label>
                                <!-- Input field for entering todo item -->
                                <input type="text" class="form-control" name="todo" placeholder="Enter Your to do">
                            </div>
                            <div class="form-group">
                                <label for="Deadline">Deadline</label>
                                <!-- Input field for entering deadline -->
                                <input type="date" class="form-control" name="Deadline">
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="todo_submit" class="btn btn-primary">Submit</button>
                        </form>
                   </div>
               </div>
              </div>
          </div>
      </div>
  </body>
</html>
