<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


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


table {

  border-collapse: collapse;

  width: 100%;

}
th, td {

  text-align: left;

  padding: 8px;

}

tr:nth-child(even){background-color: #f2f2f2}
th {

  background-color: #f44336;

  color: white;

}




* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px !important;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 30px;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.h4{

  text-align: center;
  margin-top: 35px;
  margin-bottom: 30px;
  color: #f44336;
}





    .main{height: 100%; display: flex; justify-content: center;}
    .main .image-box{width:300px; margin-top: 30px; }
    .main h3{text-align: center; color:#f44336; margin-bottom: 20px;}
    .main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
    .main .file_input{margin-top: 10px; margin-bottom: 10px;}
    .main .btn{width: 50%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7; margin-top: 20px;}
    .main .msg{color: red; text-align: center;}

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64 "><b style="color:white">Admin<br>Task</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#profile" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profile</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sell details</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Make Entries</a> 
    
    
     <a href="#admin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Upload new products</a>
      <a href="#img" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Upload Image</a>

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
  <div class="w3-container" style="margin-top:80px" id="home">


    <h1 class="w3-jumbo"><b>Welcome</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Yamin.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="images/led1.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      
      <!---<img src="images/led1.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">---------->
    </div>

    <div class="w3-half">
      <img src="images/led1.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      
      <!----<img src="images/led1.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">-------->
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

<!------------- profile -------------------------->


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
									<h2>Info</h2>
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




 

  
  
<!---entries-------------------->

  <div class="w3-container" id="designers" style="margin-top:75px">

  <h1 class="w3-xxxlarge w3-text-red"><b>Sold products entry</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

    <form action="makeentry.php" method="POST">
    
      <div class="w3-section">
        <label>Product Type</label>
        <input class="w3-input w3-border" type="text" name="protype" required>
      </div>
      <div class="w3-section">
        <label>Quantity sold</label>
        <input class="w3-input w3-border" type="number" name="proquantity" required>
      </div>
      <div class="w3-section">
        <label>Customer Name</label>
        <input class="w3-input w3-border" type="text" name="procname" required>
      </div>
      <div class="w3-section">
        <label>Total Price</label>
        <input class="w3-input w3-border" type="number" name="proprice" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">MAKE ENTRY</button>
    </form>  
</div>








  <!-- Contact -->
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
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
    </form>  
  </div>



  <div class="w3-container" id="services" style="margin-top:75px">
 <br>
        <h2 >Your Sold data</h2>
        <br><br><br>


            <?php  
            $conn = mysqli_connect("localhost","root","Yasir@4633","entry");

            if($conn)
            {
               
                $sql = "select * from makeentry";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0)
                {?>
                      <table>

                          <tr>

                              <th>Product Name</th>

                                <th>Total price</th>
                              <th>Quantity sold</th>

                              <th>Customer Name</th>
                               
                              

                           </tr>  
                        
                      <?php while($row = mysqli_fetch_assoc($result))
                      {?>
                      
                      <tr>
                          <td><?php echo $row["protype"] ?></td>
                          <td><?php echo $row["proprice"] ?></td>
                          <td><?php echo $row["proquantity"] ?></td>
                          <td><?php echo $row["procname"] ?></td>
                      </tr>

                      

                     <?php }
                }
            }
           


            ?></table>

 

</div>





  <!---------admin-------->
  <div class="w3-container" id="admin" style="margin-top:75px">
   <div class="h4" >
<h2>Upload new product</h2></div>
<div class="container">
  <form action="storeProductDetails.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="proname" name="proname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Product Price</label>
    </div>
    <div class="col-75">
      <input type="text" id="proprice" name="proprice" placeholder="Your last name..">
    </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="subject">Description</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Power Watts</label>
    </div>
    <div class="col-75">
      <input type="text" id="subject" name="watts" placeholder="Enter Watts">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Cool-Daylight</label>
    </div>
    <div class="col-75">
      <input type="text" id="subject" name="cool" placeholder="Enter cool daylight" ></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" style="background-color:#f44336;">
  </div>
  </form>
</div>




<?php
  
    include('upload-code.php'); // Include upload code Script page.
    
  ?>
 <div class="w3-container" id="img" style="margin-top:75px">
     <div class="container main" >
    <div class="image-box" >
      <h3 >Image Upload</h3>
      <form method="POST" name="upfrm" action="" enctype="multipart/form-data">
        <div>
          <input type="text" placeholder="Enter image name" name="img-name" class="tb" /><br>
          <input type="file" name="fileImg" class="file_input" /><br>
          <input type="submit" value="Upload" name="btn_upload" class="btn" style="background-color:#f44336;"/>
        </div>
      </form>
      <div class="msg" style="margin-top:50px;">
        <strong>
    <?php if(isset($error)){echo $error;}?>
  </strong>

      </div>
    </div>
  </div>




<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">Yasir Shaikh</a></p></div>

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



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
