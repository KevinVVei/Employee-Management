<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style/2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <script src="scripts/data.js"></script>
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

    <?php
					$con=mysqli_connect("localhost","gao14o_project415","123","gao14o_project415");

					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT DNAME, DNUMBER, MGR_SSN, MGR_START_DATE FROM UW_DEPARTMENT");

						echo "<table border='4'>
						<tr>
						<th>Deparment Name</th>
               			<th>Department Number</th>
                		<th>MGR_SSN</th>
                        <th>MGR_START_DATE</th>               
						</tr>";

						while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>" . $row['DNAME'] . "</td>";
						echo "<td>" . $row['DNUMBER'] . "</td>";
                		echo "<td>" . $row['MGR_SSN'] . "</td>";
                		echo "<td>" . $row['MGR_START_DATE'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";

					mysqli_close($con);
					?>

  
</body>


</html>
