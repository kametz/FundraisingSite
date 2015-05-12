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

      <ul class="column small-12 slider bxslider">
        <li><img src="images/slider1.jpg" alt="#"></li>
        <li><img src="images/slider2.jpg" alt="#"></li>
        <li><img src="images/slider3.jpg" alt="#"></li>
      </ul> <!--/slider-->


      <div class="column small-12">Search</div>
      <div class="column small-12 medium-4">Sign Up</div>
      <div class="column small-12 medium-8">
        <div class="row">
          <div class="column small-12">Featured Projects</div>
          <div class="column small-6">Project 1</div>
          <div class="column small-6">Project 2</div>
          <div class="column small-6">Project 3</div>
          <div class="column small-6">Project 4</div>
        </div>
      </div>
    </main>



 <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/libraries/jquery.bxslider.min.js"></script>
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