<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add an intern</title>
</head>
<body>
    <a href="index.php">Go Back</a>
    <center>
    <form action="" method="POST" style="margin-top:112px">
        <input type="text" name="name_of_intern" value="" placeholder="inter the name of  new intern"><br><br>
        <input type="number" name="Age" value="" placeholder="enetr hs/hr age"><br><br>
        <input type="text" name="college" value=""placeholder="enter hs/hr college"><br><br>
        <input type="number" name="endingDate" value=""placeholder="enter the ending date "><br><br>
        <input type="submit" name="submit">
    </form>
    </center>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chuk_internship";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    $intern_name=$_POST['name_of_intern'];
    $intern_age=$_POST['Age'];
    $intern_college=$_POST['college'];
    $date_of_ending_internship=$_POST['endingDate'];
    $query = "INSERT INTO ongoing_internship (name,age,college, ending_date) values('$intern_name','$intern_age','$intern_college','$date_of_ending_internship')";
    $execute = mysqli_query($connect, $query);
}