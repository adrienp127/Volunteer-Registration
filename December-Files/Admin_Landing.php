<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Shift</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <h2>Shift Info</h2>
    <p>Please fill in this form and send us.</p>
    <form action="Confirm_Shift.php" method="post">
        <p>
            <label for="ProjectId">Project ID:<sup>*</sup></label>
            <input type="int" name="ProjectId" id="ProjectId">
        </p>
        // Make this a dropdown arrow
        <p>
            <label for="ActivityName">Activity Name:<sup>*</sup></label>
            <input type="varchar" name="ActivityName" id="ActivityName">
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Timesheet Details</h2>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM timesheet";
		    $qry="SELECT * FROM activity";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Employee Id</th>";
                                        echo "<th>Activity Name</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Time From</th>";
                                        echo "<th>Time To</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['employee_id'] . "</td>";
                                        echo "<td>" . $row['activity_id'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['time_from'] . "</td>";
                                        echo "<td>" . $row['time_to'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read_timesheet.php?id='. $row['id'] .'" class="mr-3" title="Read Timesheet" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="edit_timesheet.php?id='. $row['id'] .'" class="mr-3" title="Edit Timesheet" data-toggle="tooltip"><span class="fa fa-edit"></span></a>';
                                            echo '<a href="delete_timesheet.php?id='. $row['id'] .'" class="mr-3" title="Delete Timesheet" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 

                    ?>
                </div>
            </div>        
        </div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Activity Details</h2>
                    </div>
                    <?php
                    // Attempt select query execution
                    $sql = "SELECT * FROM activity";
		    $qry="SELECT * FROM timesheet";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Project ID</th>";
                                        echo "<th>Activity Name</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Time From</th>";
                                        echo "<th>Time To</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['project_id'] . "</td>";
                                        echo "<td>" . $row['activity_name'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['time_from'] . "</td>";
                                        echo "<td>" . $row['time_to'] . "</td>";
                                        echo "<td>";
					    echo '<a href="read_activity.php?id='. $row['id'] .'" class="mr-3" title="Read Shift" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
					    echo '<a href="edit_activity.php?id='. $row['id'] .'" class="mr-3" title="Edit Shift" data-toggle="tooltip"><span class="fa fa-edit"></span></a>';
					    echo '<a href="delete_activity.php?id='. $row['id'] .'" class="mr-3" title="Delete Shift" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    ?>
                </div>
            </div>        
        </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Project Details</h2>
                        <a href="create_project.php" class="btn btn-success pull-right">
<i class="fa fa-plus"></i> Add New Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM project";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>Project Code</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Start Date</th>";
                                        echo "<th>End Date</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['project_code'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['start_date'] . "</td>";
                                        echo "<td>" . $row['end_date'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read_project.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="delete_project.php?id='. $row['id'] .'" class="mr-3" title="Delete Project" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
        <p><a href="update_employee.php">|  Update Prifile  |  </a></p>
        <a href="logout.php">|  Logout  |</a>
    </div>
</body>
</html>