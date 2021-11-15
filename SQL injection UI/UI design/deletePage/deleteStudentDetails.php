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


UPDATE student_details SET rollno = '', names='', City= '', phone='', StandardDetails=
WHERE CustomerID = 1;

// Selecting the database
$db=mysqli_select_db($conn,'Student');
  if (!$db)
      echo "Database not selected" . "<br>";
    else
      echo "Database SELECTED" . "<br>";


?>