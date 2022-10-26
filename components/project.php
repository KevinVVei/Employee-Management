<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style/2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <script src="scripts/data.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <h1>Employee Manage System</h1>
        <h2>415 Project</h2>
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
    </header>
  
  
  <h3>Add Project</h3>

			<form method="POST">
  				Project Name : <input type="text" name="PNAME" placeholder="Enter Project Name" Required>
  				<br/>
           Project Number  : <input type="text" name="PNUMBER" placeholder="Enter Project Number" Required>
  				<br/>
           Project Location  : <input type="text" name="PLOCATION" placeholder="Enter Project Location" Required>
  				<br/>
           Department Number  : <input type="text" name="DNUM" placeholder="Enter Department Number" Required>
  				<br/>
  				<input type="submit" name="submit" value="Submit">
			</form>
  

    <?php
					$con=mysqli_connect("localhost","gao14o_project415","123","gao14o_project415");

					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
  					
					$result = mysqli_query($con,"SELECT * FROM PROJECT");

						echo "<table border='3'>
						<tr>
						<th>Project Name</th>
                		<th>Project Number</th>
                		<th>Project Location</th>
                		<th>Department Number</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>" . $row['PNAME'] . "</td>";
                		echo "<td>" . $row['PNUMBER'] . "</td>";
                		echo "<td>" . $row['PLOCATION'] . "</td>";
						echo "<td>" . $row['DNUM'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
  
  
  
  
  					if(isset($_POST['submit']))
					{		
    				$pname = $_POST['PNAME'];
              		$pnumber = $_POST['PNUMBER'];
              		$plocation = $_POST['PLOCATION'];
    				$dnum = $_POST['DNUM'];
             

    				$insert = mysqli_query($con,"INSERT INTO `PROJECT`(`PNAME`,`PNUMBER`,`PLOCATION`,`DNUM`) VALUES ('$pname','$pnumber','$plocation','$dnum')");

    				if(!$insert)
    				{
        			echo mysqli_error();
    				}
    					else
   					 {
        				echo "Records added successfully.";
   					 }
					}
  
  
  
  
  
  

					mysqli_close($con);
					?>
</body>

</html>
