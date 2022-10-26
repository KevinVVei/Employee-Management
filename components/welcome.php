<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
  		 <header>
        <h1>415 Project</h1>
        <h2>Employee Manage System</h2>
        <h3>Changkuan Gao, Chengyue Wei </h3>
        <nav>
            <ul>
                <li onclick="window.location='index.php'">Home</li>
                <li onclick="window.location='employee.php'">Employee</li>
                <li onclick="window.location='project.php'">Project</li>
                <li onclick="window.location='department.php'">Department</li>
              	<li onclick="window.location='work-plan.php'">Work Plan</li>
                <li onclick="window.location='contactus.php'">Contact Us</li>
                <li onclick="window.location='about.php'">About Us</li>
            </ul>
          <ul>
            <li onclick="window.location='register.php'">Sign Up</li>
            </ul>
        </nav>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>