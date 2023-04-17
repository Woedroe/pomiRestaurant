<?php
session_start();
$menu = "";
$login = "";
$edit = "";
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
    <link rel="stylesheet" href="css/input.css">
    <title>Pomi Grill & Sushi</title>
    <link rel="stylesheet" href="css/stopscroll.css">
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

    <div class="backgroundbox">

        <div class="side">
            <div class="stbg"></div>   
            <img src="img/chickenT.png" alt="error404" class="chicken">
        </div>

        <div class="middel">

            <form naam="login" action="temp-LoginScreen.php" method="POST">

                <input type="username" name='username' placeholder="username">

                <input type="password" name='password' placeholder="password">

                <input id="login-register" type="submit" name='submit' value="login">

            </form>

            <div class="bal">
                <div class="error">
                    <p>error</p>
                    <p>wrong inputs try again</p>
                    <div class="close">
                        <a href="log-in.php">x</a>
                    </div>
                </div>
             </div>

            <form naam="login" action="temp-RegisterScreen.php" method="POST">


                <input type="username" name='username' placeholder="username">

                <input type="password" name='password' placeholder="password">

                <input id="login-register" type="submit" name='submit' value="Register">


            </form>

        </div>

        <div class="side">
            <div class="stbg"></div>
            <img src="img/beefT.png" alt="error404" class="chicken">
        </div>

    </div>

</body>
</html>