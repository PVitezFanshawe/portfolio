<?php

  require('admin/scripts/connect.php');

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peter Vitez</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  </head>
  <body>
<div id="siteWrap">
    <header>
      <div id="headerBack">
        <h1 class="mainTitle">Peter Vitez</h1>
      </div>



      <div class="rows" data-sticky-container>

      <div class=" show-for-large large-12 columns" data-sticky data-margin-top='0' data-options="stickyOn: small" data-top-anchor="headerBack:bottom" id="mainNavLarge">
        <ul>
          <li><a href="#myWork"><span>- </span>My Work<span> -</span></a></li>
          <li><a href="#about"><span>- </span>About<span>  -</span></a></li>
          <li><a href="#contact"><span>- </span>Contact<span> -</span></a></li>
        </ul>
      </div>
      <div class="small-12 hide-for-large columns" data-sticky data-margin-top='0' data-options="stickyOn: small" data-top-anchor="headerBack:bottom" id="mainNavSmall">

          <div id="navToggle">
            <img src="images/navHam.svg" alt="navigation expand icon">
            <h2>See More</h2>
          </div>
          <ul id="navEl">
            <li><a href="#myWork">My Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

      </div>
    </div>

    </header>

    <section class="rows">
      <p class="promoText small-12  medium-8 medium-centered columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, ipsa, velit. Sint consectetur voluptas ex, voluptatibus accusantium facere dolore unde, aliquid ipsum quo omnis, sapiente nesciunt sit, ipsam vel impedit consequuntur sed neque molestias labore? Dolorem, iusto est fuga nobis non corporis voluptatum voluptatem ratione, velit mollitia eius consectetur iure tempora, quidem possimus laboriosam at, illo maiores officiis! Vitae, dolores.</p>
    </section>

    <section class="rows jumptarget" id="myWork">

    </section>

    <div class="lightBox jumptarget3 expanded rows">

      <div class=" lightBoxMain large-10 large-centered">
        <i class="fa fa-times fa-3x" aria-hidden="true"></i>
        <img  src="images/portItem.svg" alt="Lightbox main image">
        <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i>
        <i class="fa fa-arrow-right fa-3x" aria-hidden="true"></i>
      </div>
    </div>


    <section class="rows infoBlurb jumptarget2" id="about">
      <h2>About Me</h2>
      <img src="images/profilePic.svg" alt="Profile Picture">
      <p class="promoText small-12 medium-8 medium-centered columns">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, ipsa, velit. Sint consectetur voluptas ex, voluptatibus accusantium facere dolore unde, aliquid ipsum quo omnis, sapiente nesciunt sit, ipsam vel impedit consequuntur sed neque molestias labore? Dolorem, iusto est fuga nobis non corporis voluptatum voluptatem ratione, velit mollitia eius consectetur iure tempora, quidem possimus laboriosam at, illo maiores officiis! Vitae, dolores.</p>
    </section>

    <section class="rows">
      <div class="small-8 small-centered large-6 large-centered columns socialIcons">
        <a href="https://www.linkedin.com/in/peter-vitez-98a825155/"><img src="images/iconLinkedIn.svg" alt=""></a>
        <a href="https://twitter.com/PVitez30"><img src="images/iconTwitter.svg" alt=""></a>
        <a href="https://www.instagram.com/peter.vitez/"><img src="images/iconInsta.svg" alt=""></a>
      </div>
    </section>

    <section class="rows" id="contact">
      <h2 small-10 small-centered>I'd Love to hear from you!</h2>
      <form class=" small-10 small-centered columns"  action="#">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label class="hidden" for="street">Name:</label>
        <input class="hidden" type="text" name="street">

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required>

        <label for="message">Message:</label>
        <input id="message" type="text" name="message" required>

        <input type="submit" value="Submit">
      </form>
    </section>

    <div id="backToTop" class="rows">
      <a class="small-12 hide-for-large columns" href="#siteWrap"><h3>Back to top</h3></a>
    </div>
</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
