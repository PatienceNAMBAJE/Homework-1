<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chuk_internship";

$connect = mysqli_connect($servername,$username,$password,$dbname);
$query= "SELECT * FROM ongoing_internship";
$execute= mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to chuk internship</title>
</head>
<body>
    <h1>LIST OF INTERNS </h1>
    <a href="insert.php">add a new intern</a>
    <table border= "1">
        <tr>
            <th>#</th>
            <th>name of intern</th>
            <th>age</th>
            <th>colllege</th>
            <th>end of internship</th>
            <th>Edit</th>
            <TH>DELETE</TH>
        </tr>
    
    <?php while($row=mysqli_fetch_array($execute)) { ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['age']?></td>
            <td><?php echo $row['college']?></td>
            <td><?php echo $row['ending_date']?></td>
            <td><a href="edit.php?internId=<?php echo $row['id']; ?>">edit</a></td>  
            <td><a href="delete.php?bookId=<?php echo $row['id']; ?>">delete</a></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>