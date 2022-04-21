<?php
include('C:\xampp\htdocs\CombiCourse\CombiCourse\config\dbconn.php');
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="../img/favicon.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Courses</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    -->
  <link rel="stylesheet" href="../css/linearicons.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />
  <link rel="stylesheet" href="../css/bootstrap.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />
  <link rel="stylesheet" href="../css/owl.carousel.css" />
  <link rel="stylesheet" href="../css/nice-select.css">
  <link rel="stylesheet" href="../css/hexagons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/footerstyle.css" />
  <link rel="stylesheet" href="../css/CourseStyle.css" />
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1_SzmXLvY3lxM60FYrQWV5hmd0Xjy7V0tmCzqUrov8WiCN63TICv5csLgw4qF2TpTwddWucTv6hfJ72gBVP5kALGObjuTw12boEdTDDuu1hvCD8d80MO0vNi1-a7nZCZw4_Xvw4zuYjWodFsSYEhLfFwC5nN0xV6RJg3hZx43xHYkubVZVU57BX_J_3YWG1CEdU10Tmk4MpC6LOxtgfNThtQ7hq2sMjyU3_QiU04Ftgt2ILV9VEJaR74eMQa6wTB3Stbw7XLtDl7Jq8Lxni3gO_rS3McVTbiM8qaYwKiC5n_pTZteTYApnz7bRP44k-z2lep9MGtNAD36f2d7DW1Gw" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kb2MtMTAtMzAtZG9jcy5nb29nbGV1c2VyY29udGVudC5jb20vZG9jcy9zZWN1cmVzYy9mOHNpanZ0MWMxdGFyNDdtNjNyMnRrNjMwbDBudmE0dC9ybnJrZWVqOTBidGF2YTUwbGl1ZnY0djMzOGptM3FiaS8xNjMzMTk0MjI1MDAwLzEzMzM0ODAwMjIwNTE3MTI3MzMxLzA3OTQ3ODE4NTEwMzMzNDQxNzg0LzFvMHRPN0I5NmJQbmNNR1pDTE5YTUhDcnp2UGJlNER6OT9lPWRvd25sb2FkJmF1dGh1c2VyPTA"/></head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="../img/Combicourse-removebg-preview.png" alt="" width=250/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li><a style="font-size: 15px; font-family: Roboto, sans-serif;" href="index.html">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" style="font-size: 15px; font-family: Roboto, sans-serif;" href="#" data-toggle="dropdown">
                Features
              </a>
              <div class="dropdown-menu">
              
                <a style="font-size: 15px; font-family: Roboto, sans-serif ; color:black;" href="digital_library.html">Digital Library</a>
            <a style="font-size: 15px; font-family: Roboto, sans-serif; color:black;" href="Recent.html">Recent Trends</a>
            <a style="font-size: 15px; font-family: Roboto, sans-serif; color:black;" href="Webinar.html">Webinars</a>
              </div>
            </li>
            
            <li><a style="font-size: 15px; font-family: Roboto, sans-serif;" href="contacts.html">Contacts</a></li>
            <!-- <li><a style="font-size: 15px;" href="\CombiCourse\CombiCourse\pages\admin_login_page.php">Admin</a></li> -->
            <li><a style="font-size: 15px; font-family: Roboto, sans-serif;" href="FAQ.html">FAQ</a></li>          
            <li><a style="font-size: 15px; font-family: Roboto, sans-serif;" href="courses.php">Courses</a></li>
            <li><a style="font-size: 15px; font-family: Roboto, sans-serif;" href="\CombiCourse\CombiCourse\pages\user_login_page.php"><i class="fas fa-sign-in-alt"></i> User</a></a></li>
        
          </ul>
        </div>
      </div>
    </nav>
    <!-- <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div> -->
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="banner-area">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-12 banner-right">
            <h1 class="text-white">
              Courses
            </h1>
            <br/>
            <div class="link-nav">
              <span class="box">
                <a href="index.html">Home </a>
                <i class="lnr lnr-arrow-right"></i>
                <a href="courses.html">Courses</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- ================ End banner Area ================= -->

  <br/>
  <section class="course" id="course">

    <center>
                        <label><b>Search Courses</b></label>       
                                <form method="POST" action="\CombiCourse\CombiCourse\courses.php" >
                                    <i class="fas fa-search"></i> 
                                    <input type="text" name="search" style="border:solid 1px; border-radius:5px ; text-align:center ; font-size:15px ; padding:2px " placeholder="Enter Course name">
                                </form>
                        </center> 

    <div class="wrapper" style="display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr; grid-row-gap:0 ; ">


    <?php
    $query = "SELECT * FROM products ORDER BY prod_name ASC";
    $result = mysqli_query($dbconn,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?> 

        <div class="box-container" style="margin:10px auto 0px auto ">

            <div class="box">
            <?php if($res['prod_pic1'] != ""): ?>
            <img src="../img/<?php echo $res['prod_pic1']; ?>">
            <?php else: ?>
            <img src="../img/default.png">
            <?php endif; ?>
                <div class="content">
                    <a href="\CombiCourse\CombiCourse\pages\Css-courselogin_page.php" class="title"><?php echo $res['prod_name'];?></a><br><br>
                   
                    <h4 class="price">INR <?php echo $res['prod_price']; ?></h4>
                    <div class="info">
                        <h3> <i class="fa fa-certificate"></i><br> Certificate </h3><br><br>
                        

            </div>
            <div class="content">
                        <h6><a class="btn" style="color:#fff; background: linear-gradient(
90deg, #7c32ff 0%, #c738d8 100%);;
    line-height: 40px;
    float: center;
    border-radius: 0px;
    padding: 0px 32px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;" title="Click for more details!" href="\CombiCourse\CombiCourse\pages\product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View Details</a></h6>
                         
                    </div>                 
                </div>              
            </div>
            </div>

            
            <?php }?> 

       

            


  </section>

  

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap" style="clear: both; position: relative;">
    <div class="main-content">
      <div style="text-align:center" class="left box"><br><br><br><br><br>
        <img src="../img/Combicourse-removebg-preview.png" alt="" width=350 />
          <div class="social"><br><br>
            <a style="text-align:center; padding:10px; font-size:20px" href="https://facebook.com"><span class="fab fa-facebook-f"></span></a>
            <a style="text-align:center; padding:10px; font-size:20px" href="https://twitter.com"><span class="fab fa-twitter"></span></a>
            <a style= "text-align:center; padding:10px; font-size:20px" href="https://instagram.com"><span class="fab fa-instagram"></span></a>
            <a style= "text-align:center; padding:10px; font-size:20px" href="https://youtube.com"><span class="fab fa-youtube"></span></a>
          </div>
      </div>

      <div class="right box">
