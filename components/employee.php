<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
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
              	<li onclick="window.location='work_plan.php'">Work Plan</li>
                <li onclick="window.location='contactus.php'">Contact Us</li>
                <li onclick="window.location='about.php'">About Us</li>
            </ul>
          <ul>
            <li onclick="window.location='register.php'">Sign Up</li>
            </ul>
        </nav>
      
      
      
    </header>
  <h3>Fill the Form</h3>

			<form method="POST">
  				FirstName : <input type="text" name="FNAME" placeholder="Enter First Name" Required>
  				<br/>
  				LastName : <input type="text" name="LNAME" placeholder="Enter Last Name" Required>
  				<br/>
           SSN : <input type="text" name="SSN" placeholder="Enter Your SSN" Required>
  				<br/>
           BIRTHDAY : <input type="text" name="BDATE" placeholder="Enter Your Birthday" Required>
  				<br/>
           SEX : <input type="text" name="SEX" placeholder="Enter Your Sex" Required>
  				<br/>
  				<input type="submit" name="submit" value="Submit">
			</form>

    <?php
					$con=mysqli_connect("localhost","gao14o_project415","123","gao14o_project415");

					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM employee");

						echo "<table border='3'>
						<tr>
						<th>Firstname</th>
						<th>Lastname</th>
                <th>SSN</th>
                <th>BIRTHDAY</th>
                <th>SEX</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>" . $row['FNAME'] . "</td>";
						echo "<td>" . $row['LNAME'] . "</td>";
                echo "<td>" . $row['SSN'] . "</td>";
                echo "<td>" . $row['BDATE'] . "</td>";
                echo "<td>" . $row['SEX'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
  
  					
  
  
  					if(isset($_POST['submit']))
					{		
    				$FNAME = $_POST['FNAME'];
    				$LNAME = $_POST['LNAME'];
              $SSN = $_POST['SSN'];
              $BDATE = $_POST['BDATE'];
              $SEX = $_POST['SEX'];

    				$insert = mysqli_query($con,"INSERT INTO `employee`(`FNAME`, `LNAME`,`SSN`,`BDATE`,`SEX`) VALUES ('$FNAME','$LNAME','$SSN','$BDATE','$SEX')");

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
