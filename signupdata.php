<?php
include 'userdb.php';
$name= $_POST['name'];
$usern= $_POST['email'];
$pass= $_POST['pass'];

$sql= "INSERT INTO `user` (`name`, `username`, `pass`) VALUES ('$name', '$usern', '$pass')";
$result= mysqli_query($conn, $sql);

if($result)
{
    header('Location: login.php');
}

?>