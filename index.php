<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MeroContacts</title>
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

        .logout_btn
        {
            width: 100px;
            height: 40px;
            cursor: pointer;
            float:right;
            position:absolute;
            right:0;
            transform: translate(-100%,-140%)
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

        table
        {
            background-color: skyblue;
        }

        th,td{
            padding: 15px;
        }

    </style>
</head>

<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('Location:login.php');
}
?>

<body>
    <div class="head">
    <h1>MeroContacts</h1>
    <form action="logout.php">
    <button type="submit" class="logout_btn">Logout</button>
    </form>
    </div>

    <h3> <?php echo "Welcome ". $_SESSION['username']; ?></h3>

    <div class="main">
    <form action="adddata.php" method="post">
    <label>Name of Contact:</label>
    <input type="text" name="name" required>
    <br><br>
    <label>Phone Number: </label>
    <input type="number" name="phno" required><br><br>
    <label>Email: </label>
    <input type="email" name="email" required><br><br>
    <button type="submit">Save</button>
    </div>
    <br>
    </form>

    <span>Total contacts- 
    <?php 
    include 'db.php';
    $total_sql= "SELECT COUNT(*) as total FROM contacts" ;
    $total_result= mysqli_query($conn, $total_sql);

    if($total_result)
    {
        $total_row= mysqli_fetch_array($total_result);
        echo $total_row['total'];
    }
    ?>  
    </span>
    <br><br>

    <table border= 1>
        <th>Name</th>
        <th>Phone no.</th>
        <th>Email</th>
        <th>Action</th>

    <?php
    include 'db.php';
    $sql= "SELECT * FROM contacts";
    $result= mysqli_query($conn, $sql);

    if($result)
    {
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_array(($result))){
                echo "<tr>";
                echo "<td>". $row['name'] . "</td>";
                echo "<td>". $row['phno'] . "</td>";
                echo "<td>". $row['email'] . "</td>";
                echo '<td> <form action= "deletedata.php" method="post">
                <input type="name" name="name" hidden value="'.htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8').'">
                <button><i class="fa fa-trash-o" style="font-size:18px;color:red"></i></button>
                </form>


                <form action= "updatedata.php" method="post">
                <input type="text" name="name" hidden value="'.htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8').'">
                <input type="number" name="phno" hidden value="'.htmlspecialchars($row['phno'], ENT_QUOTES, 'UTF-8').'">
                <input type="email" name="email" hidden  value="'.htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8').'">
                <input type="text" name="sn" hidden  value="'.htmlspecialchars($row['SN'], ENT_QUOTES, 'UTF-8').'">

                <button><i class="fa fa-edit" style="font-size:18px;"></i></button>
                </form>
                
                </td>';
            }
        }

        else
        {
            echo "<tr>";
            echo "<td> YOU HAVE NO CONTACTS </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>


 </span>
</body>
</html>