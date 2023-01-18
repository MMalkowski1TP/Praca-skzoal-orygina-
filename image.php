<?php
  require "connections/connection.php";
  $username = $_POST['user'];
  $name = $_POST["IMG_id"];
  $data = $_POST["data"];
  $dane = $_POST["base64"];
  
  $sql = "USE task_maciej";
  


  $sql = "INSERT INTO image (project_name, czas, autor, base64_data)
VALUES ($name, $data, $username, $dane)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql = "INSERT INTO images (project_nam, czas, autor, base_64)
VALUES ($name, $data, $user, $dane)";
$conn->close();
?>
