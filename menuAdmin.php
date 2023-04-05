<?php
session_start();
$menu = "";
$login = "";
require_once 'pages/conn.php';

if(isset($_SESSION['username']) && isset($_SESSION['roll'])){
    if($_SESSION['roll'] <= 5) {
        // User has a roll of 5 or lower, allow access to menuAdmin.php
    } else {
        header("Location: index.php");
        exit();
    }
}
if(isset($_SESSION['username']) && isset($_SESSION['roll'])){
    if($_SESSION['roll'] <= 5) {
        $menu = "<a href='menuAdmin.php'>MenuA</a>";
        $login = "<a href='log-out.php'><font color=red>Logout</font></a>";
    } else {
        $menu = "<a href='menu.php'>Menu</a>";
        $login = "<a href='log-out.php'><font color=red>Logout</font></a>";
    }
} else {
    $menu = "<a href='menu.php'>Menu</a>";
    $login = "<a href='log-In.php'><font color=red>Log in</font></a>";
}
?>
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
            <?php echo $menu; ?>
        </div>
        <div class="boxxy">
            <a href="contacts.php">Contacts</a>
        </div>
        <div class="boxxy" id="log-in">
            <?php echo $login; ?>
        </div>
    </header>

    
    <div class="backgroundbox">

    <div class="backgroundblack">
        <div class="addbar">
            <form naam="login" action="temp-MemuAddScreen.php" method="POST">

                <input type="text" name='name' placeholder="Name" required>

                <input type="description" name='description' placeholder="description" required>

                <input type="img" name='img' placeholder="images" required>

                <input type="price" name='price' placeholder="price" required>

                <input type="submit" name='submit' value="confirm">

            </form>
        </div>
    </div>
        <div class="scrollmenu">

            <?php

                require_once 'pages/conn.php';

                $stmt = $conn->query("SELECT * FROM menu");

                foreach ($stmt as $row) {
                    echo '<div class="menu-item">';
                        echo '<form class="xxx" name="Delete" action="temp-menuAdminDEL.php" method="POST">';
                            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                            echo '<input type="submit" name="submit" value="X">';
                        echo '</form>';
                        echo '<form class="+++" name="Eddit" action="temp-menuAdminEDI.php" method="POST">';
                            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                            echo '<input type="submit" name="submit" value="+">';
                        echo '</form>';
                        echo 'ID: ' . $row['id'];
                        echo '<img src="' . $row['img'] . '">';
                        echo '<h1>' . $row['name'] . '</h1>';
                        echo '<p>' . $row['description'] . '</p>';
                        echo '<span>€' . $row['price'] . '</span>';
                    echo '</div>';
                }

            ?>
        </div>

        <div class="Holdster">
            <div></div>
            <div class="redoverlay">
            
            <?php

                

            ?>


            </div>
        </div>

    </div>

    
</body>
</html>