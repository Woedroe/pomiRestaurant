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

        $username = $_POST['username'];
        
        $password = $_POST['password'];

        $roll = (int)$_POST['roll'];

        $stmt = $conn->prepare("SELECT username, password, roll FROM users WHERE username=:username AND password=:password");

        $stmt->execute(['username' => $username, 'password' => $password]); 
        $row = $stmt->fetch();


        if ($row['username'] == $username AND $row['password'] == $password) {
            session_start();

            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['roll'] = $row['roll'];

            header("Location: loged-in.php");   
        } else {
            echo "<p>incorrect username or password</p>";
            header("Location: error-log-In.php");
        }

    ?>

</body>
</html>