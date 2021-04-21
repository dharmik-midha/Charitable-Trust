<?php
session_start();
include_once("db.php");
if(isset($_POST['donation']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $donate=$_POST['donate'];

  $sql="INSERT INTO donation(name,email,mobile,donate)
        VALUES('$name','$email','$mobile','$donate')";
  mysqli_query($conn,$sql) or die(mysqli_error());
} 
?>
  <script type="text/javascript">
     alert("Successfully Submitted");
     window.location.href = "login.php"; 
  </script> 



