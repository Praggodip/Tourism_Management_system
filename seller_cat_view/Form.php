<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Form</title>
<link rel="stylesheet" href="Ausmita.css" />
</head>
<body>
<h2>Resume builder</h2>
 
  
<form id="personalForm" action="process.php" method="post">
<fieldset>
<legend><b>Personal Information</b></legend>
 
      <label for="name">Full Name:</label><br>
<input type="text" id="name" name="name" required value="Ausmita">
<div id="nameError" class="error"></div><br>
 
      <label for="email">Email:</label><br>
<input type="email" id="email" name="email" required value="ausmita@gmail.com">
<div id="emailError" class="error"></div><br>
 
      <label for="phone">Phone:</label><br>
<input type="tel" id="phone" name="phone" required>
<div id="phoneError" class="error"></div><br>
 
      <label for="dob">Date of Birth:</label><br>
<input type="date" id="dob" name="dob" required>
<div id="dobError" class="error"></div><br>
 
      <label for="address">Address:</label><br>
<textarea id="address" name="address" rows="5" required></textarea>
<div id="addressError" class="error"></div><br>
 
      <input type="submit" value="Submit">
</fieldset>
</form>
 
 
<form id="educationForm" action="process.php" method="get">
<fieldset>
<legend><b>Education Details</b></legend>
 
      <label for="degree">Higher Degree:</label>
<input type="text" id="degree" name="degree">
<div id="degreeError" class="error"></div><br>
 
      <label for="institution">Institution:</label>
<input type="text" id="institution" name="institution">
<div id="institutionError" class="error"></div><br>
 
      <label for="year">Year of Graduation:</label>
<input type="number" id="year" name="year" min="1900" max="2100">
<div id="yearError" class="error"></div><br>
 
      <input type="submit" value="Submit">
</fieldset>
</form>
 
  <script src="validation.js"></script>
</body>
</html>

 
