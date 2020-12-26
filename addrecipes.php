<?php 
    session_start();

    if($_SESSION['permission'] == 1){
        
    require 'includes/dbconnect.php';
?>
<?php 
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $body = $_POST['body'];
        $image = $_POST['image'];
        $kategoria = $_POST['kategoria']; 

        $sql = 'INSERT INTO posts(posts_title, posts_body, image, category_id) VALUES (:title, :body, :image, :kategoria)';
        $query = $pdo->prepare($sql);
        $query->bindParam('title', $title);
        $query->bindParam('body', $body);
        $query->bindParam('image', $image);
        $query->bindParam('kategoria', $kategoria);

        $query->execute();
    }
?>

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
                <div class="font">Recipe Name</div>
                <input type="text" name="title"><br>
                <div class="font">Ingredients:</div>
                <textarea name="body" rows="4" cols="50" placeholder="Recipe ingredients"></textarea><br>
                <div class="font">Image</div>
                <input type="text" name="image"><br>
                <div class="font ">Category</div>
                <input type="text" name="kategoria">  <br>             
                <input type="submit" name = "submit" value = "Add recipe">
                <a href="../NoonaInCucina2/blog.php" class="btn back-to-blog">Back to blog</a>
            </form>
        </div>

<?php }else{
    header("Location: index.php");
    }?>
    </body>
</html>