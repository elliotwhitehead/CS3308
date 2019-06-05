<html>
<head>
	<title>SQL Insert Handler php</title>
</head>
<body>

<?php 

# this program receives form data, formats passed data into a SQL Insert, and updates the database 

#echo 'the variable $_REQUEST =';
#var_dump($_REQUEST); 

$EmployeeID = $_REQUEST['EmployeeID'];
$LastName = $_REQUEST['LastName'];
$FirstName = $_REQUEST['FirstName'];
$Title = $_REQUEST['Title'];
$BirthDate = $_REQUEST['BirthDate'];
$HireDate = $_REQUEST['HireDate'];
$Address = $_REQUEST['Address'];
$City = $_REQUEST['City'];
$Region = $_REQUEST['Region'];
$Country = $_REQUEST['Country'];
$PostalCode = $_REQUEST['PostalCode'];

// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'northwinds');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
	   OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );  // Connect to the db.
	   
$iq = "INSERT into nwemployees (EmployeeID,LastName,FirstName,Title,Birthdate,HireDate,
								Address,City,Region,PostalCode,Country) 
       values ('$EmployeeID','$LastName','$FirstName','$Title','$BirthDate','$HireDate',
			   '$Address','$City','$Region','$PostalCode','$Country')";	 // Define INSERT query.  
	   
$insert_row =  mysqli_query($dbc,$iq);  // Run the INSERT query.

if($insert_row){
print 'Row Inserted !' .'<br />'; 
}else{
    echo "<br>ERROR: Could not execute sql. Error code = " . mysqli_error($dbc)."<br>";
	die('Error on insert');
}

$sq = "SELECT EmployeeID, FirstName, LastName, Title, BirthDate, HireDate, Address, 
			  City, Region, PostalCode, Country from nwemployees;";	// Define select query to show inserts.

$r =  mysqli_query($dbc,$sq);  // Run the SELECT query.

		// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

		echo $row["EmployeeID"]." ".$row["FirstName"]." ".$row["LastName"]." ".$row["Title"]." ".
		$row["BirthDate"]." ".$row["HireDate"]." ".$row["Address"]." ".$row["City"]." ".
		$row["Region"]." ".$row["Country"]."<br>";
			
	}

mysqli_close($dbc);  // Close the database connection.

?>

</body>
</html>
