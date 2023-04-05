<?php
session_start();
$menu = "";
$login = "";
require_once 'pages/conn.php';

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

    <div class="index-body">
        <div class="black-box">
            <div class="Logo">
                <img src="IMG/arch.webp" alt="error.404" class="logoIMG">
            </div>  
            <?php
                echo "<p> <font color=red>Pomi </font>Grill & Sushi </p>";
            ?>
            <p class="loremip">ロレム・イプサム あなたのお母さんはフェルメイディング通りで出産しました</p>
        </div>
        <img src="IMG/sushi-background1.jpg" alt="error.404" class="sushiB">
    </div>

    <div class="extended-body">
        <div class="red-overlay"></div>
        <img src="IMG/background2.png" alt="error.404" class="bimg">
        <p class="loremip2">ニワトリは図書館を壊して火を放ち、後にニワトリは放火で逮捕される ニワトリは図書館を壊して</p>
        <div class="order">
            <p>Bestel nu</p>
        </div>
    </div>

    <div class="extended-body" id="white-body">
        <div class="textholdster">
            <p class="titel">こんにちは!!</p>
            <p class="loremtxt">  あなたのお母さんはフェルメイディング通りで出産しました
                こんにちは、あなたはとても不機嫌でか
                こんにちは、私たちの間で楽しみます
            </p>
        </div>
        <div class="IMGholdster">
            <img src="IMG/balls.png" alt="error404" class="balls"> 
            <div class="logoholder">
                <img src="IMG/arch.webp" alt="error 404" class="balls"> 
            </div>
        </div>
    </div>

    <div class="extended-body" id="bottem-body">
        <div class="holdster">
            <img class="balls" src="IMG/noodle.png" alt="error404">
        </div>
        <div class="holdster2">
            <p>何を考えていたのかわか らない子供を置き去りにして今、私は呪いに苦しみ、今、Hamburberこの怒りと罪悪感と悲しみと 永遠に私を悩ませに来る川の果ての崖が待ちきれないこれは私が求めている復讐ですか？それとも私に復讐する人を探していますか？</p>
        </div>
    </div>



</body>
</html>