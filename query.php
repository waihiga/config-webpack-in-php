<!DOCTYPE html>
<html>
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
    </tr>
    <?php
    foreach ($query as $data) {
        echo "<tr>";
        echo "<td>" . $data['username'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>