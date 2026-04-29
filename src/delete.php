<?php
// Including the database connection file
include("config.php");

// Getting id of the data from url
$id = $_GET['id'];

// Deleting the row from table
$stmt = mysqli_prepare($mysqli, "DELETE FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);

// Redirecting to the display page (index.php in our case)
header("Location:index.php");
?>