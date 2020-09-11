<?php 
    session_start();

    if( isset($_SESSION['user_id']) ){
        header("Location: ../index.php");
    }
    require '../includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO users(name, email, password) VALUES(:name, :email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);

        if($query->execute()) {
            $message =  "Successfully created your account";
        } else {
            $message =  "A problem occurred creating your account";
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="../css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Sign Up</title>
    </head>
    <body>
        <div class="container">
            <h1 class="label">Register</h1>
            <form class="login_form" method="POST" action = "signup.php">
                <div class="font">Username</div>
                <input type="text" name="name">
                <div id = "email_error">Please fill up your Username</div>
                <div class="font">Email or Phone</div>
                <input type="email" name="email">
                <div id = "email_error">Please fill up your Email or Phone</div>
                <div class="font font2">Password</div>
                <input type="password" name="password">
                <div id = "password_error">Please fill up your Password</div>
                <input type="submit" name = "submit" value = "Send">
                <p>Already have an account? <a href="login.php">Log in</a></p>
            </form>
        </div>
    </body>
</html>