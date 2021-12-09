<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nume = $_POST['nume'];
$an = $_POST['an'];
$facultate = $_POST['facultate'];
$grupa = $_POST['grupa'];
$nota = $_POST['nota'];
if(preg_match("/\w+/i", $nume) and 
        preg_match("/\d{4}/i", $an) and
        preg_match("/\w+/i", $facultate) and
        preg_match("/.+/i", $grupa) and
        preg_match("/\d+/i", $nota)){
          
      $sql = "INSERT INTO students
              VALUES ('$nume', '$an', '$facultate', '$grupa', '$nota')";

      if ($conn->query($sql) === TRUE) {
        echo "Studentul a fost adaugat!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
} else {
  echo "datele au fost introduse gresit!";
}
$conn->close();
?>