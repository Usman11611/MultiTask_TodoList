<?php
// Name: Usman Haider        MultiTask-TodoList      Date:03/23/2024


require 'functions.php'; // Include the functions file
$id = $_GET['id']; // Assuming the ID is passed via GET
$todoData = getSingleTodo($id); // Get todo data by ID

if(isset($_POST['todo_submit'])){
    updateTodo($_POST); // Update todo if form is submitted
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Edit To Do</title>
  </head>
  <body>
  <div class="background-image"> <img src = "img/To-do.webp"> </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
               <div class="card">
                   <div class="card-header">
                       <h3>Edit To-do</h3>
                   </div>
                   <div class="card-body">
                        <form action="edit.php?id=<?php echo $id; ?>" method="POST">
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <!-- Dropdown for selecting priority -->
                                <select class="form-control" name="priority">
                                    <!-- Options for priority selection -->
                                    <option value="1" <?php echo ($todoData['priority'] == 1) ? 'selected' : ''; ?>>Low</option>
                                    <option value="2" <?php echo ($todoData['priority'] == 2) ? 'selected' : ''; ?>>Medium</option>
                                    <option value="3" <?php echo ($todoData['priority'] == 3) ? 'selected' : ''; ?>>High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="todo">To Do</label>
                                <!-- Input field for entering todo -->
                                <input type="text" class="form-control" name="todo" value="<?php echo $todoData['todo']; ?>" placeholder="Enter Your to do">
                            </div>
                            <div class="form-group">
                                <label for="Deadline">Deadline</label>
                                <!-- Input field for entering deadline -->
                                <input type="date" class="form-control" name="Deadline" value="<?php echo $todoData['Deadline']; ?>">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <!-- Submit button -->
                            <button type="submit" name="todo_submit" class="btn btn-primary">Update</button>
                        </form>
                   </div>
               </div>
              </div>
          </div>
      </div>
  </body>
</html>
