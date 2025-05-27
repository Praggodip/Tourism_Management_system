<?php
session_start();
require_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Simple server-side validation
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill both fields.";
        header("Location: ../view/login.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: ../view/login.php");
        exit();
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT id, password, name FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password, $name);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Login success
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;

            // Set a cookie for 1 day
            setcookie("user_email", $email, time() + 86400, "/");

            header("Location: ../view/thankyou.php");
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password.";
            header("Location: ../view/login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Email not registered.";
        header("Location: ../view/login.php");
        exit();
    }
} else {
    header("Location: ../view/login.php");
    exit();
}
?>
