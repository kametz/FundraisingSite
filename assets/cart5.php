<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>

  <?php include("../includes/head.php"); ?>

</head>

<body>

  <?php include("../includes/top_nav.php"); ?>

  <main class="cart">
    <div class="row">
      <div class="column small-12">
        <h2>Thank You for Contributing!</h2>
      </div>
    </div>

    <div class="row">
      <div class="small-10 small-push-1 column project_wrapper">
        <div class="column small-8">
          <h5>Project</h5>
          <p>Help Puppies Learn to Read</p>
          <p><em>Puppy Literacy Association</em></p>
        </div>
        <div class="column small-4 donation">
          <h5>My Donation</h5>
          <p>$5</p>
        </div>
      </div> 
    </div><!-- /project_wrapper -->

    <div class="row">
      <div class="column small-12 medium-6">
        Billing Address
      </div>
      <div class="column small-12 medium-6">
        Payment Information
      </div>
    </div>
      

    <form id="cart">
      <div class="column small-12 medium-8 medium-centered">
        <input type="submit" value="Submit" name="submit">
      </div>
    </form>
  

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