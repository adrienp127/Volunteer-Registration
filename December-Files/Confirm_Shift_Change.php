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
        <li><em>ProjectId:</em> <?php echo $_POST["ProjectId"]?></li>
        <li><em>RoleId:</em> <?php echo $_POST["RoleId"]?></li>
        <li><em>Time From:</em> <?php echo $_POST["TimeFrom"]?></li>
        <li><em>Time TO:</em> <?php echo $_POST["TimeTo"]?></li>
        <li><em>Date:</em> <?php echo $_POST["Date"]?></li>
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
$project_id =  $_POST["ProjectId"];
$role_id =  $_POST["RoleId"];
$time_from =  $_POST["TimeFrom"];
$time_to =  $_POST["TimeTo"];
$date =  $_POST["Date"]; 
$qry="SELECT * FROM role WHERE id=$role_id";
$qry1="SELECT * FROM project WHERE id=$project_id";
// Attempt insert query execution
$sql = "UPDATE timesheet SET time_from='$time_from', time_to='$time_to', date='$date', project_id='$project_id' WHERE id=id";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>