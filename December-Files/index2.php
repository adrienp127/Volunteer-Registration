<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>First Name <?php echo $_SESSION['firstname']; ?>!</p>
<p>Last Name <?php echo $_SESSION['last_name']; ?>!</p>
<p>This is secure area.</p>
<p><a href="Admin_Landing.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>