<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/style.css">

    
</head>
<body>
<?php
session_start();
if (isset($_SESSION['success'])) {
    echo '<p style="color:green;">' . $_SESSION['success'] . '</p>';
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}
?>


    <div class="login-container">
        <h2>Admin Login</h2>
        <form name="loginForm" action="../controller/loginController.php" method="POST" onsubmit="return validateForm()">
            <input type="email" name="email" placeholder="Enter Email" />
            <input type="password" name="password" placeholder="Enter Password" />
            <input type="submit" value="Login" />
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
