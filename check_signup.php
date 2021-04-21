<?php
include_once("db.php");
if(isset($_POST['signup']))
{
  if($_POST['email']==$_POST['cemail'])
  {
    if($_POST['password']==$_POST['cpassword'])
      {
        if(move_uploaded_file($_FILES['image']['tmp_name'],"images/volunteer/".$_FILES['image']['name']))
          {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $dob=$_POST['dob'];
            $gender=$_POST['gender'];
            $mobile=$_POST['mobile'];
            $address=$_POST['address'];
            $image=$_FILES['image']['name'];            
            
            $sql="INSERT INTO volunteer(name,email,password,dob,gender,mobile,address,image)
            VALUES('$name','$email','$password','$dob','$gender','$mobile','$address','$image')";
            mysqli_query($conn,$sql) or die (mysqli_error());
            header("location:start.php");
          }
          else
          {
            ?>
            <script type="text/javascript">
                alert("Image Error");
                window.location.href = "start.php"; 
            </script>
            <?php
            echo $_FILES['image']['error']."error";
          }
      }
      else
      {
        ?>
        <script type="text/javascript">
                alert("Password Do Not Match");
                window.location.href = "start.php"; 
        </script>
        <?php
      }
  }   
  else
  {
    ?>
    <script type="text/javascript">
          alert("Email Do Not Match");
          window.location.href = "start.php"; 
    </script>
    <?php
  }
}
?>
