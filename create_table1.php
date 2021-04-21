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
$sql = "CREATE TABLE feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
subject VARCHAR(50) NOT NULL,
message VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) 
{
    echo "database successfully created";
    header("location: create_table2.php");
}
else 
{
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>