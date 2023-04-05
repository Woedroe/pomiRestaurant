
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pomi Grill & Sushi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    require_once 'pages/conn.php';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM menu WHERE id = :id";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $name = $row['name'];
        $description = $row['description'];
        $img = $row['img'];
        $price = $row['price'];
    }

    var_dump(isset($_POST['update']));
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $img = $_POST['img'];
        $price = (float) $_POST['price'];

        $data = [
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'img' => $img,
            'price' => $price,
        ];

        $sql = "UPDATE menu SET name = :name, description = :description, img = :img, price = :price WHERE id = :id";
        try {
            $stmt = $conn->prepare($sql);   
            $success = $stmt->execute($data);
            if (!$success) {
                throw new Exception('Error executing SQL query');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        header("Location: menuAdmin.php");
        exit();
    }
?>
<div class="update-form">
    <h2>Update Menu Item</h2>
    <form method="POST">

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>

    Description: <input type="text" name="description" value="<?php echo $description; ?>"><br>

    Image URL: <input type="text" name="img" value="<?php echo $img; ?>"><br>

    Price: <input type="text" name="price" value="<?php echo $price; ?>"><br>

    <input type="submit" name="update" value="Update">

    </form>
</div>

</body>
</html>
    