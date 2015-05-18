<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>

  <link rel="stylesheet" href="../css/libraries/skeleton_forms.css" class="css"> 
  <?php include("../includes/head.php"); ?>

</head>

<body>

  <?php include("../includes/top_nav.php"); ?>

  <main class="row create-project">
    <div class="column small-12">
      <h2>Create Your Gifti Project</h2>
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
            <h5>Upload Photos</h5>
          </div> <!-- /upload photos -->
          <div class="column small-12 medium-8">
            <input type="text" placeholder="Your Name / Charity Name">
            <textarea placeholder="Please enter a description of your project"></textarea>
            <select>
              <option selected disabled>Project Category</option>
              <option value="animal">Animals</option>
              <option value="arts">Arts</option>
              <option value="civil-rights">Civil Rights</option>
              <option value="Cultural">Cultural</option>
              <option value="consumer">Consumer Protection</option>
              <option value="environment">Environment</option>
              <option value="housing">Housing</option>
              <option value="hunger">Hunger</option>
              <option value="literacy">Literacy</option>
              <option value="medical">Medical/Health</option>
              <option value="public-policy">Public Policy</option>
              <option value="youth">Youth</option>
            </select>
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
        <p>Well done.  Have a look at your <a href="project_detail.php">project</a>!</p>
      </div>
    </div>
  

  </main>

  <?php include("../includes/footer.php"); ?>



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