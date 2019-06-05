<html>
<head>
	<title>Form Handler php</title>
</head>
<body>

<?php 

# this program handles form data 

echo 'the variable $_REQUEST =';
var_dump($_REQUEST); 

$Name = $_REQUEST['Name'];
$Gender = $_REQUEST['Gender'];
$Grade = $_REQUEST['Grade'];
$Size = $_REQUEST['Size'];
$Comments = $_REQUEST['Comments'];

echo "<br> <br>";

echo "The following values were passed from the HTML form: <br><br>";
echo "\$Name = $Name <br> <br>";
echo "\$Gender = $Gender <br> <br>";
echo "\$Grade = $Grade <br> <br>";
echo "\$Size = $Size <br> <br>";
echo "\$Comments = $Comments <br> <br>";

?>

</body>
</html>
