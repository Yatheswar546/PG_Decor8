<?php
include("./php/modes.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> HOME || PG Decor8 </title>
    <!-- Boxicons CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/light.css">
    <link rel="stylesheet" href="./css/dark.css">
    <link rel = "icon" href ="./images/logo.png"  type = "image/x-icon">
  </head>
  <body class="light <?php echo $mode; ?>">
    <!--
      ----------------
      ------NAV-------
      ----------------    
    -->
    <?php include("./php/header.php") ?>
    <!--
      ----------------
      -----HOME-------
      ----------------    
    -->
    <div id="home">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,.6)),url(./images/1.jpg);"></div>
              <div class="carousel-caption">
                  <h2 class="animated zoomIn" style="animation-delay: 0s"><span>Home</span> - Renovations</h2>
                  <h3 class="animated fadeInLeft" style="animation-delay: 1s">The home should be the treasure chest of living</h3>
                  <p class="animated zoomIn" style="animation-delay: 2s"><a href="./contact/contact.php">Contact us</a></p>
              </div>
          </div>
          <div class="item">
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,.6)),url(./images/2.jpg);"></div>
              <div class="carousel-caption">
                <h2 class="animated zoomIn" style="animation-delay: 0s"><span>Home</span> - Renovations</h2>
                <h3 class="animated fadeInLeft" style="animation-delay: 1s"> Like an interior that defies labeling. I don't really want someone to walk into a room and know that I did it.</h3>
                <p class="animated zoomIn" style="animation-delay: 2s"><a href="about.php">Get the unique interior</a></p>
              </div>
          </div>
          <div class="item"> 
            <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,.4)),url(./images/5.jpg);"></div>
              <div class="carousel-caption">
                <h2 class="animated zoomIn" style="animation-delay: 0s"><span>Home</span> - Renovations</h2>
                <h3 class="animated fadeInLeft" style="animation-delay: 1s">The best rooms have something to say about the people who live in them.</h3>
                <p class="animated zoomIn" style="animation-delay: 2s"><a href="courses.php">Know more</a></p>
              </div>
          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--
      ---------------
      -----About----
      --------------
    -->
    <section id="about">
      <div class="container">
        <div class="grid">
            <div class="left">
                <a href="about.php"><img src="./images/1.jpg" alt=""></a>
            </div>
            <div class="right">
                <h4>PG Decor8</h4>
                <h1>About Us</h1>
                <p>Home interiors are not just about technology, nor about emotions. It is a mix of two along with an understanding of the latest designs and aesthetics. Even though we are considered the best interior designers we like to share the creative knowledge that we have acquired over the years.  
                <br><br>
                <a href="about.php" class="btn">Know More</a>
            </div>
        </div>
      </div>
    </section>
    
    <!--
      ---------------
      ---Activites---
      ---------------
    -->
    <section class="profits one">
      <div class = "image">
          <!-- image here -->
      </div>
      <div class = "content">
        <h2>Responsive Web Design</h2>
        
        <p>Our Web Designing teams work in partnership with clients and end-users for better understanding. We explore and then translate ideas into stunning visuals and responsive designs, that are perfectly suited to your users requirements across desktop and mobile platforms.</p>               
      </div>
    </section>
    <section class="profits two">
      <div class = "content">
        <h2>Highly Accelerated</h2>
        
        <p>Our Web Development teams work in partnership with Designers. We explore and then translate ideas into accelerated designs, that are perfectly performed at any network.</p>               
      </div>
      <div class = "image">
          <!-- image here -->
      </div>
    </section>
    <hr>
    <section class="profits three">
      <div class = "image">
          <!-- image here -->
      </div>
      <div class = "content">
        <h2>Affordable Price</h2>
        
        <p>Pricing is the exchange rate you put on all the tangible and intangible aspects of your business. We do not compromise on the quality and our customers will not negotiate on the price.We upgrade your business at affordable prices with a perfect quality.</p>               
      </div>
    </section>
    <section class="profits four">
      <div class = "content">
        <h2>D<sup>2</sup></h2>
        
        <p>The role of the designer is that of a good, thoughtful host anticipating the needs of his guests.Design is not just what it looks like and feels like. Design is how it works.We do create a Distinctive Design.</p>               
      </div>
      <div class = "image">
          <!-- image here -->
      </div>
    </section>
    <!--
         -----------
        ---WHY US---
        -----------
    -->
    <section id="why-us">
      <h1 style="text-align: center;font-size:50px;">Services</h1>
      <div class="us">
        <div class="container3">
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/1.jpg);background-size:cover;">
            <h2>01</h2>
            <h3>Agreed Project Scope</h3>
            <p>Providing detailed quotations including full project cost breakdowns and working towards defined timescales.</p>
          </div>
  
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/1.jpg);background-size:cover;">
            <h2>02</h2>
            <h3>Tailored Services</h3>
            <p>We work as a team  together to develop websites that are not only visually compelling, but have the functionality and advanced programming to increase revenues.  </p>
          </div>
  
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/2.jpg);background-size:cover;">
            <h2>03</h2>
            <h3>Strong Partnerships</h3>
            <p>We believe in forging long-term partnerships with our clients that continue to grow far beyond go-live. Working with you, we challenge conventional thinking to achieve better outcomes.</p>
          </div>
  
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/3.jpg);background-size:cover;">
            <h2>04</h2>
            <h3>Do. Review. Improve</h3>
            <p>We close every project with self-reflection, identifying what worked, areas of improvement and new collaborative processes that help us increase to the efficiency and quality of our work.</p>
          </div>
  
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/4.jpg);background-size:cover;">
            <h2>05</h2>
            <h3>Come Fly with Us</h3>
            <p>Every modern business needs a high level expert to lead its digital marketing efforts. That’s why we create customized, performance-driven solutions around your unique business, helping you to launch, scale, and invigorate your brand.</p>
          </div>
  
          <div class="box" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,3)),url(./images/5.jpg);background-size:cover;">
            <h2>06</h2>
            <h3>We add on hand in your Growth</h3>
            <p>We craft the messages your customers see and your potential customers will need to build trust and drive new business your way. </p>
          </div>
        </div>
      </div>
    </section>
    <!-- 
      ----------------
      --Testimonials--
      ----------------
     -->
    <!-- 
    ---------------
    ----Footer-----
    ---------------
    -->
    <section id="fot-con">
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
              <img src="./images/logo.png" alt="">
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
    <!-- End Footer -->
    <!--
      ---------------
      --MOVE TO TOP--
      ---------------
    -->
    <a href="#home" class="to-top">
      <i class='bx bxs-chevrons-up'></i>
    </a>
    <script src="./js/main.js"></script>
    <script src="./js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>