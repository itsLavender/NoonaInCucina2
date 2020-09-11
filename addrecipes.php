<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/login-style.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <title>Add new recipe</title>
    </head>
    <body>
   
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