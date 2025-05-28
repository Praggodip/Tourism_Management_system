<?php
session_start();
require_once '../db.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
 
    
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
 
    
    $stmt = $conn->prepare("SELECT id, password, name FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
 
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password, $name);
        $stmt->fetch();
 
        
        if (password_verify($password, $hashed_password)) {
            
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;
 
            
            setcookie("user_email", $email, time() + 86400, "/");
 
            header("Location: ../view/success.php");
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
 
 