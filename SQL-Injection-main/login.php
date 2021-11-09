<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
// $sql = "CREATE DATABASE login_Credentials";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully" . "<br>";
// } else {
//   echo "Error creating database: " . $conn->error . "<br>";
// }

// Selecting the database
$db=mysqli_select_db($conn,'login_Credentials');
  if (!$db)
        echo "Database not selected" . "<br>";
    else
        echo "Database SELECTED" . "<br>";

//sql to create table login_details

$sql="CREATE TABLE `login_details` (
	username varchar(20) NOT NULL,
	Pass varchar(20) NOT NULL
)";

// if ($conn->query($sql) === TRUE) {
// 	echo "user table created successfully" . "<br>";
// } else {
// 	echo "Error creating user table: " . $conn->error . "<br>";
// }

// sql to insert rows in login_details
// $sql = "INSERT INTO login_details VALUES ('admin', 'admin'),('html', 'css'),('php', 'php'),('sql', 'project');";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
$uname = $_GET['uname'];
$pass = $_GET['pass'];

// $uname = $conn -> real_escape_string($_GET['uname']);
// $pass = $conn -> real_escape_string($_GET['pass']);

// $sql = "SELECT * FROM login_details WHERE username = '$uname' AND Pass = '$pass'";
// $result = mysqli_query($conn, $sql);
// $check = mysqli_fetch_array($result);

$stmt = $conn->prepare("SELECT * FROM login_details WHERE username = ? AND Pass = ?");
$stmt -> bind_param('ss', $uname,$pass);
$stmt -> execute();
$result = $stmt->get_result();
$check = $result -> fetch_assoc();
// while($row = $result -> fetch_assoc()){
//   echo('user Name:'.$uname);
// }
if(isset($check)){
	echo '<h1>Connection is successful</h1>';
}
else {
	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}


//parameter binding

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   // prepare sql and bind parameters
//   $stmt = $conn->prepare("SELECT * FROM login_details (firstname, lastname, email)
//   VALUES (:firstname, :lastname, :email)");
//   $stmt->bindParam(':firstname', $firstname);
//   $stmt->bindParam(':lastname', $lastname);
//   $stmt->bindParam(':email', $email);

//   // insert a row
//   $firstname = "John";
//   $lastname = "Doe";
//   $email = "john@example.com";
//   $stmt->execute();

//   // insert another row
//   $firstname = "Mary";
//   $lastname = "Moe";
//   $email = "mary@example.com";
//   $stmt->execute();

//   // insert another row
//   $firstname = "Julie";
//   $lastname = "Dooley";
//   $email = "julie@example.com";
//   $stmt->execute();

//   echo "New records created successfully";
// } catch(PDOException $e) {
//   echo "Error: " . $e->getMessage();
// }


?>





<!-- ' or 1=1--  -->

<!-- admin' or '1'='1 -->

<!-- rohin' or '1'='1 -->

<!-- rohin' or '1'='1 -->
<!-- admin -->

<!-- rohin' and '1'='1 -->
<!-- admin -->