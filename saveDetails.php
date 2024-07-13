<?php
require('db.php');

$name = $_POST["studName"];

$phone = $_POST["studMobile"];

$email = $_POST["studEmail"];

// Insert Into the Table

$sql = "INSERT INTO `register`(`name`, `phone`, `email`)
VALUES ('$name', '$phone', '$email')";

if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Added  Successfully!');</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>