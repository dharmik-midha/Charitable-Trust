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

$sql = "INSERT INTO volunteer (name, email, password, dob, gender, mobile, address, image)
VALUES ('Rahul Baghla', 'rahul@gmail.com', 'rahul123', '1999/07/07', 'M', '8094178580', '10 Bhoop Colony', 'rahul.jpg');";
$sql .= "INSERT INTO volunteer (name, email, password, dob, gender, mobile, address, image)
VALUES ('Dharmik Midha', 'dharmik@gmail.com', 'dharmik123', '1999/10/16', 'M', '9413177011', '88 Laxmi Nagar', 'dharmik.jpg');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
    header("location:create_table1.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>