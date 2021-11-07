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
$sql = "CREATE DATABASE login_Credentials";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully" . "<br>";
} else {
  echo "Error creating database: " . $conn->error . "<br>";
}

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

if ($conn->query($sql) === TRUE) {
	echo "user table created successfully" . "<br>";
} else {
	echo "Error creating user table: " . $conn->error . "<br>";
}

// sql to insert rows in login_details
$sql = "INSERT INTO login_details VALUES ('admin', 'admin'),('html', 'css'),('php', 'php'),('sql', 'project');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$uname = $_GET['uname'];
$pass = $_GET['pass'];

$sql = "SELECT * FROM login_details WHERE username = '$uname' AND Pass = '$pass'";
$result = mysqli_query($conn, $sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
	echo '<h1>Connection is successful</h1>';
}
else {
	echo '<h1>Connection failed.</h1><p>Wrong user credentials</p>';
}

?>



<!-- ' or 1=1--  -->

<!-- admin' or '1'='1 -->

<!-- rohin' or '1'='1 -->

<!-- rohin' or '1'='1 -->
<!-- admin -->

<!-- rohin' and '1'='1 -->
<!-- admin -->

