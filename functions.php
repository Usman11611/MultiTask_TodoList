<?php
// Name: Usman Haider        MultiTask-TodoList      Date:03/23/2024


require 'db.php'; // Include the database connection file

// Function to create a new todo item
function createTodo($postData) {
    global $con;
    // Sanitize input data
    $todo = mysqli_real_escape_string($con, $postData['todo']);
    $Deadline = mysqli_real_escape_string($con, $postData['Deadline']);
    $priority = mysqli_real_escape_string($con, $postData['priority']); // Sanitize priority

    // SQL query to insert todo into database
    $query = "INSERT INTO `todo` (`todo`, `Deadline`, `priority`) VALUES ('$todo', '$Deadline', '$priority')";
    $execute_query = mysqli_query($con, $query); // Execute the query
    if($execute_query){
        header('location: todo.php'); // Redirect to todo.php if successful
    }
}

// Function to get all todo items
function getTodo(){
    global $con;
    // SQL query to select all todo items, ordered by priority descending
    $query = "SELECT * FROM `todo` ORDER BY priority DESC"; // Order by priority, assuming you want that
    $execute_query = mysqli_query($con, $query); // Execute the query
    return $execute_query; // Return the result set
}

// Function to change the status of a todo item
function changeStatus($id, $status){
    global $con;
    // SQL query to update todo item status based on provided status
    $query = $status === 'undone' ? "UPDATE `todo` SET `status`= 0 WHERE `id` = $id" : "UPDATE `todo` SET `status`= 1 WHERE `id` = $id";
    $execute_query = mysqli_query($con, $query); // Execute the query
    if($execute_query){
        header('location: todo.php'); // Redirect to todo.php if successful
    }
}

// Function to delete a todo item
function delete($id){
    global $con;
    // SQL query to delete todo item based on provided id
    $query = "DELETE FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query); // Execute the query
    if($execute_query){
        header('location: todo.php'); // Redirect to todo.php if successful
    }
}

// Function to get a single todo item by its id
function getSingleTodo($id){
    global $con;
    // SQL query to select a todo item based on provided id
    $query = "SELECT * FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query); // Execute the query
    $get_todo = mysqli_fetch_assoc($execute_query); // Fetch the todo item
    return $get_todo; // Return the fetched todo item
}

// Function to update a todo item
function updateTodo($request){
    global $con;
    // Sanitize input data
    $id = mysqli_real_escape_string($con, $request['id']);
    $todo = mysqli_real_escape_string($con, $request['todo']);
    $Deadline = mysqli_real_escape_string($con, $request['Deadline']);
    $priority = mysqli_real_escape_string($con, $request['priority']); // Sanitize priority

    // SQL query to update todo item based on provided data
    $query = "UPDATE `todo` SET `todo` = '$todo', `Deadline` = '$Deadline', `priority` = $priority WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query); // Execute the query
    if($execute_query){
        header('location: todo.php'); // Redirect to todo.php if successful
    }
}
?>
