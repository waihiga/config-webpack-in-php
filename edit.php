<!DOCTYPE html>
<html>
<body>
<?php

include("connect.php");
if(count($_POST)>0) {
    mysqli_query($connection,"UPDATE employees set id='" . $_POST['id'] . "', username='" . $_POST['username'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "Updated Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM employees WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<h1>PHP</h1>
<form method="post">
    User Name:
    <input type="hidden" name="id" class="text" value="<?php echo $row['id']; ?>">
    <input type="text" name="username" value="<?php echo  $row['username']?>"><br>
    <input type="submit" name="submit" value="Create">
</form>
</body>
</html>