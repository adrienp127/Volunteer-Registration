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
        <li><em>UserName:</em> <?php echo $_POST["username"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Password:</em> <?php echo $_POST["password"]?></li>
        <li><em>FirstName:</em> <?php echo $_POST["firstname"]?></li>
        <li><em>LastName:</em> <?php echo $_POST["lastname"]?></li>
    </ol>

</body>

	<div class="login-signup">
		<a href="User_Landing.php">Login</a>
	</div>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "employee-timesheet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$username =  $_POST["username"];
$email =  $_POST["email"];
$password =  $_POST["password"];
$firstname =  $_POST["firstname"];
$lastname =  $_POST["lastname"];
// Attempt insert query execution
$sql = "INSERT INTO account (username, password, email, first_name, last_name, role_id) VALUES ('$username', '$password', '$email', '$firstname', 'lastname', 1)";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>