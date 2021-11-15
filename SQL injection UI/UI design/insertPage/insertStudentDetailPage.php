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
// $sql = "CREATE DATABASE Student";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully" . "<br>";
// } else {
//   echo "Error creating database: " . $conn->error . "<br>";
// }



// Selecting the database
$db=mysqli_select_db($conn,'Student');
//   if (!$db)
//       echo "Database not selected" . "<br>";
//     else
//       echo "Database SELECTED" . "<br>";




//sql to create table insert_Student_Details
// $sql="CREATE TABLE student_details (rollno varchar(9) NOT NULL, Names varchar(20) NOT NULL, city varchar(20) NOT NULL, phone varchar(10) NOT NULL, StandardDetails INT NOT NULL)";
// if ($conn->query($sql) === TRUE) {
// 	echo "user table created successfully" . "<br>";
// } else {
// 	echo "Error creating user table: " . $conn->error . "<br>";
// }

$rollno = $_GET['rollno'];
$name = $_GET['name'];
$city = $_GET['city'];
$phoneno = $_GET['phoneno'];
$standard = $_GET['standard'];

// sql to insert rows in login_details
$sql = "INSERT INTO student_details VALUES ('$rollno','$name','$city',$phoneno,$standard);";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:http://localhost/sql-injection-manav/SQL%20injection%20UI/UI%20design/dashboardPage/dashboardPage.html")


?>

