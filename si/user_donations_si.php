<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gifti: Giving for All</title>
  <?php include("../includes/head.php"); ?>
</head>

<body>

  <?php include("includes_si/top_nav_si.php"); ?>

  <main class="row profile">

    <ul class="profile_nav column small-12"> 
      <li><a href="user_profile_si.php">My Profile</a></li> 
      <li id="current"><a href="user_donations_si.php">My Donations</a></li> 
      <li><a href="user_projects_si.php">My Projects</a></li> 
    </ul> <!-- /profile nav -->
    
  </main>

  <?php include("includes_si/footer_si.php"); ?>



 <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../js/nav.js"></script>
  <script src="../js/libraries/foundation.js"></script>


  <script>
    $(document).foundation();
  </script>

</body>
</html>