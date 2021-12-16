<?php
require('db.php');
include("auth.php");
require_once "config.php";
$username = $_SESSION['username'];
echo $username;
echo $_SESSION['username'];
$id = "SELECT id FROM accounts WHERE username=$username";
echo $id;
$sql = "SELECT * FROM timesheets WHERE employee_id=$id_";
$id_result = mysqli_query($link, $sql);
$id = mysqli_fetch_array($id_result);
if($result = mysqli_query($link, $sql)){
   while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
         echo "</tr>";
    }
}else{
    echo "Oops! Something went wrong. Please try again later.";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>First Name <?php echo $_SESSION['firstname']; ?>!</p>
<p>Last Name <?php echo $_SESSION['lastname']; ?>!</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>