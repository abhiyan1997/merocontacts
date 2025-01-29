<?php
include 'userdb.php';
$usern= $_POST['email'];
$pass= $_POST['pass'];

$sql= "INSERT INTO `user` (`username`, `pass`) VALUES ('$usern', '$pass')";
$result= mysqli_query($conn, $sql);

if($result)
{
    header('Location: login.php');
}

?>