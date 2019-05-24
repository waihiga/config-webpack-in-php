<!DOCTYPE html>
<html>
<body>
<?php

include("connect.php");

$name = $_POST['username'];

$sql = "INSERT INTO employees VALUES ('$name')";

$saveToDatabase = mysqli_query($connection, $sql);

if ($saveToDatabase) {
    echo "Saved";
} else {
    echo "not saved";
}
?>
<h1>PHP</h1>
<form method="post" action="welcome.php">
    User Name: <input type="text" name="username"><br>
    <input type="submit" name="submit" value="Create">
</form>
</body>
</html>