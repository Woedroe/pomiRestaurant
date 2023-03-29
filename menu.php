<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/stopscroll.css">
    <title>Pomi Grill & Sushi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
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

                require_once 'pages/conn.php';

                $stmt = $conn->query("SELECT * FROM menu");

                foreach ($stmt as $row) {
                    echo '<div class="menu-item">';
                    echo '<img src="' . $row['img'] . '">';
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<span>' . $row['price'] . '</span>';
                    echo '</div>';
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