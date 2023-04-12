<?php
session_start();
$menu = "";
$login = "";
require_once 'pages/conn.php';

if(isset($_SESSION['username']) && isset($_SESSION['roll'])){
    if($_SESSION['roll'] <= 5) {
        $menu = "<a href='menuAdmin.php'>MenuA</a>";
        $login = "<a href='log-out.php'><font color=red>Logout</font></a>";
        if($_SESSION['roll'] ==1){
            $edit = "<a href='temp-accountEdit.php'>editACC</a>";
        }
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
    <link rel="stylesheet" href="css/contact.css">
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
        <div class="boxxy">
        <?php echo $edit;?>
        </div>
        <div class="boxxy" id="log-in">
            <?php echo $login; ?>
        </div>
    </header>

    <main>

    <div class="wave-container">
        <div class="wave"></div>
    </div>

        <h1>Contact Us</h1>
        <p>Fill out the form below to get in touch with us.</p>

        <form action="#" method="post">
            <label for="name">name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <footer>
        <p>©Pomi Grill & Sushi 2023. All rights reserved.</p>
    </footer>
    
</body>
</html>