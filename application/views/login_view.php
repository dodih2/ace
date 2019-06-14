<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
</head>
  <body>
    <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <form class="form-signin" action="<?php echo site_url('login/auth'); ?>" method="post">
          <h2 class=form-signin-heading>Please Sign In</h2>
          <?php echo $this->session->flashdata('msg'); ?>
          <label for="username" class="sr-only">Username</label>
          <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required >
          <div class="checkbox">
            <label for="checkbox" value="remember-me">Remember me</label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </form>
      </div>
    </div>

  </body>
</html>
