<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Add new recipe</title>
    </head>
    <body>
<!--<section class="addrecipe-form">
    <div class="addrecipe-container">
        <div class="recipe-box">
                <h2>Add new recipe </h2>
                <input type="text" name="Title"><br>
                <textarea name="body" rows="4" cols="50">Recipe ingredients</textarea><br>
                <input type="text" name="image"><br>
                <input type="text" name="category"><br>
                <input type="submit" name="submit" value="Add recipe">
            </div>
        </div>
</section>-->
<!--<section class="form">
    <div class="container">
        <div class="recipe-box">
            <div class="add-left"></div>
            <div class="add-right">
                <h2>Add new recipe</h2>
                <input type="text" class="field" placeholder="title">
                <textarea class="body" rows="4" cols="50" placeholder="Recipe ingredients"></textarea>
                <input type="text" class="field" placeholder="image">
                <input type="text" class="field" placeholder="category">
                <input type="submit" name="submit" value="Add recipe">
            </div>
        </div>
    </div>
</section>-->

   
<div class="container">
            <h1 class="label">Add new recipe</h1>
            <form class="addrecipes_form" method="POST" action = "addrecipes.php">
                <div class="font">Title</div>
                <input type="text" name="title">
                <div class="font font2">Category</div>
                <input type="text" name="category">
                <div class="font">Image</div>
                <input type="text" name="image">
                <textarea class="body" rows="4" cols="50" placeholder="Recipe ingredients"></textarea>
                <input type="submit" name = "submit" value = "Add recipe">
            </form>
        </div>
        </body>
</html>