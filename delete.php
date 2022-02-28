<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "chuk_internship";
  
// Do you remember the column value you parsed (passed) in table in read.php page (
// <td><a href="delete.php?bookId=<?php echo $row['id']; ) ?
// we have to get that id entitled bookId in that column value like the following


$intern_id = $_GET['bookId'];

// CONNECTING WITH DATABASE
$connectDb = mysqli_connect($servername, $username, $password, $dbName);

//Query to delete

$query = "DELETE FROM ongoing_internship WHERE id = '$intern_id'";
//statement to execute our query written in php format and make it sql readeable format
$execute = mysqli_query($connectDb, $query);

// if statement used to show message if data is deleted well
if ($execute) {
    header("location: index.php");
}
?>