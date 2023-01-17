<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="cloud.png" type="image/png" sizes="20x20">

    <link rel="stylesheet" href="style_login.css">
    <title>Login | OE cloud </title>
</head>
<body>
    <?php session_start(); ?>
    <div class="logo"> <p> O <span class='e'>E</span>  <span class='cloud'> Cloud </span> </p> </div>
    <form method="POST">
        <div class="txt"><p> Username : </p></div>
        <input type="text" name="username" >
        <div class="txt"><p> Password : </p></div>
        <input type="password" name="password" >

        <div class="btn"> 
            <button type="submit" name="login"> Login </button>
        </div>
    </form>

    <?php
    if(isset($_POST['login'])){
    $username = "osama";
    $password = "osama2244@oe.cloud";
   
    if($_POST['username'] == $username){
        if($_POST['password'] == $password){
            $_SESSION['login'] = '1';
            $_SESSION['sec_code'] = '2244';
            $_SESSION['define'] = "osama@2244";
            $_SESSION['up']  = '0';
            header("Location:upload.php");
        }else{
        echo '<div class="erorr">  <p> Username or Password is wrong </p> </div>';

        }
    }else{
        echo '<div class="erorr">  <p> Username or Password is wrong </p> </div>';
    }

    }
    ?>
</body>
</html>