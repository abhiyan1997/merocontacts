<?php
$name= $_POST['name'];
$phno= $_POST['phno'];
$email= $_POST['email'];
include 'db.php';
$sql= "INSERT INTO contacts(name, phno, email) VALUES('$name', '$phno', '$email')";
$result= mysqli_query($conn, $sql);

if($result)
{
    header('Location: index.php');
}

?>