<?php
include("./php/modes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Boxicons CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/light.css">
    <link rel="stylesheet" href="./css/dark.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/protfolio.css">
    <link rel = "icon" href ="./images/logo1.png"  type = "image/x-icon">
    <style>
      
    </style>
  </head>
  <body class="light <?php echo $mode ?>">
    <!--
      ----------------
      ------NAV-------
      ----------------    
    -->
    <?php include("./php/header.php") ?>
    <!--
      ----------------
      -----BANNER-----
      ----------------    
    -->
    <section class="heading" id="home">
      <div class="value">
        <h1>Portfolio</h1>
            <p><a href="main2.php">Home</a> /Our Portfolio</p>
        </div>
    </section>


<div class="gallery">

    <ul class="controls">
        <li class="buttons active" data-filter="all">all</li>
        <li class="buttons" data-filter="lr">Living Room</li>
        <li class="buttons" data-filter="br">Bed Room</li>
        <li class="buttons" data-filter="sp">Swimming Pool</li>
        <li class="buttons" data-filter="ki">Kitchen</li>
    </ul>

    <div class="image-container">
        <a href="./images/p1.jpg" class="image lr">
            <img src="./images/p1.jpg" alt="">
        </a>
        <a href="./images/p2.jpg" class="image ki">
            <img src="./images/p2.jpg" alt="">
        </a>
        <a href="./images/p3.jpg" class="image lr">
            <img src="./images/p3.jpg" alt="">
        </a>
        <a href="./images/p4.webp" class="image lr">
            <img src="./images/p4.webp" alt="">
        </a>
        <a href="./images/p5.jpg" class="image all">
            <img src="./images/p5.jpg" alt="">
        </a>
        <a href="./images/p6.jpg" class="image ki">
            <img src="./images/p6.jpg" alt="">
        </a>
        <a href="./images/p6.jpg" class="image ki">
            <img src="./images/p6.jpg" alt="">
        </a>
        <a href="./images/p8.jpg" class="image ki">
            <img src="./images/p8.jpg" alt="">
        </a>
        <a href="./images/p9.jpeg" class="image sp">
            <img src="./images/p9.jpeg" alt="">
        </a>
        <a href="./images/tab5.jpg" class="image br">
            <img src="./images/tab5.jpg" alt="">
        </a>
    </div>

</div>


<!-- jquery cdn link  -->

    
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
    <!-- 
      ---------------
      --MOVE TO TOP--
      ---------------
    -->
    <a href="#home" class="to-top">
      <i class='bx bxs-chevrons-up'></i>
    </a>
    <script src="./js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- magnific popup js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>

$(document).ready(function(){

    $('.buttons').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        var filter = $(this).attr('data-filter')

        if(filter == 'all'){
            $('.image').show(400);
        }else{
            $('.image').not('.'+filter).hide(200);
            $('.image').filter('.'+filter).show(400);
        }

    });

    $('.gallery').magnificPopup({

        delegate:'a',
        type:'image',
        gallery:{
            enabled:true
        }

    });

});

</script>
  </body>
</html>