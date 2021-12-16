<?php
// Include config file
require_once "config.php";
require('db.php');
include("auth.php");
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
    $username = $_SESSION['username'];
    echo $username;
    // Prepare a select statement
    $sql = "SELECT * FROM account WHERE id = $username";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id = $row["id"];
                $username = $row["username"];
                $first_name = $row["first_name"];
                $last_name = $row["last_name"];
                $email = $row["email"];
                $role_id = $row["role_id"];
                if($role_id = 1){
                    $role_name = 'User';
                } elseif($role_id = 2){
                    $role_name = 'Admin';
                } elseif($role_id = 3){
                    $role_name = 'Coporate User';
                } else{
                    $role_name = 'Tester';
                }
                echo $rolename;

            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    echo 'damn';
}
?>

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
    <h2>Shift Info</h2>
    <p>Please fill in this form and send us.</p>
    <form action="Confirm_Shift_Change.php" method="post">
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