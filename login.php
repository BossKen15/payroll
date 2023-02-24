<?php
require 'connection/connection.php';
session_start();

if(isset($_POST["submit"])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["username"] = $row["username"];
            echo"<script>alert('Successfully Login');window.location.href='index.php';
      </script>";
        }else{
            echo "<script> alert('Wrong Password'); </script>";
        }
    }
        else{ 
            echo"<script> alert('No user Found!'); </script>";
        }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/logstyle.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Gem's payroll Login</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Gem's payroll Login Form</span>
            </div>
            <form method="post">
                <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username"  required> 
                </div>
                <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required> 
                </div>
                <div class="pass"><a href="">Forgot password?</a></div>
                <div class="row button"> 
                    <input type="submit" name="submit" value="Login">
                </div>
                <div class="signup-link">Not a member?<a href=""> Sign up now!</a></div>
            </form>
        </div>
    </div>
</body>
</html>