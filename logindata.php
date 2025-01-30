<?php
include 'userdb.php';
session_start();
$user= $_POST['email'];
$pw= $_POST['pass'];

$sql= "SELECT `username`, `pass` , `name` , `id` FROM `user` WHERE `username` = '$user' AND `pass` = '$pw' ";
$result= mysqli_query($conn, $sql);

if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        while($row= (mysqli_fetch_array($result)))
        {
            $_SESSION['username']= $row['username'];
            $_SESSION['name']= $row['name'];
            $_SESSION['user_id']= $row['id'];

            header('Location:index.php');
        }
    }

    else
    {
     echo
     ' 
     <center><h1><a href="login.php"> MeroContacts</a> </h1></center>
     <center><h2> Enter Correct Credentials </h2></center>
     
     ';
    }
}



?>