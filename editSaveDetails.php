<?php


$id = $_POST['id'];

$name = $_POST["studName"];

$phone = $_POST["studMobile"];

$email = $_POST["studPhone"];

require('db.php');

// Update the table
$sql = "UPDATE `register` SET `name`='{$name}', `phone`='{$phone}',
     `email`='{$email}' WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Updated Successfully!');</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<?php

/*
echo ' Id : ' . $id;

echo "<br>";

echo 'Name : ' . $name;

echo "<br>";

echo 'Mobile : ' . $phone;

echo "<br>";

echo 'Email : ' . $email;


*/

?>