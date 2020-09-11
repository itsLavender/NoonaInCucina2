<?php

	try{
        $pdo = new PDO("mysql:host=localhost;dbname=nonnaincucina", "root", "");
    }catch(PDOException $pdo){
        die("DB FAIL");
    }

?>
