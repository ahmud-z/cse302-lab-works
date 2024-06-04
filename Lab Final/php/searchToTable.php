<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");
    $sql = "SELECT * FROM users WHERE username = '$_POST[username]'";
    $result = mysqli_query($conn, $sql);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Enter your name">
        <input type="submit" name="submit" value="search">
    </form>
    <br><br>
    <table border="1" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php if (isset($result)) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["username"] ?></td>
                    <td><?= $row["password"] ?></td>
                </tr>
            <?php endwhile ?>
        <?php endif ?>
    </table>
</body>

</html>