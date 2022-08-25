<?php
$servername = "192.168.0.100";
// Enter your MySQL username below(default=root)
$username = "imlofixy_kromer";
// Enter your MySQL password below
$password = "Gibson0611.";
$dbname = "imlofixy_kromer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
