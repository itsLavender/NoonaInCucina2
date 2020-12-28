<?php   
    require 'includes/dbconnect.php';
?>

<?php
if(isset($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

    $toEmail = "gjylimekaj1@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}

    $sql = 'INSERT INTO tblcontact(user_name, user_email, subject, content) VALUES (:name, :email, :subject, :content)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('subject', $subject);
        $query->bindParam('content', $kategoria);
        $query->execute();
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel = "stylesheet" href="css/style.css">
</head>
<body>
     <!---- Header include -->

     <?php include 'includes/header.php'; ?>
     <section class="contact-hero" id="contact-hero">
    <div class="container">
        <h1 class="headline">Connect with us</h1>
    </div>
</section>
<!--contact hero ends-->
<section class="contact-form">
    <div class="contact-container">
    <form class="contact-form" method="POST" action = "contactus.php">
        <div class="contact-box">
            <div class="contact-left"></div>
            <div class="contact-right">
                <h2>Contact Us</h2>
                <input type="text" name = "name" class="field" placeholder="Your Name">
                <input type="email" name = "email" class="field" placeholder="Your Email">
                <input type="text" class="field" name = "subject" placeholder="Subject">
                <textarea class="field area" name = "content" placeholder="Message"></textarea>
                <button class="contact-btn" name = "send">Send</button>
                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </div>
        </form>
    </div>
</section>
    <!-- Footer include -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>