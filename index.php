<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  <link rel="stylesheet" href="css/libraries/skeleton_forms.css" class="css"> 
  <link rel="stylesheet" href="vendor/FlexSlider/flexslider.css" class="css">
  <?php include("includes/head.php"); ?>
</head>

<body>
  <?php include("includes/top_nav.php"); ?>

  <main class="index">
    <div class="row">
      <div class="column small-12 promotions">
        Promotions Bar
      </div>  <!--/promtions-->
      <div class="column small-12 flexslider">
        <ul class="slides">
          <li><img src="images/slider1.jpg" title="Slider 1" /></li>
          <li><img src="images/slider2.jpg" title="Slider 2" /></li>
          <li><img src="images/slider3.jpg" title="Slider 3" /></li>
        </ul> 
      </div><!-- /slider-->
    </div><!-- /row -->

    <div class="row search-row">
      <div class="column small-10 search">
        <i class="fa fa-search"></i>  &nbsp;
        Search for Projects  
      </div>
      <button class="column small-2 search-submit" name="Submit">
        <i class="fa fa-chevron-circle-right fa-2x"></i>
      </button>
    </div> <!-- /search -->  
    

    <div class= "row signup-featured" data-equalizer="sufeat">
      <!-- Sign Up Box -->
      <div class="column medium-4 mp-signup" data-equalizer-watch="sufeat">
        <div class="signup-box">
          <h2>Gifti is a simple and fun way to connect charities and donors</h2>
          <form>
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password"><br />
            <input type="submit" value="Join Now!" name="submit">
          </form>
        </div>
      </div> <!-- /sign up -->

      <div class="column small-12 medium-8 featproj" data-equalizer-watch="sufeat">
        <h2>Featured Projects</h2>
        <div class="row" data-equalizer="fp">
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="images/homepage/carcare.jpg" alt="Adding fluid to car engine" class="fp-photo" />
            <div class="fp-caption">Help train future mechanics &raquo; </div> 
          </div>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="images/homepage/sunflowers.jpg" alt="Field of sunflowers" class="fp-photo" />
            <div class="fp-caption">Let's get a bouquet into every hospital room &raquo;</div> 
          </div>
        </div>
        <div class="row" data-equalizer>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="images/homepage/pond.jpg" alt="Swan swimming" class="fp-photo" />
            <div class="fp-caption">Help us clean up Miller's Pond &raquo;</div> 
          </div>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="images/homepage/tablet.jpg" alt="Tablet computer" class="fp-photo" />
            <div class="fp-caption">Create technology training opportunities for kids in need! &raquo;</div> 
          </div>
        </div> <!-- /featured projects thumbnails -->
      </div> <!-- /featured projects container  -->
    </div> <!-- /row sign up featured -->
  </main>

  <?php include("includes/footer.php"); ?>

 <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="vendor/FlexSlider/jquery.flexslider-min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/libraries/foundation.js"></script>
  <script src="js/libraries/foundation.equalizer.js"></script>

  <script>
    $(document).foundation();
  </script>

</body>
</html>