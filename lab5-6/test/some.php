<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "posts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$title = $_POST["title"];
$content = $_POST["content"];

$sql = "INSERT INTO posts VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>