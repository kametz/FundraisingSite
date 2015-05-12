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
  <link rel="stylesheet" href="css/app.css" class="css"> 
  <link rel="stylesheet" href="css/normalize.css" class="css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <link rel="stylesheet" href="css/styles.css" class="css">  

</head>

<body>

    <?php include("includes/header.php"); ?>

    <main class="row">
      <div class="column small-12 panel promotions">Promotions Bar</div>

      <div class="column small-12 slider">
        <div class="slide-viewer">
          <div class="slide-group">
            <div class="slide slide-1"><img src="http://placehold.it/1000x430&text=photo+1"></div>
            <div class="slide slide-2"><img src="http://placehold.it/1000x430&text=photo+2"></div>
            <div class="slide slide-3"><img src="http://placehold.it/1000x430&text=photo+3"></div>
            <div class="slide slide-4"><img src="http://placehold.it/1000x430&text=photo+4"></div>
          </div>
        </div>
        <div class="buttons-container"><div class="slide-buttons"></div></div>
      </div>


      

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/slider.js"></script>

  <script type="text/javascript">
   $( document ).ready(function() {
      //toggle nav
      $('.menu-btn').click(function(){
        $('.side-nav').toggleClass('open')
      });  
    });
  </script>
</body>
</html>