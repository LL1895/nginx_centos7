<?php
// mysqli
$mysqli = new mysqli("localhost", "root", "46MU^Fm!OWkzd$#5", "test");
$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
?>

