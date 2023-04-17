<?php
session_start();

require_once 'pages/conn.php';

if ($_SESSION['roll'] != 1) {
    echo "You don't have the required role to edit other accounts.";
    header('Location: index.php');
}

$stmt = $conn->query("SELECT id, username, roll FROM users");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editmenu.css">
    <title>Accounts - Admin Panel</title>
</head>
<body>
    <div class="container">
        <h1>Accounts</h1>
        <div class="grid">
            <?php foreach ($stmt as $row) { ?>
                <div class="grid-item">
                    <div class="account-info">
                        <h2><?php echo $row['username']; ?></h2>
                        <p>roll: <?php echo $row['roll']; ?></p>
                    </div>
                    <div class="account-buttons">
                        <form class="edit-form" action="temp-edit-account.php">
                            <?php if (isset($row['id'])) {
                                echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; 
                            } ?>
                            <input type="submit" name="submit" value="change">
                        </form>
                        <form class="edit-form2" action="temp-accountDEL.php" method="POST">
                            <?php if (isset($row['id'])) {
                                echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; 
                            } ?>
                            <input type="submit" name="submit" value="Delete">
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a href="index.php" class="button">Back to Dashboard</a>
    </div>
</body>
</html>
