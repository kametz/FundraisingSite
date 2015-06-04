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
    <div class="row">
      <ul class="profile_nav column small-12"> 
        <li id="current"><a href="user_profile_si.php">My Profile</a></li> 
        <li><a href="user_donations_si.php">My Donations</a></li> 
        <li><a href="user_projects_si.php">My Projects</a></li> 
      </ul> 
    </div><!-- /profile nav -->

    <div class="user_info row">
      <div class="column small-12 medium-6 profile_photo">
        <div> <!-- Container for Photo and button -->
          <div> <!-- Photo -->
            <img src="https://placeimg.com/350/200/people" alt="User Photo">
          </div>
          <input type="submit" value="Upload Photo">
        </div>
        <form>
          <h4>Name</h4>
          <p>Andy Miller <i class="fa fa-pencil" title="Edit"></i></p>
          <h4>Email</h4>
          <p>andy@myemail.com <i class="fa fa-pencil" title="Edit"></i></p>
          <h4>Location</h4>
          <input type="text" placeholder="Enter your location" name="location">
          <h4>Password Update</h4>
          <input type="password" placeholder="password" name="password"><br />
          <input type="submit" value="Submit Changes">
        </form>
      </div><!-- /profile photo and account info -->

      <div class="column small-12 medium-6 profile_comments">
        <h3>My Recent Comments</h3>
        <h5>In <em><a href="project_detail_si.php">Help Puppies Learn to Read</a></em></h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing 
          elit. Et commodi quidem eum, quia illum voluptate error 
          consequatur odit recusandae, dignissimos. Nisi, similique?
        </p>

        <h5>In <em><a href="project_detail_si.php">Flowers for Everyone!</a></em></h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing 
          elit. Et commodi quidem eum, quia illum voluptate error 
          consequatur odit recusandae, dignissimos. Nisi, similique?
        </p>

        <h5>In <em><a href="project_detail_si.php">Beach Day! Beach Day!</a></em></h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing 
          elit. Et commodi quidem eum, quia illum voluptate error 
          consequatur odit recusandae, dignissimos. Nisi, similique?
        </p>
      </div>
    </div>
    
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