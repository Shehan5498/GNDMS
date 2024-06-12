<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Online Grama Niladhari Division Management System</title>
</head>

<body>
  <header id="home">
    <nav>
      <div class="nav__bar">
        <div class="nav__logo"><a href="#">GNDMS</a></div>
        <ul class="nav__links">
          <li class="link"><a href="#home">Home</a></li>
          <li class="link"><a href="#about">About Us</a></li>
          <li class="link"><a href="#discover">Announcement</a></li>
          <li class="link"><a href="#contact">Contact</a></li>
          <li class="link"><a href="admin/index.php">Admin</a></li>

        </ul>
      </div>
    </nav>
    <div class="section__container header__container">
      <h1>Online Grama Niladhari Division Management System</h1>
      <h4>By Team Phoenix</h4>
      <button class="btn">
        Explore More <i class="ri-arrow-right-line"></i>
      </button>
    </div>
  </header>

  <section class="about" id="about">
    <div class="section__container about__container">
      <div class="about__content">
        <h2 class="section__header">About us</h2>
        <p class="section__subheader">
          Grama Niladhari Division Management System is web-based application which store the data of Grama Niladhari Divisions of Sri lanka. This system helps the people to view the details of Grama Niladhari Division online.
        </p>


      </div>
      <div class="about__image">
        <img src="assets/about.jpg" alt="about" />
      </div>
    </div>
  </section>

  <section class="discover" id="discover">
    <div class="section__container discover__container">
      <h2 class="section__header">Announcements</h2>
      <p class="section__subheader">
        Let's see the Announcements.
      </p>
      <div class="discover__grid">
        <div class="discover__card">
          <div class="discover__image">
            <img src="assets/discover-1.jpg" alt="discover" />
          </div>
          <div class="discover__card__content01">
            <h4>&nbsp;</h4>
            <p>
              01) Announcement 01 Announcement 01 Announcement 01 Announcement 01 Announcement
            </p>

          </div>
          <div class="discover__card__content02">
            <h4>&nbsp;</h4>
            <p>
              02) Announcement 02 Announcement 02 Announcement 02 Announcement 02 Announcement
            </p>

          </div>
          <div class="discover__card__content03">
            <h4>&nbsp;</h4>
            <p>
              03) Announcement 03 Announcement 03 Announcement 03 Announcement 03 Announcement
            </p>

          </div>
        </div>

      </div>
    </div>
  </section>









  <section class="contact" id="contact">
    <div class="section__container contact__container">
      <div class="contact__col">
        <h4>Contact Us</h4>
        <p>We always aim to reply within 24 hours.</p>
      </div>
      <div class="contact__col">
        <div class="contact__card">
          <span><i class="ri-phone-line"></i></span>
          <h4>Call Us</h4>
          <h5>+94 112345678</h5>
          <p>We are online now</p>
        </div>
      </div>
      <div class="contact__col">
        <div class="contact__card">
          <span><i class="ri-mail-line"></i></span>
          <h4>Send us an enquiry</h4>
        </div>
      </div>
    </div>
  </section>

  <section class="footer">
    <div class="section__container footer__container">
      <h4>GNDMS</h4>
      <div class="footer__socials">
        <span>
          <a href="#"><i class="ri-facebook-fill"></i></a>
        </span>
        <span>
          <a href="#"><i class="ri-instagram-fill"></i></a>
        </span>
        <span>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </span>
        <span>
          <a href="#"><i class="ri-linkedin-fill"></i></a>
        </span>
      </div>
      <p>
        The grassroots-level government officers in Sri Lanka responsible for administrative and community development tasks within their respective divisions.
      </p>
      <ul class="footer__nav">
        <li class="footer__link"><a href="#home">Home</a></li>
        <li class="footer__link"><a href="#about">About</a></li>
        <li class="footer__link"><a href="#discover">Announcement</a></li>
        <li class="footer__link"><a href="#contact">Contact</a></li>

      </ul>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Team Phoenix. All rights reserved.
    </div>
  </section>

  <script src="main.js"></script>
</body>

</html>