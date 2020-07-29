<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<meta charset="UTF-8">

<title>Civic - CV Resume</title>
  <meta charset="UTF-8">
  <meta name="description" content="Civic - CV Resume">
  <meta name="keywords" content="resume, civic, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->   
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/flaticon.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/style.css"/>
<style>


body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.button {
      background-color: #4294D1;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      margin: 2px 1px;
      cursor: pointer;}



</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64" style="color:white;"><b>MOMIN<br>SERVICES</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
     
   
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="#profile" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Buisness Profile</a>
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a>
     <a href="#admin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Admin</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcazse">
    <h1 class="w3-jumbo"><b>LED BULBS</b></h1>
    <h1 class="w3-xxxlarge w3-text-red" ><b>Our Products.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">


  </div>
  <form action="viewdetails" method="post">
  <?php

  include "connection.php";

  $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
  mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
  $image_query = mysqli_query($result,"select img_name,img_path,proprice from alldata");
  while($rows = mysqli_fetch_array($image_query))
  {
    if($rows['img_path']!='sd')
    {
      $img_name = $rows['img_name'];
      $img_src = $rows['img_path'];
      $cost = $rows['proprice'];


  ?>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-paddingx">
    <div class="w3-half" style="border-radius: 15px;">
      <p style="margin-left:160px; margin-bottom:0px;color:#40424a;"><b><?php echo $img_name ?></b></p>
      <img src="<?php echo $img_src; ?>" style="width:100%;border-radius: 15px; margin-top:0px; padding-right:20px;padding-top:0px; padding-bottom:05px; width="80" height="250" border-radius:80px;"  onclick="onClick(this)" alt="Concrete meets bricks">
      <p style="margin-left:150px; color:#40424a; padding-bottom:0px; margin-bottom:0px;"><b><?php echo "Rs ". $cost ?></b></p>
       <button style="margin-left:130px; margin-top:0px; border-radius: 15px; margin-bottom:25px" class='button' name='details' value='<?php echo $img_name; ?>' >View Details</button>

    </div>

    
  </div>
<?php }} ?>
</form>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
   
  </div>
  
  
  <div class="w3-container" style="margin-top:80px" id="profile">
<div id="preloder">
    <div class="loader"></div>
  </div>

    <section class="hero-section spad">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 offset-xl-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="hero-text">
                  <h4>YAMIN MOMIN</h4>
                  
                </div>
                <div class="hero-info">
                  <h2>General Info</h2>
                  <ul>
                   <li><span>Address</span>Palasdeo ,pune-solapur highway</li>
                    <li><span>Pin-code</span>413132</li>
                    <li><span>Experience</span>2 years</li>
                    <li><span>Education</span>Electrical Engg(Diploma,BE(Pursuing))</li>
                    <li><span>Mobile </span>9860495508 ,9767314834</li>
                    <li><span>E-mail</span>yaminmomin100@gmail.com</li>
                    <li><span>Other services</span>Electrical contracts(Wiring and maintainance)</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 text-sm-center">
                <figure class="hero-image">
                  <img src="yamin.jpeg" alt="4">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero section end -->




  <!-- Packages / Pricing Tables -->
  <div class="w3-container" id="packagejjhjs" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Some text our prices. Lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">10 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">20% furniture discount</li>
        <li class="w3-padding-16">Good deals</li>
        <li class="w3-padding-16">
          <h2>$ 199</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">50 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">50% furniture discount</li>
        <li class="w3-padding-16">GREAT deals</li>
        <li class="w3-padding-16">
          <h2>$ 249</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Do you like our product , any queries drop message :) We love meeting new people!</p>
    <form action="sendemail.php" method="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <div class="w3-section">
        <label>Mobile Number</label>
        <input class="w3-input w3-border" type="text" name="numbercccccccccdecdcdcddd    u7" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>

  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Designers.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    
    <p>Web developer with 3+ Years of experience in designing and devloping user interfaces, debugging ,Testing,Proven ability in optimizing web functionalities that improves data retrieval and workflow efficiencies.
    </p>
    <p>Skills: Certified java developer, PHP , PYTHON , DJANGO ,JSP , ANDROID .</p>
     <p>Call on :8806281949</p>
          <p> Email :yasirshaikhkhan4633@gmail.com</p>
    <p><b>Our designers are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col m4 w3-margin-bottom" style="margin-left:160px;">
    <div class="w3-light-grey">
        <img src="yasir.jpg" alt="Yasir" style="width:100%;">
        
        <div class="w3-container">
          <h3>Yasir Shaikh</h3>
          <p class="w3-opacity">Web Developer</p>


        </div>
      </div>
    </div>
   
  </div>



  <!---------admin-------->
  <div class="w3-container" id="admin" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Sign In</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <form action="authadmin.php" method="POST">
    
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>password</label>
        <input class="w3-input w3-border" type="text" name="password" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">LOGIN</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">Yasir Technical</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
