<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  <link rel="stylesheet" href="../vendor/FlexSlider/flexslider.css" class="css">
  <?php include("../includes/head.php"); ?>
</head>

<body>
  <?php include("includes_si/top_nav_si.php"); ?>

  <main class="index">
    <!-- Promotions Bar, off by default, use for additional marketing space -->
    <div class="row">
      <div class="column small-12 promotions">
        Promotions Bar
      </div>  
    </div><!--/promtions row-->
      
    <!-- Main Photo -->
    <div class="row">
      <div class="column small-12 flexslider">
        <!-- The equalizer doesn't work correctly if the page
        is actively resized at the small breakpoint.  But it works 
        fine if the page is reloaded.  Since the use case for people
        actively changing browser size is limited, I'm going to leave it.  -->
        <ul class="slides">
          <li>
            <div class="row" data-equalizer>
              <div class="column small-12 medium-8" data-equalizer-watch data-equalizer-mq="medium-up">
                <img src="../images/homepage/lgpuppy.jpg" title="Two puppies" />
              </div>
              <div class="column small-12 medium-4 mp-photo-caption-container" data-equalizer-watch>
                <div class="mp-photo-caption">
                  <h3>Help Puppies Learn to Read!</h3>
                  <p>All over the world, puppies are suffering.  Suffering from their lack of reading skills.
                   Jobs: denied.  Relationships: failed.  Puppy literacy is everyone's responsibility.</p>
                  <p><a href="assets/project_detail.php">Learn more &raquo; </a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row" data-equalizer>
              <div class="column small-12 medium-8" data-equalizer-watch data-equalizer-mq="medium-up">
                <img src="../images/homepage/beach.jpg" title="Kids at beach" />
              </div>
              <div class="column small-12 medium-4 mp-photo-caption-container beach" data-equalizer-watch>
                <div class="mp-photo-caption">
                  <h3>Every Day's a Beach</h3>
                  <p>We have the van.  We have the kids.  What we need is a bit of cash to buy gas and lunch.  
                    Help us make a special day for special kids at Dillon Beach?</p>
                  <p><a href="assets/project_detail.php">Learn more &raquo; </a></p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row" data-equalizer>
              <div class="column small-12 medium-8" data-equalizer-watch data-equalizer-mq="medium-up">
                <img src="../images/homepage/salad.jpg" title="Woman and salad" />
              </div>
              <div class="column small-12 medium-4 mp-photo-caption-container salad" data-equalizer-watch>
                <div class="mp-photo-caption">
                  <h3>Eat Your Colors</h3>
                  <p>Eating lots of vegetables: easier said than done.  We're making a 
                     veggie case to make eating fresh food fun.  
                    You'll love eating your greens&mdash;and your yellows, oranges, and reds.</p>
                  <p><a href="assets/project_detail.php">Learn more &raquo; </a></p>
                </div>
              </div>
            </div>
          </li>
        </ul> 
      </div>
    </div><!-- /slider row-->
    
    <!-- Search -->
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
          <h2>My Projects Overview</h2>
        </div>
      </div> <!-- /sign up -->

      <div class="column small-12 medium-8 featproj" data-equalizer-watch="sufeat">
        <h2>Featured Projects</h2>
        <div class="row" data-equalizer="fp">
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="../images/homepage/carcare.jpg" alt="Adding fluid to car engine" class="fp-photo" />
            <div class="fp-caption">Help train future mechanics &raquo; </div> 
          </div>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="../images/homepage/sunflowers.jpg" alt="Field of sunflowers" class="fp-photo" />
            <div class="fp-caption">Let's get a bouquet into every hospital room &raquo;</div> 
          </div>
        </div>
        <div class="row" data-equalizer>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="../images/homepage/pond.jpg" alt="Swan swimming" class="fp-photo" />
            <div class="fp-caption">Help us clean up Miller's Pond &raquo;</div> 
          </div>
          <div class="column small-6" data-equalizer-watch="fp">
            <img src="../images/homepage/tablet.jpg" alt="Tablet computer" class="fp-photo" />
            <div class="fp-caption">Create technology training opportunities for kids in need! &raquo;</div> 
          </div>
        </div> <!-- /featured projects thumbnails -->
      </div> <!-- /featured projects container  -->
    </div> <!-- /row sign up featured -->
  </main>

  <?php include("includes_si/footer_si.php"); ?>

 <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../vendor/FlexSlider/jquery.flexslider-min.js"></script>
  <script src="../js/slider.js"></script>
  <script src="../js/nav.js"></script>
  <script src="../js/libraries/foundation.js"></script>
  <script src="../js/libraries/foundation.equalizer.js"></script>

  <script>
    $(document).foundation();
  </script>

</body>
</html>