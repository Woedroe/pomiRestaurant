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

    if (isset($_POST['submit'])) {
        $id = (int)$_POST['id'];

        $stmt = $conn->prepare("DELETE FROM menu WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        header("Location: menuAdmin.php");
        exit();
    }


?>
    
</body>
</html>