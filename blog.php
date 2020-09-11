<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-US-Compatible" content="ie=edge">
     <title>Nonna in Cucina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">"
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet"  href="css/style.css">
</head>
<body>
    <!---- Header include -->
    <?php include 'includes/header.php'; ?>
    <section class="blog-hero" id="blog-hero">
       <div class="container">
           <h2 class="sub-headline">
               <span class="first-letter">T</span>he
           </h2>
           <h1 class="headline">Blog</h1>
           <div class="headline-description">
               <div class="seperator">
                   <div class="line line-left"></div>
                       <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                       <div class="line line-right"></div>
               </div>
                   <div class="single-animation">
                       <h5>Add a new recipe</h5>
                       <a href="addrecipes.php" class="btn cta-btn">Add</a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!--blog hero ends-->
<section class="categories">
   <div class="global-headline">
        <h2 class="sub-headline">
           <h1 class="recipe-headline headline-dark">Some of our food categories</h1>
        </h2>
       </div>
  <div class="blog-container">
    <div class="box">
        <div class="imgBox">
        <img src="images/pasta.jpg">
        </div>
        <div class="detalis">
            <div class="content">
                <h2> Food </h2>
            </div>
        </div>
    </div>
    <div class="box">
    <div class="imgBox">
        <img src="images/sweets.jpg">
        </div>
        <div class="detalis">
            <div class="content">
                <h2> Desserts </h2>
            </div>
        </div>
    </div>
    <div class="box">
    <div class="imgBox">
        <img src="images/drink.jpg">
        </div>
        <div class="detalis">
            <div class="content">
                <h2> Drinks </h2>
            </div>
        </div>
    </div>
</div>
</section>
<!--food categories ends-->
<!-- Footer include -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
