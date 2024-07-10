<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
</head>

<body>
    <form action="saveDetails.php" method="post">
        <label>Name :</label>
        <input type="text" name="studName">

        <label>Mobile :</label>
        <input type="text" name="studMobile">

        <label>Email :</label>
        <input type="text" name="studPhone"> :

        <button type="submit">Submit</button>
    </form>

    <hr>
    <h1>Register Details</h1>

    <table border="2">
        <tr>
            <th>S.No</th>
            <td>Register Id</td>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Action</th>
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
                <td><?php echo $slno ?></td>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $email ?></td>
                <td>
                    <button>Edit</button>
                    &nbsp;&nbsp;
                    <button>Delete</button>
                </td>
            </tr>

        <?php } ?>

    </table>
</body>

</html>