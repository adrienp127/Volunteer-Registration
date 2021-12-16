<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Shift</title>
</head>
<body>
    <h2>Shift Info</h2>
    <p>Please fill in this form and send us.</p>
    <form action="Confirm_Shift.php" method="post">
        <p>
            <label for="ProjectId">Project ID:<sup>*</sup></label>
            <input type="int" name="ProjectId" id="ProjectId">
        </p>
        <p>
            <label for="RoleId">Role ID:<sup>*</sup></label>
            <input type="int" name="RoleId" id="RoleId">
        </p>
        <p>
            <label for="TimeFrom">Time From:</label>
            <input type="time" name="TimeFrom" id="TimeFrom">
        </p>
        <p>
            <label for="TimeTo">TimeTO:<sup>*</sup></label>
            <input type="time" name="TimeTo" id="TimeTo">
        </p>
        <p>
            <label for="Date">Date:<sup>*</sup></label>
            <input type="date" name="Date" id="Date">
        </p>
    
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

</body>
</html>