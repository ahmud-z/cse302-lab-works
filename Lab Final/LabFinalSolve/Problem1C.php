<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");
    $sql = "SELECT * FROM ahmud WHERE cID = '$_POST[cID]'";
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Customer ID:
        <input type="text" name="cID" placeholder="Enter your customer id" /><br><br>
        <input type="submit" name="submit" value="search" />
    </form>
    <br /><br />

    <table border="1" cellpadding="10px">
        <tr>
            <th colspan="2">Electricity Bill Information</th>
        </tr>
        <?php if (isset($result)) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td>Bill ID</td>
                    <td><?= $row["bID"] ?></td>
                </tr>

                <tr>
                    <td>Customer ID</td>
                    <td><?= $row["cID"] ?></td>
                </tr>

                <tr>
                    <td>Customer Name</td>
                    <td><?= $row["cName"] ?></td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td><?= $row["address"] ?></td>
                </tr>

                <tr>
                    <td>Previous Reading</td>
                    <td><?= $row["prevRead"] ?></td>
                </tr>

                <tr>
                    <td>Previous Reading</td>
                    <td><?= $row["presentRead"] ?></td>
                </tr>
                <tr>
                    <td>Units</td>
                    <td><?= $row["presentRead"] - $row["prevRead"] ?></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><?= ($row["presentRead"] - $row["prevRead"]) * 4 ?></td>
                </tr>
            <?php endwhile ?>
        <?php endif ?>
    </table>
</body>

</html>