<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Ausmita.css">
</head>
<body>
    <h2>Resume builder</h2>

<form action="process.php" method="post">
        <fieldset>
            <legend><b>Personal Information</b></legend>

            <!-- Full Name -->
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" required value="Ausmita"><br><br>

            <!-- Email -->
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required value= "ausmita@gmail.com"><br><br>

            <!-- Phone -->
            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone" required><br><br>

            <!-- Date of Birth -->
            <label for="dob">Date of Birth:</label><br>
            <input type="date" id="dob" name="dob" required><br><br>

        

            <!-- Address -->
            <label for="address">Address:</label><br>
            <textarea id="address" name="address" rows="5" required></textarea><br><br>

           

        </fieldset>
    </form>
    <form action="process.php" method="get">
        <fieldset>
            <legend><b>Education Details</b></legend>

            <label for="degree">Higher Degree:</label>
            <input type="text" id="degree" name="degree" ><br>

            <label for="institution">Institution:</label>
            <input type="text" id="institution" name="institution" ><br>

            <label for="year">Year of Graduation:</label>
            <input type="number" id="year" name="year" min="1900" max="2100" ><br>

            <input type="submit" value="Submit">

        </fieldset>
    </form>

</html>


