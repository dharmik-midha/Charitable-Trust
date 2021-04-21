<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>COLLEGE PROJECT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(images/NGO.jpg); background-size: 100% ">
<!-- Details shows on the page -->
<div class="r-container">
    <!-- Heading in the Center of the Page -->
	<div class="r-display-topmiddle r-jumbo">
		<p class="r-hover-text-black r-text-white r-serif">Charitable Trust</p>
	</div>
	<!-- Login and Signup Button in the top left of the page --> 
	<div class="r-display-topleft r-container r-xlarge">
		<p><button onclick="document.getElementById('member').style.display='block'" class="r-button r-black r-hover-red">Member</button></p>
		<p><a href="guest.php"><button class="r-button r-black r-hover-red">Guest</button></a></p>
	</div>
	<!-- Details in the bottom right of the page -->
  <div class=" r-display-right r-container r-text-white ">
  <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
    	<p class="r-xlarge r-text-orange"><b>Seth GL Bihani SD (PG) College</b></p>
    	<p class="r-large"><b>Sriganganagar, Rajasthan</b></p>
    	<p ><b class="r-text-light-green">Made By </b><a href="rahul_contact.php" target="_blank" class="r-text-light-green"><b>Rahul Baghla<b></a> & 
                        <a href="dharmik_contact.php" target="_blank" class="r-text-light-green"><b>Dharmik Midha</b></a></p>
  </marquee>                      
  </div> 
</div>	

<!-- Login Button -->
<div id="member" class="r-modal">
	<!-- To make the login page as a card -->
	<div class="r-modal-content r-card-4 r-animate-zoom" style="max-width: 450px">
		<div class="r-center"><br>
        <span onclick="document.getElementById('member').style.display='none'" class="r-button r-xlarge r-transparent r-display-topright">x</span>
        <h1>Member Login</h1>
        </div>


        <form class="r-container" action="check_login.php" method="post">
        	<div class="r-section">

        		<label><b>Email</b></label>
        		<input class="r-input r-border r-margin-bottom" type="text" name="email" placeholder="Enter your email" required>

        		<label><b>Password</b></label>
        		<input class="r-input r-border r-margin-bottom" type="Password" name="password" placeholder="Enter your password" required>

        		<button class="r-button r-block r-green r-hover-red r-section r-padding" type="submit" name="login" value="login">Login</button>

          	<input class="r-check r-margin-top" type="checkbox" checked="checked"> Remember me

        	</div>
        </form>

        <div class="r-container r-border-top r-padding-16 r-light-grey">
        	<button onclick="document.getElementById('member').style.display='none'" type="button" class="r-button r-black">Cancel</button>
          <button onclick="document.getElementById('signup').style.display='block'" class="r-button r-black" style="margin-left: 242px">Signup</button>
        </div>
	</div>
</div>


<!-- SIGNUP FORM -->
<div id="signup" class="r-modal">
    <div class="r-modal-content r-card-4 r-animate-zoom" style="max-width: 550px">
      <div class="r-center"><br>
          <span onclick="document.getElementById('signup').style.display='none'" class="r-button r-display-topright r-xlarge">x</span>
          <h1>Signup</h1>
      </div>

        <form class="r-container" action="check_signup.php" method="post" enctype="multipart/form-data">
          <div class="r-section">
              <label><b>Full Name</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter your name" name="name" required>

              <label><b>Email</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter your email" name="email" required>

              <label><b>Confirm Email</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Confirm your email" name="cemail" required>

              <label><b>Password</b></label>
              <input class="r-input r-border r-margin-bottom" type="password" placeholder="Enter your password" name="password" required>

              <label><b>Confirm Password</b></label>
              <input class="r-input r-border r-margin-bottom" type="password" placeholder="Confirm your password" name="cpassword" required>
              
              <label><b>Date Of Birth</b></label>
              <input class="r-input r-border r-margin-bottom" type="date" name="dob"
              required>

              <label><b>Gender</b></label>
              <select name="gender" class="r-input r-border r-margin-bottom">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

              <label><b>Mobile No.</b></label>
              <input class="r-input r-border r-margin-bottom" type="Mobile" placeholder="Enter your Mobile Number" name="mobile" required>

              <label><b>Address</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter your address" name="address" required>

              <label>Image</label>
              <input  class="r-input r-border r-margin-bottom" type="file" name="image" required>

              <button class="r-button r-block r-green r-hover-red r-section r-padding" type="submit" name="signup" value="signup">Signup</button>
          </div>
        </form>
    </div>
</div>
  
</body>
</html>
