
<?php
$mysqli = new mysqli("sql211.infinityfree.com", "if0_36649487", "8HvPkeqL4D", "if0_36649487_hotelplus");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>