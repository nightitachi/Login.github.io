<?php
    include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
  

  // Prepare and execute an SQL query to insert user data into the database
  $sql = "INSERT INTO tesst1 (username, password) VALUES ('$username', '$hashedpassword')";

  if ($conn->query($sql) === TRUE) {
      echo "Registration successful!";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>