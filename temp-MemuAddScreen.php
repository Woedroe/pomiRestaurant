<?php
require_once 'pages/conn.php';

//var_dump(isset($_POST['name']));
//var_dump(isset($_POST['description']));
//var_dump(isset($_FILES['img']));
//var_dump(isset($_POST['price']));
if (isset($_POST['name']) && isset($_POST['description']) && isset($_FILES['img']) && isset($_POST['price'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = (float) $_POST['price'];


    //var_dump(isset($_FILES["img"]));
    //var_dump($_FILES["img"]["error"]);
    if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){

        $target_dir = "img/";
        $file_name = basename($_FILES["img"]["name"]);  
        $target_file = $target_dir . $file_name;
        $img_path = $file_name;

        //if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
       //     echo "The file ". $file_name. " has been uploaded.";
       // }else{
       //      echo "Sorry, there was an error uploading your file.";
       //  }
    }else{
        echo "Error: No file uploaded.";
    }

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
