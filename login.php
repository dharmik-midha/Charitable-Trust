<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        echo " <script type='text/javascript'>
                alert('Login First');
                window.location.href ='start.php'; 
            </script>";
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo " <script type='text/javascript'>
                alert('Session expired,Please Login Again...');
                window.location.href ='start.php'; 
            </script>";}
        else { //Starting this else one [else1]
?>




<!--html-->
<!DOCTYPE html>
<html>
<head>
	<title>Member Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=" r-teal">
	<!--taskbar-->
	<header style="border-top: 5px" class="r-white r-card r-top">
		<img src="images/logobhumi.png" class="r-bar-item " width="150px" height="75px">
		<a href="logout.php" class="r-bar-item r-button r-hover-teal r-right r-large r-margin-right" style="margin-top: 20px"><b>Logout</b></a>
		<a href="member.php" class="r-bar-item r-button r-hover-teal r-right r-large r-margin-right" style="margin-top: 20px"><b>Members</b></a>
		<a href="donation.php" class="r-bar-item r-button r-hover-teal r-right r-large r-margin-right" style="margin-top: 20px"><b>Donators</b></a>	
    <p class="r-bar-item r-button r-hover-teal  r-large  r-margin-left" style="margin-top: 20px"><b> Welcome,  </B><?php include_once("db.php"); 
    $check=$_SESSION['email'];
    $query = "SELECT * from volunteer where email='$check'";
  $result = mysqli_query($conn,$query);
  if ($row=mysqli_fetch_assoc($result))
  {   $nme=$row['name'];
      echo "$nme";
  }

      ?>
	</header >


	<div style="padding: 50px 16px"></div>
	
	<!-- cards-->
	

	<div class="r-col m3 ">
	<div class="r-container  r-card-4 r-white" >
		<div class="r-center r-black">
			<h3> <b> VOLUNTEER </b></h3></div>
			<p><img src="images/l1.jpg" class="r-image "  style="  margin-left: 50px "width="70%" ></p>	
	<i><b><p>Join us in our mission in transforming India through volunteering. 
</p><p style="margin-bottom: 36px">
Bhumi offers a diverse range of volunteering opportunities in causes like education, environment, animal welfare, disability etc.</p></b></i>
	</div>
   </div>
	

	<div class="r-col m3">
	<div class="r-container  r-card-4 r-white " style="margin-left: 1%" >
		<div class="r-center r-black " >
			<h3> <b> CAREERS </b></h3></div>
			<p style="margin-bottom: 80px"><img src="images/l2.png" class="r-image "  style="  margin-left: 50px ; width : 70% "   ></p>	
	<i><b><p>Careers at Bhumi are suitable for dynamic people looking to grow as leaders. Remuneration is on par with the best in the sector. <p >Prior volunteering experience with Bhumi preferred, but careers are open to all</p></p></b></i>
	</div>
    </div>


	<div class="r-col m3">
	<div class="r-container  r-card-4 r-white" style="margin-left: 1%">
		<div class="r-center r-black">
			<h3> <b> INTERN </b></h3></div>
			<p><img src="images/l3.jpg" class="r-image "  style="  margin-left: 50px "width="70%" ></p>	
	<i><b><p style="margin-bottom: 52px">We offer internships throughout the year. Interns are not provided any remuneration, food or accommodation, but will be equipped with professional skills and provided with a certificate.</p></b></i>
	</div>
	</div>

	<div class="r-col m3">
	<div class="r-container  r-card-4 r-white" style="margin-left: 1% ">
		<div class="r-center r-black">
			<h3> <b> AMBASSADOR </b></h3></div>
			<p><img src="images/l4.jpg" class="r-image "  style="  margin-left: 50px "width="70%" ></p>	
	<i><b><p style="margin-bottom: 52px">present Bhumi in your campus or work place as a Campus Catalyst and promote the cause of volunteerism. You would require 2 to 4 hours of time every week and good presentation skills.</p></b></i>
	</div>
    </div>
    <div style="padding: 215px 20px"></div>

<!-- Skills Section -->
<div class="r-card r-center "  style="width: 80% ;margin-left:10%">
<div class="r-container r-black r-padding-64">
  <div class="r-row-padding">
    <div class="r-col m6 r-large">
      <h3>Our Motive.</h3>
      <p>"Even if I knew that tomorrow the world would go to pieces, I would still plant my apple tree."<br>

	<i>	― Martin Luther </i> 

	<p>"Trees exhale for us so that we can inhale them to stay alive. Can we ever forget that? Let us love trees with every breath we take until we perish." <br> 

<i>― Munia Khan </i> 

<p>"Between every two pines is a doorway to a new world." <br>

<i>― John Muir</i>


<p>"One touch of nature makes the whole world kin." <br>

<i> ― William Shakespeare </i> 
</p>
    </div>
    <div class="r-col m6 r-center">
    	<img src="images/tree.jpg" height="400" width="400">
    </div>
  </div>
</div>
</div>

<div style="padding: 5px 5px"></div>
    <!-- Promo Section "Statistics" -->
<div class="r-container r-row r-center r-light-grey r-padding-64">
  <div class="r-quarter">
    <span class="r-xxlarge">550+</span>
    <br>Students
  </div>
  <div class="r-quarter">
    <span class="r-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="r-quarter">
    <span class="r-xxlarge">89+</span>
    <br>Happy Volunteers
  </div>
  <div class="r-quarter">
    <span class="r-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!--contact-->
<div style="padding: 5px 5px"></div>
	<div style="width: 80% ;margin-left:10%"  >
     <div class="r-container r-white r-black" style="padding:40px 16px  ;" >
  <h3 class="r-center r-xlarge "><b class="r-black">Donation</b></h3>
  <p class="r-center r-large " ><i class="r-black">Donation for Charitable Trust </i></p>
  <br>
  <div class="r-col "  style="margin-top:48px">
    <p ><b class="r-large  m6 r-center">LOCATION:</b > SRI GANGANAGAR,RAJASTHAN (335001)</p>
    <p ><b class="r-large r-center ">PHONE:</b > +91 154-2464900</p>
    <p ><b class="r-large r-center ">EMAIL:</b > charitabletrust@gmail.com</p>
    <br>
    <form action="check_donate.php" method="post" enctype="multipart/form-data">
      <p><input class="r-input r-border" type="text" placeholder="Name" required name="name" style="width: 400px" ></p>
      <p><input class="r-input r-border" type="text" placeholder="Email" required name="email" style="width: 400px"></p>
      <p><input class="r-input r-border" type="text" placeholder="Mobile" required name="mobile" style="width: 400px"></p>
      <p><input class="r-input r-border" type="text" placeholder="Donation" required name="donate" style="width: 400px " ></p>
      <p>
        <button class="r-button r-grey" type="submit" name="donation" value="donation">
          Donate
        </button>
      </p>
      </form>
     </div>
    </div>
</div>


    <footer class="r-container r-black r-padding-32 r-margin-top r-center">
  <a href="start.php"><button class="r-button r-light-grey r-padding-large r-margin-bottom">Log Out</button></a>
  <p>Made by <a href="dharmik_contact.php" target="_blank">Dharmik Midha</a> & <a href="rahul_contact.php" target="_blank">Rahul Baghla</a></p>
</footer>
</body>
</html>


<?php
        }
    }
?>