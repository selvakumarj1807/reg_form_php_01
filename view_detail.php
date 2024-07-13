<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <?php
    // Include the navbar.php file
    include 'navbar.php';
    ?>

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