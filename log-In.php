<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/stopscroll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>  

    <header>
            <div class="pomi">
                <?php
                echo "<p> <font color=red>Pomi </font>Grill & Sushi </p>";
                ?>
            </div>
            <div class="boxxy">
                 <a href="index.php" class="IndexA">Home</a>
            </div>
            <div class="boxxy">
                 <a href="menu.php">Menu</a>
            </div>
            <div class="boxxy">
                <a href="contacts.php">Contacts</a>
            </div>
            <div class="boxxy" id="log-in">
                <a href="log-In.php"><font color=red>Log in</font></a>  
            </div>
    </header>

    <div class="backgroundbox">

        <div class="side">
            <img src="IMG/chickenT.png" alt="error404" class="chicken">
            <div class="stbg"></div>   
        </div>

        <div class="middel">

        </div>

        <div class="side">
            <div class="stbg">
                <img src="IMG/beefT.png" alt="error404" class="chicken">
            </div>
        </div>

    </div>


        <!--DELIMITER-->
        <!--DELIMITER-->
        <!--DELIMITER-->

    <?php

        require_once "pages/conn.php";
        include "pages/conn.php";

    

    ?>


    
</body>
</html>