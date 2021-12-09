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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];
$encrypted_pwd = md5($password);
if(preg_match("/!\d+/i",$firstname ) and
      preg_match("/!\d+/i", $lastname) and
      preg_match("/.+@.+\..+/i", $email) and
      preg_match("/.{5}/i", $login) and
      preg_match("/.{5}/i", $password) ){
          $sql = "INSERT INTO users
                  VALUES ('$firstname', '$lastname', '$email', '$login', '$encrypted_pwd')";

          if ($conn->query($sql) === TRUE) {
            echo "Utilizatorul a fost adaugat!";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
      } else{
        echo "Datele au fost introduse gresit!";
      }
$conn->close();
?>