<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pomi Grill & Sushi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php

    require_once 'pages/conn.php';  

    $name = $_POST['name'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $price = (float) $_POST['price'];
    $id = (int)$_POST['id'];
    
?>
    
</body>
</html>