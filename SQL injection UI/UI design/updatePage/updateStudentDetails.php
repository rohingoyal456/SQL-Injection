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


// Selecting the database
$db=mysqli_select_db($conn,'Student');
  // if (!$db)
  //     echo "Database not selected" . "<br>";
  //   else
  //     echo "Database SELECTED" . "<br>";

$rollno = $_GET['rollno'];
$name = $_GET['name'];
$city = $_GET['city'];
$phoneno = $_GET['phoneno'];
$standard = $_GET['standard'];

$sql = "UPDATE student_details SET name= '$name', city= '$city', phone= '$phoneno', StandardDetails= '$standard' WHERE rollno = '$rollno';";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>



