<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","root","Monsterhigh1%","sample_db");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql="SELECT * FROM login Where username='$username' AND password='$password'";
 
    $result=mysqli_query($con,$sql);
    $resultcheck=mysqli_num_rows($result); 
    if($resultcheck>0){
        $_SESSION['username'] = $username;
        header('Location: ../../index.php');
        exit();
    }
    else{
        echo"username or password incorrect";
    }
    mysqli_close($con);
} 

?>

<html>
<head>
<title> Login form </title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
  rel="stylesheet"
/>
<style>
    *{
        font-family: 'Ubuntu', Arial, Helvetica, sans-serif;

    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container{
        border: 2px solid rgb(255, 162, 0);
        border-radius: 40px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow:4px 15px 15px 1px #c6c6c6;
    }

    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .logo-container img{
        height: 30vh;
    }

    h2{
        padding:20px;
    }

    input{
        margin-right:30px;
        border-radius: 6px;
        border: 1px solid rgb(151, 150, 150); 
        padding-left: 7px;
    }

    #input2{
        margin-left:5px;
    }

    button{
        margin-top: 10px;
        padding: 10px 30px;
        border-radius: 10px;
        background-color: rgb(255, 162, 0);
        font-size: 16px;
        border: none;
        color: white;
    }

    a{
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
        font-size: 13px;
    }


</style>
<body>
<form method="POST" action="logincheck.php">
<div class="container">
    <div class="logo-container">
        <img src="../../../public/logo.png" alt="logo" />
    </div>
    <div class="text-container">
        <center><h2>Login Form </h2></center>
        <label style="font-size:20px;">Username</label>
        <input type="text" name="username" id="input1" style="width:200px;height:30px;">
        <br><br>
        <label style="font-size:20px;">Password</label>
        <input type="password" name="password" id="input2" style="width:200px;height:30px;">
        <br><br>
        <a href="../../index.php">Return to home</a>
        <center><button type="submit">Submit</button></center>
    </div>
</div>
</form>
</body>
</html>