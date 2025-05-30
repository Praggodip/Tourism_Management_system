<?php

$nameError = $emailError = $phoneError = $dobError = $genderError = "";
$name = $email = $phone = $dob = $gender = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

    $name = trim($_POST["name"]);
    if (strlen($name) < 3)
    {
        $nameError = "Name must be at least 3 characters.";
    }

    $email = trim($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $emailError = "Invalid email format.";
    }
          
    $phone = trim($_POST["phone"]);
    if (!preg_match("/^[0-9]{10}$/", $phone)) 
    {
        $phoneError = "Phone number must be 10 digits.";
    }

    $dob = $_POST["dob"];
    if (empty($dob) || strtotime($dob) >= time()) {
        $dobError = "Please enter a valid past date of birth.";
    }

    if (isset($_POST["gender"])) {
        $gender = $_POST["gender"];
    } else {
        $genderError = "Please select your gender.";
    }

 
    if (empty($nameError) && empty($emailError) && empty($phoneError) && empty($dobError) && empty($genderError)) {
        echo "<h2>Form submitted successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        exit(); 
    }
}
?>

<html>
<head>
  <title>Resume Builder</title>
  <link rel="stylesheet" href="Samya.css">
</head>
<body>

<h2>Resume Builder</h2>



<form id="personalForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <fieldset>
    <legend>Personal Information</legend>
       
    <label>Full Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>">
    <div class="error"><?php echo $nameError; ?></div>

    <label>Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    <div class="error"><?php echo $emailError; ?></div>

    <label>Phone:</label>
    <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
    <div class="error"><?php echo $phoneError; ?></div>

    <label>Date of Birth:</label>
    <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>">
    <div class="error"><?php echo $dobError; ?></div>

    <div class="radio-group">
      <label>Gender:</label>
      <label><input type="radio" name="gender" value="male" <?php if ($gender=="male") echo "checked"; ?>> Male</label>
      <label><input type="radio" name="gender" value="female" <?php if ($gender=="female") echo "checked"; ?>> Female</label>
      <label><input type="radio" name="gender" value="other" <?php if ($gender=="other") echo "checked"; ?>> Other</label>
      <div class="error"><?php echo $genderError; ?></div>
    </div>

    <label>Address:</label>
    <textarea name="address" rows="3"><?php echo $address; ?></textarea>

    <input type="submit" value="Submit">
  </fieldset>
</form>

</body>
</html>