<?php
session_start();

require_once 'pages/conn.php';

if ($_SESSION['roll'] != 1) {
  echo "You don't have the required role to edit other accounts.";
  exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();

if (!$user) {
  echo "Invalid user ID.";
  exit();
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $roll = $_POST['roll'];

  $query = "UPDATE users SET username=:username, password=:password, roll=:roll WHERE id=:id";
  $stmt = $conn->prepare($query);
  $stmt->execute(['username' => $username, 'password' => $password, 'roll' => $roll, 'id' => $id]);

  header('Location: temp-accountEdit.php');
  exit();
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account - Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Edit Account</h1>
        <form method="POST" class="form">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="<?php echo isset($user['password']) ? $user['password'] : ''; ?>">
        </div>
        <div class="form-group">
            <label for="roll">Roll:</label>
            <input type="text" name="roll" id="roll" value="<?php echo isset($user['roll']) ? $user['roll'] : ''; ?>">
        </div>
        <button type="submit" name="submit" class="button">Save</button>
        </form>
        <a href="accounts.php" class="button">Back to HomePage</a>
    </div>
</body>
</html>
