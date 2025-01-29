<?php
$servername= "localhost";
$username= "root";
$pw= "";
$dbname= "merocontact";

$conn= mysqli_connect($servername, $username, $pw, $dbname);

if(!$conn)
{
    print("NOT CONNECTED TO SERVER. TRY AGAIN!!!!");
}

?>