<h3 style="text-decoration: none; font-size:19px; color:gray; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">QUICK LINKS</h3>
        <div class="content"><br>
          
          <p><a style="text-decoration: none; font-size:15px; color:whitesmoke" href="index.html">Home</a></p><br>
          <p><a style="text-decoration: none; font-size:15px ; color:whitesmoke"href="courses.html">Courses</a></p><br>
          <p><a style="text-decoration: none; font-size:15px ; color:whitesmoke"href="digital_library.html">Digital Library</a></p><br>
          <p><a style="text-decoration: none;  font-size:15px ; color:whitesmoke"href="">Recent Trends</a></p><br>
          <p><a style="text-decoration: none; font-size:15px; color:whitesmoke"href="">Profile</a></p><br>
          <p><a style="text-decoration: none; font-size:15px ; color:whitesmoke"href="contacts.html">Contacts</a></p><br>
                      
        </div>
      </div>

      <div class="center box">
        
            <h3 style="text-decoration: none; font-size:19px; color:gray; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">REACH US</h3>
        <div class="content"><br><br>
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span style="text-decoration: none; font-size:15px" class="text">Ramrao Adik Institution of Technology</span>
          </div><br>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span style="text-decoration: none; font-size:15px" class="text">+91-9323960543</span>
          </div><br>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span style="text-decoration: none; font-size:15px"  class="text">support@ccourse.com</span>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <center>
        <span class="credit">CombiCourse</a> | </span>
        <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
      </center>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="../js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="../js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/parallax.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/hexagons.min.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/waypoints.min.js"></script>
  <script src="../js/jquery.nice-select.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>