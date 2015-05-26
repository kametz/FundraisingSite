<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  <link rel="stylesheet" href="css/libraries/skeleton_forms.css" class="css"> 
  <link rel="stylesheet" href="css/libraries/jquery.bxslider.css" class="css">
  <?php include("includes/head.php"); ?>
</head>

<body>
  <?php include("includes/top_nav.php"); ?>

  <main class="row index">
    <div class="column small-12 promotions">
      Promotions Bar
    </div>  <!--/promtions-->

    <ul class="column small-12 bxslider">
      <li><img src="images/slider1.jpg" title="Slider 1" /></li>
      <li><img src="images/slider2.jpg" title="Slider 2" /></li>
      <li><img src="images/slider3.jpg" title="Slider 3" /></li>
    </ul> <!-- /slider-->

    <div class="search-row">
      <div class="column small-10 search">
        <i class="fa fa-search"></i>  &nbsp;
        Search for Projects  
      </div><!-- /search -->  
      <button class="column small-2 search-submit" name="Submit">
        <i class="fa fa-chevron-circle-right fa-2x"></i>
      </button>
    </div>

    <div class= "signup-featured">
      <div class="column small-12 medium-4 mp-signup">
        <h2>Gifti is a simple and fun way to connect charities and donors</h2>
        <form>
          <input type="text" placeholder="name" name="name">
          <input type="text" placeholder="email" name="email">
          <input type="password" placeholder="password" name="password"><br />
          <input type="submit" value="Join Now!" name="submit">
        </form>
      </div> <!-- /sign up -->

      <div class="column small-12 medium-8 featproj">
        <h2>Featured Projects</h2>
        <div class="row">
          <div class="column small-6">
            <img src="images/featured.jpg" alt="featured" class="fp-photo" />
            <div class="fp-caption">Featured Project Headline Text</div> 
            <hr />
          </div>
          <div class="column small-6">
            <img src="images/featured.jpg" alt="featured" class="fp-photo" />
            <div class="fp-caption">Featured Project Headline Text</div> 
            <hr />
          </div>
          <div class="column small-6">
            <img src="images/featured.jpg" alt="featured" class="fp-photo" />
            <div class="fp-caption">Featured Project Headline Text</div> 
            <hr />
          </div>
          <div class="column small-6">
            <img src="images/featured.jpg" alt="featured" class="fp-photo" />
            <div class="fp-caption">Featured Project Headline Text</div> 
            <hr />
          </div>
        </div> <!-- /featured projects thumbnails -->
      </div> <!-- /featured projects container  -->
    </div> <!-- /row sign up featured -->
  </main>

  <?php include("includes/footer.php"); ?>

 <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/libraries/jquery.bxslider/jquery.bxslider.min.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/nav.js"></script>

</body>
</html>