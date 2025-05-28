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
    <title>Successful</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
 
<h2>Successful, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>

 

 
</body>
</html>
 
 