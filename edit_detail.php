<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $id = $_REQUEST["id"];

    //echo $id;

    require('db.php');

    $result = mysqli_query($conn, "SELECT * FROM register where id = '$id'");

    while ($row_result = mysqli_fetch_array($result)) {

        $id = $row_result['id'];
        $name = $row_result['name'];
        $phone = $row_result['phone'];
        $email = $row_result['email'];
    ?>

        <form action="editSaveDetails.php" method="post">

            <input type="hidden" name="id" value="<?php echo $id; ?>" />

            <label>Name :</label>
            <input type="text" name="studName" value="<?php echo $name; ?>">

            <label>Mobile :</label>
            <input type="text" name="studMobile" value="<?php echo $phone; ?>">

            <label>Email :</label>
            <input type="text" name="studPhone" value="<?php echo $email; ?>"> :

            <button type="submit">Submit</button>
        </form>

    <?php
    }
    ?>

    <br>
    <hr>

</body>

</html>