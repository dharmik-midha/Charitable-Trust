<?php
include_once("db.php");
if(isset($_POST['contact']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $sql="INSERT INTO feedback(name,email,subject,message)
        VALUES('$name','$email','$subject','$message')";
  mysqli_query($conn,$sql) or die(mysqli_error());
} 
?>
  <script type="text/javascript">
     alert("Successfully Submitted");
     window.location.href = "guest.php"; 
  </script> 



