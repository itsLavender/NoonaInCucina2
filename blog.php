<?php 
        require 'includes/dbconnect.php';

        $query = $pdo->query('SELECT * from posts inner join recipe_category on recipe_category.category_id = posts.category_id');
        $recipesdata = $query->fetchAll();
   ?>

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
   <div class="bl">
        <?php foreach($recipesdata as $recipes): ?>
                <h2><?php echo $recipes['posts_title']; ?></h2>
                <p><?php echo $recipes['posts_body']; ?></p>
                <img src="<?php echo $recipes['image']; ?>"/>
                <h4><?php echo $recipes['category_name']; ?></h4>
    </div>
        <?php endforeach; ?>
   <!--blog hero ends-->
<<<<<<< HEAD
<!--<div class="blog-container">
=======
<section class="categories">
   <div class="global-headline">
        <h2 class="sub-headline">
           <h1 class="recipe-headline headline-dark">Some of our food categories</h1>
        </h2>
       </div>
  <div class="blog-container">
>>>>>>> a009e22249994a551cfb4e9ca8bd954f066f78e2
    <div class="box">
        <div class="imgBox">
        <img src="images/pasta.jpg">
        </div>
        <div class="detalis">
            <div class="content">
                <h2> Food </h2>
                <a href="addrecipes.php" class="btn cta-btn">Add</a>
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
                <a href="addrecipes.php" class="btn cta-btn">Add</a>
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
                <a href="addrecipes.php" class="btn cta-btn">Add</a>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>-->
=======
</div>
</section>
>>>>>>> a009e22249994a551cfb4e9ca8bd954f066f78e2
<!--food categories ends-->
<!-- Footer include -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
