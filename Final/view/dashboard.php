<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
 <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
<p>This is your dashboard.</p>

<ul>
    <li><a href="thankyou.php">Thank You Page</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
