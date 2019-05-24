<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<body>
<?php

include("connect.php");

$sql = "SELECT * FROM employees";

$query = mysqli_query($connection, $sql);


?>
<h1>PHP</h1>
<table>
    <tr>
        <th>Username</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($query as $data) {
        echo "<tr>";
        echo "<td>" . $data['username'] . "</td>";
        echo "<td>";
//        echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
        echo "<a href='edit.php?id=". $data['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
//        echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>