<?php
include 'db.php';

$name= $_POST['name'];
$phno= $_POST['phno'];
$email= $_POST['email'];
$sn= $_POST['sn'];


$sql= "UPDATE contacts SET name= '$name' ,phno='$phno',email= '$email' WHERE SN= '$sn' ";

$result= mysqli_query($conn, $sql);

if($result)
{
    header("Location: index.php");
}
?>