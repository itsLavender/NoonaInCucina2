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
        <div class="contact-box">
            <div class="contact-left"></div>
            <div class="contact-right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="Your Name">
                <input type="email" class="field" placeholder="Your Email">
                <input type="text" class="field" placeholder="Your Phone">
                <textarea class="field area" placeholder="Message"></textarea>
                <button class="btn">Send</button>
            </div>
        </div>
    </div>
</section>
    <!-- Footer include -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>