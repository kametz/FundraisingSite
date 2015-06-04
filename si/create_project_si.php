<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>

  <?php include("../includes/head.php"); ?>
</head>

<body>

  <?php include("includes_si/top_nav_si.php"); ?>

  <main class="row create-project">
    <div class="column small-12">
      <h2>Create Your Gifti Project <i class="fa fa-question-circle"></i></h2>
    </div>
    <div class="column small-12">
      <form id="create_project">
        <input type="text" placeholder="Project Title" class="project_title">
        <div class="row">
          <div class="column small-12 medium-4">
            <ul class="small-block-grid-4 medium-block-grid-2">
              <li><img src="http://placehold.it/150x100"></li>
              <li><img src="http://placehold.it/150x100"></li>
              <li><img src="http://placehold.it/150x100"></li>
              <li><img src="http://placehold.it/150x100"></li>
            </ul>
            <input type="submit" value="Upload Photos" name="upload">
          </div> <!-- /upload photos -->
          <div class="column small-12 medium-8">
            <input type="text" placeholder="Your Name or Charity Name">
            <div class="row">
              <div class="column small-12">
                <input type="text" placeholder="City">
              </div>
            </div>
            <div class="row">
              <div class="column small-3">
                  <?php include("../includes/state_dropdown.php"); ?>
              </div>
              <div class="column small-3">
                <input type="text" placeholder="Zip" maxlength="10">
              </div>
              <div class="column small-6">
                <input type="text" placeholder="Country">
              </div>
            </div>

            <textarea placeholder="Please enter a description of your project"></textarea>
            <h4>Project Categories:</h4>
        
              <div class="create-category"><input type="checkbox" name="category" value="animals" class="create-category">Animals</div>
              <div class="create-category"><input type="checkbox" name="category" value="arts" class="create-category">Arts</div>
              <div class="create-category"><input type="checkbox" name="category" value="civil-rights" class="create-category">Civil Rights</div>
              <div class="create-category"><input type="checkbox" name="category" value="cultural" class="create-category">Cultural</div>
              <div class="create-category"><input type="checkbox" name="category" value="consumer-protection" class="create-category">Consumer Protection</div>
              <div class="create-category"><input type="checkbox" name="category" value="environment" class="create-category">Environment</div>
              <div class="create-category"><input type="checkbox" name="category" value="housing" class="create-category">Housing</div>
              <div class="create-category"><input type="checkbox" name="category" value="hunger" class="create-category">Hunger</div>
              <div class="create-category"><input type="checkbox" name="category" value="literacy" class="create-category">Literacy</div>
              <div class="create-category"><input type="checkbox" name="category" value="medical" class="create-category">Medical</div>
              <div class="create-category"><input type="checkbox" name="category" value="public-policy" class="create-category">Public Policy</div>
              <div class="create-category"><input type="checkbox" name="category" value="youth" class="create-category">Youth</div>
           

            <div class="input-box">
              <input type="text" placeholder="Funding Goal">
              <span class="unit">$</span>
            </div>
          </div> <!-- /project description -->
        </div> <!-- /photos and description row -->
        <div class="column small-12 medium-8 medium-centered">
          <input type="submit" value="Submit" name="submit">
        </div>
      </form>
    </div>

    <div id="success" class="column small-12">
      <div id="success_message" class="column small-10 small-centered medium-8 medium-centered">
        <h2>Success!</h2>  
        <p>Well done.  Have a look at your <a href="project_detail_si.php">project</a>!</p>
      </div>
    </div>
  

  </main>

  <?php include("includes_si/footer_si.php"); ?>



 <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/nav.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(function(){
        $("#create_project").submit(function(e) {
          e.preventDefault();
          $('#success').show();
          $('html, body').animate({
            scrollTop: 0
          }, 1000);
        });
      });
    });
  </script>

</body>
</html>