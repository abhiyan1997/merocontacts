<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Update | MeroContacts</title>
    <style>
        body
        {
            background-color: beige;
        }

        .head
        {
            background-color: skyblue;
            width: 97%;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .main
        {
            background-color: skyblue;
            border: 1px solid black;
            width: 25%;
            padding: 20px;
            /* position: absolute;
            left: 50%;
            transform: translate(-50%,0%); */
        }

        .main input
        {
            width: 150px;
            height: 25px;
            outline:none;
        }

        .main button
        {
            width: 100px;
            height: 40px;
            cursor: pointer;

        }

    </style>
</head>
<body>

    <?php
    $name= $_POST['name'];
    $phno= $_POST['phno'];
    $email= $_POST['email'];
    $sn= $_POST['sn']
    ?>

    <div class="head">
    <a href="index.php" style="text-decoration: none;"><h1 style="color: black;">MeroContacts</h1></a>
    </div>

    <div class="main">
    <form action="updatedbdata.php" method="post">
    <label>Name of Contact:</label>
    <input type="text" name="name" value="<?php global $name; echo $name ?>" required>
    <br><br>
    <label>Phone Number: </label>
    <input type="number" name="phno" value="<?php global $phno; echo $phno;?>" required ><br><br>
    <label>Email: </label>
    <input type="email" name="email" value="<?php global $email; echo $email;?>" required><br><br>
    <input type="text" name="sn" hidden value="<?php global $sn; echo $sn;?>" required>
    <button type="submit">Update</button>
    </div>
    <br>
    </form>


</body>
</html>