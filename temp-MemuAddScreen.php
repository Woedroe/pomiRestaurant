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

    if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['img']) && isset($_POST['price'])) {

        $name = $_POST['name'];
        $description = $_POST['description'];
        $img = $_POST['img'];
        $price = (float) $_POST['price'];

        $data = [
            'name' => $name,
            'description' => $description,
            'img' => $img,
            'price' => $price,
        ];

        $sql = "INSERT INTO menu (name, description, img, price) 
        VALUES (:name, :description, :img, :price)";
        try{
            $stmt= $conn->prepare($sql);
            $stmt->execute($data);
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        header("Location: menuAdmin.php");
        exit();
    }
?>
    
</body>
</html>`