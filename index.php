<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  
  <!-- Set the Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="//use.typekit.net/anh0cme.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
   
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="css/libraries/foundation.css" class="css"> 
  <link rel="stylesheet" href="css/libraries/normalize.css" class="css">
  <link rel="stylesheet" href="css/libraries/jquery.bxslider.css" class="css">
  <link rel="stylesheet" href="css/styles.css" class="css">  
</head>

<body>

  <?php include("includes/top_nav.php"); ?>

  <main class="row">
    <div class="column small-12 promotions">
      Promotions Bar
    </div>  <!--/promtions-->

    <ul class="column small-12 bxslider">
      <li><img src="images/slider1.jpg" title="Slider 1" /></li>
      <li><img src="images/slider2.jpg" title="Slider 2" /></li>
      <li><img src="images/slider3.jpg" title="Slider 3" /></li>
    </ul> <!-- /slider-->


    <div class="column small-12 search">
      <i class="fa fa-search"></i>  &nbsp;
      Search for projects by interest or location
    </div> <!-- /search -->

    <div class= "signup-featured">
      <div class="column small-12 medium-4 mp-signup">
        <h2>Gifti is a simple and fun way to connect charities and donors</h2>
        <form>
          <input type="text" placeholder="name" name="name"></input>
          <input type="text" placeholder="email" name="email"></input>
          <input type="password" placeholder="password" name="password"></input><br />
          <input type="submit" value="Join Now!" name="submit"></input>
        </form>
      </div>


      <div class="column small-12 medium-8 featproj">
        <div class="row">
          <div class="column small-12"><h2>Featured Projects</h2></div>
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
        </div> 
      </div> <!-- /featured projects -->
    </div> <!-- /row sign up featured -->
  </main>

  <?php include("includes/footer.php"); ?>



 <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/libraries/jquery.bxslider/jquery.bxslider.min.js"></script>
  <script src="js/slider.js"></script>

  <script type="text/javascript">
   $( document ).ready(function() {
      //toggle nav
      $('.menu-btn').click(function(){
        $('.side-nav').toggleClass('open')
      });  
      //initiate slider
      $('.bxslider').bxSlider();
    });
  </script>
</body>
</html>