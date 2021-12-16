<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Project Code:</em> <?php echo $_POST["ProjectCode"]?></li>
        <li><em>Activity Name:</em> <?php echo $_POST["Name"]?></li>
        <li><em>StartDate:</em> <?php echo $_POST["StartDate"]?></li>
        <li><em>EndDate:</em> <?php echo $_POST["EndDate"]?></li>
    </ol>
    <p><a href="Admin_Landing.php">|  HOME  |  </a></p>
</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "employee-timesheet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$project_code =  $_POST["ProjectCode"];
$activity_name =  $_POST["Name"];
$manager_id = 2;
$start_date =  $_POST["StartDate"];
$end_date =  $_POST["EndDate"];
// Attempt insert query execution
$sql = "INSERT INTO project (start_date, end_date, manager_id, project_code, name) VALUES ('$start_date', '$end_date', '$manager_id', '$project_code', '$activity_name')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>