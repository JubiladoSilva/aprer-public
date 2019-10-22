<?php
/*$servername = "localhost";
$username = "id11261751_root";
$password = "123456";
$dbname = "id11261751_aprer";*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aprer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";