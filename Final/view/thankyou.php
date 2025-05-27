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
    <meta charset="UTF-8" />
    <title>Thank You</title>
    <link rel="stylesheet" href="../assets/style.css" />
</head>
<body>

<h2>Thank You, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
<p>You have successfully logged in.</p>

<p><a href="dashboard.php">Go to Dashboard</a> | <a href="logout.php">Logout</a></p>

</body>
</html>
