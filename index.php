<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"] {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 2px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        .actions button {
            background-color: #007BFF;
            border: none;
            padding: 5px 10px;
            color: white;
            cursor: pointer;
        }

        .actions button:hover {
            background-color: #0056b3;
        }

        .actions button.delete {
            background-color: #dc3545;
        }

        .actions button.delete:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {

            table,
            form {
                width: 100%;
                overflow-x: auto;
                display: block;
            }

            th,
            td {
                display: block;
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            th::before,
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 10px;
                font-weight: bold;
                text-align: left;
            }

            th:first-child,
            td:first-child {
                text-align: left;
                padding-left: 10px;
            }
        }
    </style>
</head>

<body>
    <form action="saveDetails.php" method="post">
        <label for="studName">Name:</label>
        <input type="text" id="studName" name="studName">

        <label for="studMobile">Mobile:</label>
        <input type="text" id="studMobile" name="studMobile">

        <label for="studEmail">Email:</label>
        <input type="text" id="studEmail" name="studEmail">

        <button type="submit">Submit</button>
    </form>

    <hr>
    <h1>Register Details</h1>

    <table>
        <tr>
            <th data-label="S.No">S.No</th>
            <th data-label="Register Id">Register Id</th>
            <th data-label="Name">Name</th>
            <th data-label="Mobile">Mobile</th>
            <th data-label="Email">Email</th>
            <th data-label="Action">Action</th>
        </tr>

        <?php
        require('db.php');

        $slno = 0;

        $result = mysqli_query($conn, "SELECT * FROM register");

        while ($row_result = mysqli_fetch_array($result)) {
            $slno++;
            $id = $row_result['id'];
            $name = $row_result['name'];
            $phone = $row_result['phone'];
            $email = $row_result['email'];
        ?>

            <tr>
                <td data-label="S.No"><?php echo $slno ?></td>
                <td data-label="Register Id"><?php echo $id ?></td>
                <td data-label="Name"><?php echo $name ?></td>
                <td data-label="Mobile"><?php echo $phone ?></td>
                <td data-label="Email"><?php echo $email ?></td>
                <td data-label="Action" class="actions">
                    <a href="edit_detail.php?id=<?php echo $id; ?>"><button>Edit</button></a>
                    <a href="delete_detail.php?id=<?php echo $id; ?>"><button class="delete">Delete</button></a>
                </td>
            </tr>

        <?php } ?>

    </table>
</body>

</html>