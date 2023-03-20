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

    <div class="backgroundblack"></div>
        <div class="menulogo">
            <img class="arch" src="IMG/arch.webp" alt="error 404">
        </div>

        <div class="scrollmenu">

            <?php

                for ($i=0; $i <= 11; $i++) { 
                    echo "<div class='sus'>
                            <div class='IMG-holder'>
                                <img class='image' src='IMG/sushi-background1.jpg' alt='error 404'>
                            </div>

                            <div class='txt-holder'>
                                <div class='txt-mover'>
                                    <h1>Sushi</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum consequat dictum. Vivamus pharetra lacus congue. </p>
                                    <p>€46,99</p>
                                    <div class='add'>
                                        <p class='plus'>+</p>
                                    </div>
                                </div>
                            </div>  

                        </div>";
                }

            ?>
        </div>

        <div class="Holdster">
            <div></div>
            <div class="redoverlay">
            
            <?php

                for ($i=0; $i <= 6; $i++) { 

                }

            ?>


            </div>
        </div>

    </div>

    
</body>
</html>