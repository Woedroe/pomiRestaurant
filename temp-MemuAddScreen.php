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

    var_dump(isset($_POST['name']));
    var_dump(isset($_POST['description']));
    var_dump(isset($_FILES['img']));
    var_dump(isset($_POST['price']));
    if (isset($_POST['name']) && isset($_POST['description']) && isset($_FILES['img']) && isset($_POST['price'])) {

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = (float) $_POST['price'];
    
        $img_name = $_FILES['uploadfile']['name'];
        $img_temp = $_FILES['uploadfile']['tmp_name'];
        $img_path = 'img/' . $img_name;
        move_uploaded_file($img_temp, $img_path);
    
        $data = [
            'name' => $name,
            'description' => $description,
            'img' => $img_path,
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