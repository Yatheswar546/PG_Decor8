<?php
include("../php/modes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title> Contact || Webrup Designers </title>
    <!-- Boxicons CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/light.css">
    <link rel="stylesheet" href="../css/dark.css">
    <link rel = "icon" href ="../images/logo.png"  type = "image/x-icon">
  </head>
  <body class="light <?php echo $mode ?>">
    <!--
      ----------------
      ------NAV-------
      ----------------    
    -->
    <nav>
      <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="index.php"><h1><span>PG</span>  Decor8</h1></a></div>
        <div class="nav-links">
          <div class="sidebar-logo">
            <span class="logo-name">PG Decor8</span>
            <i class='bx bx-x' ></i>
          </div>
          <ul class="links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../index.php#why-us">Services</a></li>
            <li><a href="../port.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="contact.php">Enquire Now</a></li>
          </ul>
        </div>
        <div class="search-box">
          <i class='bx bxs-<?php echo $icon ?>'></i>
        </div>
      </div>
    </nav>
    <!--
      ----------------
      -----BANNER-----
      ----------------    
    -->
    <section class="heading" id="home">
      <div class="value">
        <h1>Contact</h1>
            <p><a href="../index.php">Home</a> /Contact</p>
        </div>
    </section>
  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-6">
          <div class="form h-100">
            <h3>Send us a message</h3>
            <form class="mb-5" id="contactForm">
                <div class="error"></div>
              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Name *</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone #">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Company</label>
                  <input type="text" class="form-control" name="company" id="company"  placeholder="Company  name">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-5">
                  <label for="message" class="col-form-label">Message *</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message" style="resize:none"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

           

          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-info h-100">
            <a href="https://www.google.com/maps/place/Webrup+Designers/@17.682889,83.202797,15z/data=!4m5!3m4!1s0x0:0xbf38815f936ec83a!8m2!3d17.6828946!4d83.2027751" target="_blank"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
   <!-- 
      ---------------
      ----Footer-----
      ---------------
    -->
    <section id="fot-con" class="mama">
      <div class="info">
        <a class="item"  href="https://www.google.com/maps/place/Webrup+Designers/@17.682889,83.202797,15z/data=!4m5!3m4!1s0x0:0xbf38815f936ec83a!8m2!3d17.6828946!4d83.2027751">
          <i class='bx bx-current-location'></i>
          <h3>Address</h3>
          <p>Gajuwaka,Viskhapatnam,<br> Andhra Pradesh,India - 520026</p>
        </a>
        <a  href="tel: 9390671273" class="item">
          <i class='bx bxs-phone' ></i>
          <h3>Phone Number</h3>
          <p>+91 9390671273</p>
        </a>
        <a href="mailto: swarup2635@gmail.com" class="item">
          <i class='bx bx-mail-send' ></i>
          <h3>Email</h3>
          <p>swarup2635@gmail.com</p>
        </a>
      </div>
    </section>
     <!-- 
      ---------------
      ----Footer-----
      ---------------
    -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <img src="../images/logo.png" alt="">
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h5>Olden Days physical weapons were required to conquer something.<br> Present days, a simple website is enough.</h5>
              <h6>-Webrup Designers "Create such websites with ease"</h6>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Website</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="main2.php">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="./about.php">About</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="./port.php">Portfolio</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="./contact.php">Enquire</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="./contact/contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Join us on various social networks</p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/swarup.mns.3/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/webrup_designers/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCBUYk0fafX-1K-vTjXrmtbw" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.linkedin.com/in/swarup2635"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>PG Decor8</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://webrupdesigners.com/">Innovative Skyline</a>
        </div>
      </div>
    </footer>
    <!-- 
      ---------------
      --MOVE TO TOP--
      ---------------
    -->
    <a href="#home" class="to-top">
      <i class='bx bxs-chevrons-up'></i>
    </a>
    
    <script src="./js/mode.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    

    <script src="js/contact.js"></script>

  </body>
</html>