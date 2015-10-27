<!Doctype html>
<html>
<head>
<meta charset="utf-8">

</head>
<body>
 <?php include "header.php";?>
Welcome 
email: <?php echo $_POST["emailAddr"]?><br>
color: <?php echo $_POST["color"]?><br>
info windows:<?php echo $_POST["pWindows"]?><br>
door: <?php echo $_POST["DoorCtl"]?><br>
zip: <?php echo $_POST["zip"]?><br>

<?php
	$em= $_POST["emailAddr"];
	$co= $_POST["color"];
	$in= $_POST["pWindows"];
	$do= $_POST["DoorCtl"];
	$zi= $_POST["zip"];

	$servername = "localhost";
	$username = "elder";
	$password = "elder";
	
	try {

	    $conn = new PDO("mysql:host=$servername;dbname=welcom", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully <br/>"; 


		$sql = "INSERT INTO exam (email, color, info, door, zip) VALUES (:email,:color,:info,:door,:zip)";

		$q = $conn->prepare($sql);
		$q->execute(array(':email'=>$em,'color'=>$co,'info'=>$in,'door'=>$do,'zip'=>$zi));
    }
	catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
?>

</body>
</html> 