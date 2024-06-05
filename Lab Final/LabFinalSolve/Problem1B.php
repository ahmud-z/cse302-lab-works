<?php
include("connection.php");
$sql = "SELECT * FROM ahmud";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>

    <table border="1" cellpadding="10px">
        <tr>
            <th>Bill ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Previous Reading</th>
            <th>Present Read</th>
            <th>Units</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["bID"] ?></td>
                <td><?= $row["cID"] ?></td>
                <td><?= $row["cName"] ?></td>
                <td><?= $row["address"] ?></td>
                <td><?= $row["prevRead"] ?></td>
                <td><?= $row["presentRead"] ?></td>
                <td><?= $row["presentRead"] - $row["prevRead"] ?></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>

</html>