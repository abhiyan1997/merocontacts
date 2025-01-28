<?php
include 'db.php';

$name= $_POST['name'];

$sql= "DELETE FROM `contacts` WHERE name= '$name' ";
$result= mysqli_query($conn,$sql);

if($result){
    header('Location: index.php');
}
?>