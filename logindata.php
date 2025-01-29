<?php
include 'userdb.php';
session_start();

$user= $_POST['email'];
$pw= $_POST['pass'];

$sql= "SELECT `username`, `pass` FROM `user` WHERE `username` = '$user' AND `pass` = '$pw'";
$result= mysqli_query($conn, $sql);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        while($row= (mysqli_fetch_array($result)))
        {
            $_SESSION['username']= $row['username'];
            header('Location:index.php');
        }
    }

    else
    {
     echo
     '
     <h1> Enter Correct Credentials </h1>
     ';
    }
}



?>