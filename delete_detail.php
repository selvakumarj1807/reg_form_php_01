<?php
require('db.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM `register` WHERE id = '$id'";


if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Deleted Successfully!');</script>";

    echo "<script type='text/javascript'>window.location.href='index.php';</script>";
} else {
    echo "Error: ".$sql."<br>".$conn->error;

}

?>