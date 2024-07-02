<?php
session_start();
require __DIR__.'/utilities/functions.php';

if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Benvenuto, <?php echo ($_SESSION['username']); ?>!</h1>
</body>
</html>
