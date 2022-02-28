<?php
// the following codes are going to fetch data
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "chuk_internship";
        $id_gotten = $_GET['bookId'];

        // CONNECTING WITH DATABASE

        $connectDb = mysqli_connect($servername, $username, $password, $dbName);

        $query = "SELECT * FROM ongoing_internship where id = '$id_gotten'";

        $execute = mysqli_query($connectDb, $query);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATING A LIST</title>
</head>
<body>
    <h1>LIST OF INTERNS</h1>
    <a href="insert.php">Add a new intern</a>       
    <!--
        The following codes are going to fetch data in database and after fetching those data into form,
        we have to make it updated
  -->
        <?php while ($row = mysqli_fetch_array($execute)) { ?>  
        <form method="POST" action="">
        <h1>Add A new intern</h1>
        <input type="text" name="name_of_intern" value="" placeholder="inter the name of  new intern"><br><br>
        <input type="number" name="Age" value="" placeholder="enetr hs/hr age"><br><br>
        <input type="text" name="college" value=""placeholder="enter hs/hr college"><br><br>
        <input type="number" name="endingDate" value=""placeholder="enter the ending date "><br><br>
        <input type="submit" name="submit">
        </form> 
        <?php  } ?>
    </table>
   
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $intern_name=$_POST['name_of_intern'];
    $intern_age=$_POST['Age'];
    $intern_college=$_POST['college'];
    $date_of_ending_internship=$_POST['endingDate'];
    $sqlQuery = "UPDATE ongoing_internship SET name_of_intern = '$intern_name', Age = '$intern_age', college = '$intern_college',endingDate='$date_of_ending_internship' where id = '$id_gotten'";

    $executeQuery = mysqli_query($connectDb, $sqlQuery);
    header("location: index.php"); 
}

?>
 