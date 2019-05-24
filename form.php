<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>
<?php
if (isset($_POST['submit'])){
    $ok = true;

    if (!isset( $_POST['name']) ||  $_POST['name'] === ''){
        $ok = false;
    }
    if ($ok) {
        printf('User Name: %s
    <br>Password: %s
    <br>Gender: %s
    <br>Comment: %s,
    <br>T&amp;C:%s',
            $_POST['name'],
            $_POST['comment'],
            $_POST['password'], '', '', '');
    }

}
?>
<form method="post" action="">
    User Name : <input type="text" name="name"><br>
    Password : <input type="password" name="password"><br>
    Gender :
    <input type="radio" name="gender" value="f">Femail
    <input type="radio" name="gender" value="m">Male<br>
    Favourite Color:
    <select name="languages[]" multiple size="3">
        <option value="en">English</option>
        <option value="fr">French</option>
    </select><br>
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>