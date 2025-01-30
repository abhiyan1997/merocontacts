<?php
session_start();
$name= $_POST['name'];
$phno= $_POST['phno'];
$email= $_POST['email'];

$user_id= $_SESSION['user_id'];

include 'db.php';
$sql= "INSERT INTO contacts(name, phno, email, user_id) VALUES('$name', '$phno', '$email', '$user_id')";
$result= mysqli_query($conn, $sql);

if($result)
{
    header('Location: index.php');
}

else
{
    echo "Not connecting to server";
}

?>