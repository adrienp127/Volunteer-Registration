<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Shift Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2>Project Info</h2>
    <p>Please fill in this form and send us.</p>
    <form action="confirm_project.php" method="post">
        <p>
            <label for="ProjectCode">Project Code:<sup>*</sup></label>
            <input type="varchar" name="ProjectCode" id="ProjectCode">
        </p>
        <p>
            <label for="Name">Name:<sup>*</sup></label>
            <input type="varchar" name="Name" id="Name">
        </p>
        <p>
            <label for="StartDate">Start Date:</label>
            <input type="date" name="StartDate" id="StartDate">
        </p>
        <p>
            <label for="EndDate">End Date:<sup>*</sup></label>
            <input type="date" name="EndDate" id="EndDate">
        </p>
    
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>