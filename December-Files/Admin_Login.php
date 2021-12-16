<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<img src="vol.jpeg"style="width:35%" class = "center" style="height: 35%">
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript">
	
</script>
<style>
			body,
        html {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
  
        .box-wrapper {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
        }
  
        #box1 {
            padding: 10px;
            height: 30px;
            line-height: 30px;
            border: solid 1px green
        }
  
        #box2 {
            height: 15px;
            padding: 8px;
            border: solid 1px blue
        }
  
        #box3 {
            padding: 60px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            border: solid 1px green
        }
  
        #box4 {
            flex-grow: 2;
            border: solid 1px orange
        }
 
  
        .middle-column div {
        	float left;
        	width: 300px;
  			height: 200px;  
  			padding: 60px;
  			border: 1px solid red;
            flex-direction: row;
            grid-template-columns: 1fr 1fr;
    		grid-gap: 20px;
        }
  
        .middle-column div {
        	float left;
        	width: 300px;
  			height: 200px;  
  			padding: 60px;
  			border: 1px solid red;
            flex-direction: row;
            grid-template-columns: 1fr 1fr;
    		grid-gap: 20px;
        }
  
        #box8 {
            flex-grow: 1;
            border: solid 1px black
        }
       .grid-container {
    		display: grid;
    		grid-template-columns: 1fr 1fr;
    		grid-gap: 20px;
    
		}
		.clearfix:: after {
			content: "";
  			clear: both;
  			display: table;

		}
	   .float-container {
    		border: 3px solid #fff;
    		padding: 20px;
		}

	   .float-child {
    		width: 300px;
		    height: 200px;  
			padding: 60px;
			float: left;
    		border: 2px solid red;
		}
		.float-childd {
			width: 300px;
		    height: 200px;  
			padding: 60px;
			float: right;
    		border: 2px solid red;

		}
		.float-childdd {
    		width: 300px;
		    height: 200px;  
			padding: 60px;
			float: center;
    		border: 2px solid red;
		}
		.container {
 			float:left;
 			width: 100%;
 			margin: 0 auto;
 			height: 500px;
 		}

		.box1 {
 			float:left;
 			margin : 5px;
 			width: 30%;
 			height: 450px;
 			border: 1px solid black;
 		}
 		.box2 {
 			float:left;
 			margin : 5px;

 			width: 30%;
 			height: 450px;
 	
 			border: 1px solid black;
 		}
 		.box3 {
 			float:left;
 			margin : 5px;
 			width: 30%;
 			height: 450px;
 		
 			border: 1px solid black;
 		}
 		.block {
  			display: block;
  			width: 60%;
  			border: none;
  			background-color: #fff;
  			color: white;
  			padding: 14px 28px;
  			font-size: 16px;
  			cursor: pointer;
  			text-align: center;
  			margin-left: auto;
  			margin-right: auto;
		}
		.block:hover {
  			background-color: #ddd;
  			color: black;

		}
		.center {
  			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			width: 50%;
		}
		h1 {text-align: center;}



     </style>
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `account` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index2.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='Admin_Login.php'>Login</a></div>";
	}
    }else{
?>
<div class="phppot-container">
	<div class="sign-up-container">
		<div class="login-signup">
			<div class="form">
				<div class="row">
					<div class="inline-block">
						<div class="form-label">

							<h1>Login</h1>
							<form action="" method="post" name="login">
							<input class="block" type="text" name="username" placeholder="Username" required />
							<input  class="block" type="password" name="password" placeholder="Password" required />
							<input name="submit" type="submit" value="Login" />
<button> <a href='Admin_Registration.php'>Register Here</a></button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<?php } ?>
</body>
</html>