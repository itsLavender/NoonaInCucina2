<?php 
    session_start();
?>


<header>
    <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="index.php" class="logo"><img src="images/NoonaInCucinaLogo.png" alt=""> </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="recipes.php" class="nav-link">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact</a>
                    </li>
                    <?php if(isset($_SESSION['name'])): ?>
                    <li class="nav-item">
                        <a href="../NoonaInCucina2/login/logout.php" class="nav-link">Logout</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="../NoonaInCucina2/login/login.php" class="nav-link">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a href="../NoonaInCucina2/login/signup.php" class="nav-link">Sign up</a>
                    </li>
                    <?php endif; ?>
                    <?php 
                    /*echo $_SESSION['permission'];*/
                    ?>
                </ul>
            </nav>
        </div>
    </header>