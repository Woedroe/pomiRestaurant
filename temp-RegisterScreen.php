<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pomi Grill & Sushi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        require_once 'pages/conn.php';  
            
            $username = $_POST['username'];
            echo $username;

            $password = $_POST['password'];
            echo $password;

            $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

            $conn->exec($sql);
            echo "new record created";
    ?>
    
</body>
</html>