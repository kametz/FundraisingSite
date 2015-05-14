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
  <link rel="stylesheet" href="../css/libraries/foundation.css" class="css"> 
  <link rel="stylesheet" href="..//css/libraries/jquery.bxslider.css" class="css">
  <link rel="stylesheet" href="../css/libraries/normalize.css" class="css">
  <link rel="stylesheet" href="../css/styles.css" class="css">  
</head>

<body>

  <?php include("../includes/top_nav.php"); ?>

  <main class="row detail">
    <div class="column small-12">
      <p><em>< back </em></p>
      <h2>Help Puppies Learn To Read!</h2></div>
    </div>
    <div class="column small-12 medium-7">
      <ul class="bxslider">
        <li><img src="../images/detail/detail-1.jpg" /></li>
        <li><img src="../images/detail/detail-2.jpg" /></li>
        <li><img src="../images/detail/detail-3.jpg" /></li>
      </ul>
      <div id="bx-pager">
        <a data-slide-index="0" href="">
          <img src="../images/detail/thumbs/detail-thumb-1.jpg" /></a>
        <a data-slide-index="1" href="">
          <img src="../images/detail/thumbs/detail-thumb-2.jpg" /></a>
        <a data-slide-index="2" href="">
          <img src="../images/detail/thumbs/detail-thumb-3.jpg" /></a>
      </div>
    </div> <!-- /slider -->
    <div class="column small-12 medium-5">
      <p>We must ask: why can’t puppies read? Puppy kitty ipsum dolor sit good dog bird bird seed parakeet. Parakeet feathers good boy right paw aquatic pet gate run play meow tongue. Parrot tongue fur aquatic cockatiel bark canary parakeet chirp. Dragging toy Snowball parrot tail kitten water stripes sit commands. Pet mouse aquatic tabby turtle ball chow whiskers finch hamster critters. Commands Fido furry Spike canary slobbery bed good boy running parrot walk food. Whiskers bed dog Tigger brush collar water right paw bird seed.Water nest dragging kitty scratch bird seed behavior. </p>

      <p>Fido paws tail puppy kibble feathers water foot parakeet whiskers water dog right paw. Hamster slobbery Mittens bird food slobbery chow foot Mittens stay smooshy cockatiel play dead cage crate parakeet feathers tail aquatic lick. </p>
    </div>
  </main>

  <?php include("../includes/footer.php"); ?>



 <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/nav.js"></script>
  <script src="http://www.kellymetzler.com/gifti/js/libraries/jquery.bxslider/jquery.bxslider.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
      });
    });
  </script>
</body>
</html>