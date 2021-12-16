<DOCKTYPE! html>

<html>
	<head>

		<title>CONNECTION</title>
		<link href = "styles/main.css" rel ="stylesheet" type ="text/css" />
		<img src="vol.jpeg"style="width:35%" class = "center" style="height: 35%">

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
  			width: 30%;
  			border: none;
  			background-color: #003EFF;
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

		<h1> CONNECTION </h1>
  
        <div class="container">

  			<div class="box1">
  				<img src="user.jpg"style="width:30%" class = "center">
    			<h1>USER</h1>
               	<a href = "User_Login.php">
               		<button class="block" class="center">GO</button>
               	</a>

  			</div>
  
 			<div class="box2">
    			<img src="admin.png"style="width:30%" class = "center">
    			<h1>ADMIN</h1>
    			<a href = "Admin_Login.php">
    				<button class="block"> GO</button>
    			</a>




  			</div>
  			<div class="box3">
  				<img src="group.png"style="width:30%" class = "center">
    			<h1>Coporate User</h1>
               	<a href = "Coporate_User_Login.php">
               		<button class="block" class="center">GO</button>
               	</a>

  			</div>
  			</div>
  
		</div>
 

	

		

                   
</div>
<h1>OR</h1>
<h1>Register Now!</h1>
<h1> If not registered please sign up using the button below </h1>
<a href = "user-registration.php">
	<button class="block"> Sign Up</button>
</a>






	</body>
</html>
