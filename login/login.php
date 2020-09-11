<?php 
    session_start();

    if( isset($_SESSION['user_id']) ){
        header("Location: ../index.php");
    }
    require '../includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $pdo->prepare('SELECT id, name, email, password, role  FROM users WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['permission'] = $user['role'];
    
        } else {
            $message = 'Sorry, those credentials do not match';
        }
    }
?>


<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Log In</title>
    </head>
    <body>
        <div class="container">
            <h1 class="label">User Login</h1>
            <form class="login_form" method="POST" action = "login.php">
                <div class="font">Email or Phone</div>
                <input type="email" name="email">
                <div id = "email_error">Please fill up your Email or Phone</div>
                <div class="font font2">Password</div>
                <input type="password" name="password">
                <div id = "password_error">Please fill up your Password</div>
                <input type="submit" name = "submit" value = "Login">
                <p class="message">Don't have an account? <a href="signup.php">Register</a></p>
            </form>
        </div>
    </body>
</html>