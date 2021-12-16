<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="save.php" method="post">
        <p>
            <label for="FirstName">First Name:<sup>*</sup></label>
            <input type="text" name="FirstName" id="FirstName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" id="LastName">
        </p>
    
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>