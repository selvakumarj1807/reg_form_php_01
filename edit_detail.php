<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 600px;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            label,
            input[type="text"],
            button {
                font-size: 16px;
            }
        }
    </style>
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
            <input type="text" name="studEmail" value="<?php echo $email; ?>">

            <button type="submit">Submit</button>
        </form>

    <?php
    }
    ?>

    <br>
    <hr>

</body>

</html>