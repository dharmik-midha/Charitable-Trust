<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "charity";

// Create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE donation (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
mobile BIGINT(20) NOT NULL,
donate VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) 
{
    echo "database successfully created";
    header("location: start.php");
}
else 
{
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>