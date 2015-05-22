<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  <link rel="stylesheet" href="../css/libraries/skeleton_forms.css" class="css"> 
  <link rel="stylesheet" href="..//css/libraries/jquery.bxslider.css" class="css">
  <?php include("../includes/head.php"); ?>
  
</head>

<body>

  <?php include("../includes/top_nav.php"); ?>

  <main class="detail row">

    <div class="column small-12">
      <p><em>&lt; back </em></p>
      <h2>Help Puppies Learn To Read!</h2>
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

    <div class="column small-12 medium-5 project-description">
      <p>We must ask: why can’t puppies read? Puppy kitty ipsum dolor sit good dog bird bird seed parakeet. Parakeet feathers good boy right paw aquatic pet gate run play meow tongue. Parrot tongue fur aquatic cockatiel bark canary parakeet chirp. Dragging toy Snowball parrot tail kitten water stripes sit commands. Pet mouse aquatic tabby turtle ball chow whiskers finch hamster critters. Commands Fido furry Spike canary slobbery bed good boy running parrot walk food. Whiskers bed dog Tigger brush collar water right paw bird seed.Water nest dragging kitty scratch bird seed behavior. </p>

      <p>Fido paws tail puppy kibble feathers water foot parakeet whiskers water dog right paw. Hamster slobbery Mittens bird food slobbery chow foot Mittens stay smooshy cockatiel play dead cage crate parakeet feathers tail aquatic lick. </p>

      <form action="cart5.php">
        <input type="submit" value="Donate $5">
      </form>

      <form action="cart25.php">
        <input type="submit" value="Donate $25">
      </form> 

      <form action="cart100.php">
        <input type="submit" value="Donate $100">
      </form>
    </div> <!-- /project description -->
    
    <div class="comments-rule column small-12"></div>
    <div id="comments" class="column small-12 medium-8 medium-centered">
      <h4>Comments</h4>
      <h6>Billy said:</h6>
      <p>What on earth is going on here?  I don't understand
        the point of this at all.</p>
    </div><!-- /comments -->
    <div id ="leave-comment" class="column small-12 medium-8 medium-centered">
      <h4>Leave a Comment</h4>
      <form>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email - will not be published">
        <textarea placeholder="Comment"></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
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