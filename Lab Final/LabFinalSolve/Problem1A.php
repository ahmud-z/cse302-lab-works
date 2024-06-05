<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        Bill ID:
        <input type="number" name="bID" /><br /><br />

        Customer ID:
        <input type="number" name="cID" /><br /><br />

        Customer Name:
        <input type="text" name="cName" /><br /><br />

        Customer Area:
        <input type="text" name="cArea" /><br /><br />

        Previous Reading:
        <input type="text" name="prevRead" /><br /><br />

        Present Reading:
        <input type="text" name="presRead" /><br /><br />

        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php

include("connection.php");

$sql = "INSERT INTO ahmud (bID, cID, cName, address, prevRead, presentRead) values (

'$_POST[bID]', '$_POST[cID]', '$_POST[cName]', '$_POST[cArea]', '$_POST[prevRead]','$_POST[presRead]')";

if ($conn->query($sql) === true) {
    echo "sucessfully inserted";
} else {
    echo "failed to insert";
}
?>