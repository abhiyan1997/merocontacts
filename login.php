<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login | MeroContacts</title>
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
    <div class="head">
    <a href="index.php" style="text-decoration: none;"><h1 style="color: black;">MeroContacts</h1></a>
    </div>
    <br><br><br>
    <center>
    <div class="main">
    <form action="logindata.php" method="post">
    <label>Email: </label>
    <input type="email" name="email" required><br><br>
    <label>Password: </label>
    <input type="password" name="pass" required><br><br>
    <button type="submit">Login</button><br><br>
    <span>Want to register? <a href="signup.php">Signup</a></span>
    </div>
    <br>
    </form>
    </center>


 </span>
</body>
</html>