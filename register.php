
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
else {
    echo "success";
}
//function NewUser() {
    
      $userName = $_POST['username']; 
      
       $password = $_POST['pwd1']; 
       $password1 = $_POST['pwd2']; 
       $query = "INSERT INTO `register`(`name`, `password`, `password1`) VALUES (\"$userName\",\"$password\",\"$password1\")";
       $data = mysqli_query($conn,$query);
       if($data) {
           mysqli_close($conn);
          echo "registered";
       }
        else{
            echo "failed";
        }
 





?>
</body>
</html>
