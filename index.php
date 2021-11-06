<!-- PHP Mailer -->
<?php include 'sendemail.php'; ?>

<!--alert messages start-->
<?php echo $alert; ?>
<!--alert messages end-->

<!-- Head -->
<?php include 'head.php'; ?>

  <!-- Page Title -->
  <title>Badminton Southland | Home</title>
</head>

<body>
<!-- header -->
<?php include 'header.php'; ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Welcome to <strong>Badminton Southland</strong></h3>
      <a href="#contact" class="btn-get-started scrollto">Get in Touch</a>
    </div>
  </section><!-- End Hero -->  
  <main>

    <!-- ======= Facility Section ======= -->
    <section id ="facility" class="">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facility</h2>
          <h3>Our Facility Is <span>First Class</span></h3>
        </div>
  
        <div class="row">
          <div class="col-lg-7">
            <p>Badminton Southland is the proud owner of a 10 court stadium situated at Surrey Park next to Stadium Southland.  This is a purpose built badminton hall with a an excellent sprung wooden floor.<br><br>
              
              Players can get a subscription through Pay2play<br>
              
              Large groups such as schools can contact the office on <span>03 217 9460</span> to discuss bulk bookings.<br><br>
              
              NON-BADMINTON BOOKINGS
              Some other groups hire our facility, such as the Great Little Train Show over Labour Weekend and we take bookings from other sports/fitness groups who require space.<br><br>
              
              We currently have fragile unprotected lights which rules out ball sports being able to use our facility.</p><br>
              <div class="btn-wrap" style="align-items: flex-start;">
                <a href="#contact" class="btn-buy">Get In Touch</a>
              </div>
          </div>
          <div class="col-lg-5 d-flex align-items-stretch">
            <img src="assets/img/calendar/john.JPG" class="img">
          </div>
    </section><!-- End Facility Section -->

<!--Pricing Section-->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Our Membership <span>Prices</span></h3>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Masters Badminton Club</h3>
              <h4><sup>$</sup>5<span> / night</span></h4>
              <ul>
                <li>$30 Initial Subscription Fee</li>
                <li>Age Group: +35</li> 
              </ul>
              <div class="btn-wrap">
                <a href="https://www.facebook.com/SouthlandMasters/" class="btn-buy" target="_blank">Find Out More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box">
              <h3>All Saints Badminton Club</h3>
              <h4><sup>$</sup>8<span> / night</span></h4>
              <ul>
                <li>Buy 10 nights now, get the next night free</li>
                <li>Age Group: All Welcome</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://allsaintssouthland.wixsite.com/badminton" class="btn-buy" target="_blank">Find Out More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Smash Badminton</h3>
              <h4><sup>$</sup>5<span> / night</span></h4>
              <ul>
                <li>$15 Initial Subscription Fee</li>
                <li>Age Group: All Welcome</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://www.facebook.com/pages/category/Sports-Club/Smash-Badminton-Club-Invercargill-NZ-108955022642539/" class="btn-buy" target="_blank">Find Out More</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <h3>Get In <span>Touch</span></h3>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>21 Surrey Park Road, Glengarry, Invercargill 9810</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>badmintonsouthland@xtra.co.nz</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>03 217 9460</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2751.133898707348!2d168.37747331507794!3d-46.406400680145836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d2c4dd364e1b21%3A0x4764f56d8ea62df9!2sSouthland%20Badminton%20Assn!5e0!3m2!1sen!2snz!4v1634945884516!5m2!1sen!2snz" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <input type="submit" name="submit" class="btn-buy" value="Send">
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- Footer -->
<?php include 'footer.php'; ?>

