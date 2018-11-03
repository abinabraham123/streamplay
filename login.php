</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, "", $dbname);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
       
 }


$username = $_POST['name']; 
$password = $_POST['password'];
$sql = "SELECT password from register WHERE name= '".$username."';";
	// store result
	$result = mysqli_query($conn, $sql);

	// check if row is returned from db
	if(mysqli_num_rows($result)>0) {
		
		while($row = mysqli_fetch_assoc($result)){
			// get one row
			$database_password = $row['password'];
			if (strcmp($password,$database_password)==0) {
				//redirect to new page
				mysqli_close($conn);
				header("location: index.html");
				// echo "success";
				exit(); 
			}else{
				echo "FAILED";
				echo "Wrong input";
			}
			}
	}else{
		echo "failed to login";
		echo "possibly wrong username";
		echo "Error".mysqli_error($conn);
	}

?>
</body>
</html>