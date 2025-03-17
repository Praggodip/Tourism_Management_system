<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="Samya.css">
</head>
<body>
    <h2>Resume Builder</h2>

    <!-- Personal Information Form -->
    <form action="process.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>

            <label>Full Name:</label>
            <input type="text" name="name" required value="Ausmita">

            <label>Email:</label>
            <input type="email" name="email" required value="ausmita@gmail.com">

            <label>Phone:</label>
            <input type="tel" name="phone" required>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required>

            <div class="radio-group">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="male" required> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
                <label><input type="radio" name="gender" value="other"> Other</label>
            </div>

            <label>Address:</label>
            <textarea name="address" rows="3" required></textarea>

            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <br>

    <!-- Education Details Form -->
    <form action="process.php" method="get">
        <fieldset>
            <legend>Education Details</legend>

            <label>Higher Degree:</label>
            <input type="text" name="degree">

            <label>Institution:</label>
            <input type="text" name="institution">

            <label>Year of Graduation:</label>
            <input type="number" name="year" min="1900" max="2100">

            <input type="submit" value="Submit">
        </fieldset>
    </form>

   
</body>
</html>