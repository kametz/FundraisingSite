<div id="signup-modal" class="modalDialog">
  <div> <a href="#close" title="Close" class="close">X</a>
    <h2>Sign Up</h2>
    <p>Gifti is a charitable giving platform.  Sign up now to start helping! 
      Already have an account?  <a href="#login-modal">Click to Login</a></p>
    <form METHOD="LINK" ACTION="http://www.kellymetzler.com/gifti/si/project_detail_si.php">
      <div class="input">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="full-name" autocorrect="off" autocapitalize="words" maxlength="32">
      </div>
      <div class="input">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" autocorrect="off" autocapitalize="off" maxlength="64">
      </div>
      <div class="input clearfix">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" maxlength="12" autocorrect="off" autocapitalize="off">
      </div>
      <p>I'm most interested in:</p>
        <label><input type="radio" name="usertype" value="creator"> Creating Projects</label>
        <label><input type="radio" name="usertype" value="funder"> Funding Projects</label>

      <input type="submit" id="submit" name="submit" value="Create Account">
    </form>
  </div>
</div>

<div id="login-modal" class="modalDialog">
  <div> <a href="#close" title="Close" class="close">X</a>
    <h2>Login</h2>
    <p>Welcome back to Gifti! </p>
    <form METHOD="LINK" ACTION="http://www.kellymetzler.com/gifti/si/project_detail_si.php">
      <div class="input">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" autocorrect="off" autocapitalize="off" maxlength="64">
      </div>
      <div class="input clearfix">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" maxlength="12" autocorrect="off" autocapitalize="off">
      </div>
      <label><input type="checkbox" name="remember" value="remember"> Remember me</label>
      <input type="submit" id="submit" name="submit" value="Login">
    </form>
    <h3><small>(Need an account?  <a href="#signup-modal">Click to Sign Up</a>)</small></h3>
  </div>
</div>