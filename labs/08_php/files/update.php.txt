<?php # update.php

include ('header.html');

// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'northwinds');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
	   OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );  // Connect to the db.
	   
//$q = "SELECT FirstName, LastName, Country from nwemployees;";	// Define the query.   

$q = "UPDATE nwemployees set FirstName = 'Tommy' where EmployeeID = 3;";	// Define update query.  
	   
$r =  mysqli_query($dbc,$q);  // Run the UPDATE query.

$q = "SELECT FirstName, LastName, Country from nwemployees;";	// Define select query to show updates.

$r =  mysqli_query($dbc,$q);  // Run the SELECT query.

		// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {

		echo $row[0]." ".$row[1]." ".$row[2]."<br>";
			
	}

mysqli_close($dbc); // Close the database connection.

include ('footer.html');
?>