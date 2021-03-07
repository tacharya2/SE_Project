<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
 }
  $user_name = $_REQUEST['user_name'];
  $pass_word = $_REQUEST["pass_word"];
  $sql = "INSERT INTO table VALUES('$user_name','$pass_word')";
  if(mysqli_query($conn, $sql)){
    echo "<h3>Account created Successfully</h3>";
  } else{
          echo "ERROR  $sql. "
              . mysqli_error($conn);
      }

      // Close connection
      mysqli_close($conn);
      ?>
