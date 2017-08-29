<?php
$servername = 'localhost';
$username = 'korea0915';
$password = 'aa0405';
$userdb = 'korea0915';

$conn = new mysqli($servername, $username, $password, $userdb);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>