<?php
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "webproject23";
$dbName = "drawing";

$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    return $conn;
}
?>