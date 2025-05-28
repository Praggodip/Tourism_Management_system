<?php

session_start();

require_once '../db.php';  
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    $name = trim($_POST['name']);

    $age = trim($_POST['age']);

    $birthdate = $_POST['birthdate'];

    $gender = $_POST['gender'] ?? '';

    $address = trim($_POST['address']);

    $phone = trim($_POST['phone']);

    $email = trim($_POST['email']);

    $password = $_POST['password'];
 
   

    $_SESSION['errors'] = [];

    $_SESSION['old'] = [

        'name' => $name,

        'age' => $age,

        'birthdate' => $birthdate,

        'gender' => $gender,

        'address' => $address,

        'phone' => $phone,

        'email' => $email

    ];
 
    

    if (empty($name)) {

        $_SESSION['errors']['nameError'] = "Name is required.";

    } elseif (strlen($name) < 3) {

        $_SESSION['errors']['nameError'] = "Name must be at least 3 characters.";

    }
 
    if (empty($age)) {

        $_SESSION['errors']['ageError'] = "Age is required.";

    } elseif (!is_numeric($age) || $age < 1 || $age > 100) {

        $_SESSION['errors']['ageError'] = "Please enter a valid age between 1 and 100.";

    }
 
    if (empty($birthdate)) {

        $_SESSION['errors']['birthdateError'] = "Birthdate is required.";

    } elseif (strtotime($birthdate) > time()) {

        $_SESSION['errors']['birthdateError'] = "Birthdate cannot be in the future.";

    }
 
    if (empty($gender)) {

        $_SESSION['errors']['genderError'] = "Please select your gender.";

    }
 
    if (empty($address)) {

        $_SESSION['errors']['addressError'] = "Address is required.";

    }
 
    if (empty($phone)) {

        $_SESSION['errors']['phoneError'] = "Phone number is required.";

    } elseif (!preg_match('/^\d{7,15}$/', $phone)) {

        $_SESSION['errors']['phoneError'] = "Invalid phone number format.";

    }
 
    if (empty($email)) {

        $_SESSION['errors']['emailError'] = "Email is required.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $_SESSION['errors']['emailError'] = "Invalid email format.";

    }
 
    if (empty($password)) {

        $_SESSION['errors']['passwordError'] = "Password is required.";

    } elseif (strlen($password) < 6) {

        $_SESSION['errors']['passwordError'] = "Password must be at least 6 characters.";

    }
 
    

    if (!isset($_SESSION['errors']['emailError'])) {

        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");

        $stmt->bind_param("s", $email);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {

            $_SESSION['errors']['emailError'] = "Email is already registered.";

        }

        $stmt->close();

    }
 
    

    if (!empty($_SESSION['errors'])) {

        header("Location: ../view/register.php");

        exit();

    }
 
    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, age, birthdate, gender, address, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sissssss", $name, $age, $birthdate, $gender, $address, $phone, $email, $hashed_password);
 
    if ($stmt->execute()) {

        $_SESSION['success'] = "Registration successful. Please login.";

        unset($_SESSION['old']);

        header("Location: ../view/login.php");

        exit();

    } else {

        $_SESSION['errors']['generalError'] = "Registration failed. Please try again.";

        header("Location: ../view/register.php");

        exit();

    }

} else {

    header("Location: ../view/register.php");

    exit();

}

 