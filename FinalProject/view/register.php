<?php
session_start();
 
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
 

unset($_SESSION['errors']);
unset($_SESSION['old']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
    <div class="register-container">
        <h2>Registration Form</h2>
        <?php if (isset($errors['generalError'])): ?>
            <p class="error"><?= $errors['generalError'] ?></p>
        <?php endif; ?>
        <form name="regForm" action="../controller/registerController.php" method="POST" onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="Full Name" value="<?= htmlspecialchars($old['name'] ?? '') ?>" />
            <?php if (isset($errors['nameError'])): ?>
                <p class="error"><?= $errors['nameError'] ?></p>
            <?php endif; ?>
 
            <input type="number" name="age" placeholder="Age" value="<?= htmlspecialchars($old['age'] ?? '') ?>" />
            <?php if (isset($errors['ageError'])): ?>
                <p class="error"><?= $errors['ageError'] ?></p>
            <?php endif; ?>
 
            <input type="date" name="birthdate" placeholder="Birthdate" value="<?= htmlspecialchars($old['birthdate'] ?? '') ?>" />
            <?php if (isset($errors['birthdateError'])): ?>
                <p class="error"><?= $errors['birthdateError'] ?></p>
            <?php endif; ?>
 
            <div class="gender-options">
                Gender:
                <label><input type="radio" name="gender" value="Male" <?= (isset($old['gender']) && $old['gender'] === 'Male') ? 'checked' : '' ?> /> Male</label>
                <label><input type="radio" name="gender" value="Female" <?= (isset($old['gender']) && $old['gender'] === 'Female') ? 'checked' : '' ?> /> Female</label>
                <label><input type="radio" name="gender" value="Other" <?= (isset($old['gender']) && $old['gender'] === 'Other') ? 'checked' : '' ?> /> Other</label>
            </div>
            <?php if (isset($errors['genderError'])): ?>
                <p class="error"><?= $errors['genderError'] ?></p>
            <?php endif; ?>
 
            <textarea name="address" placeholder="Address"><?= htmlspecialchars($old['address'] ?? '') ?></textarea>
            <?php if (isset($errors['addressError'])): ?>
                <p class="error"><?= $errors['addressError'] ?></p>
            <?php endif; ?>
 
            <input type="text" name="phone" placeholder="Phone Number" value="<?= htmlspecialchars($old['phone'] ?? '') ?>" />
            <?php if (isset($errors['phoneError'])): ?>
                <p class="error"><?= $errors['phoneError'] ?></p>
            <?php endif; ?>
 
            <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" />
            <?php if (isset($errors['emailError'])): ?>
                <p class="error"><?= $errors['emailError'] ?></p>
            <?php endif; ?>
 
            <input type="password" name="password" placeholder="Password" />
            <?php if (isset($errors['passwordError'])): ?>
                <p class="error"><?= $errors['passwordError'] ?></p>
            <?php endif; ?>
 
            <input type="submit" value="Register" />
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </div>
    <script src="../assets/js/validation.js"></script> <!-- Optional client-side validation -->
</body>
</html>
 
 