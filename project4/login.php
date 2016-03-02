<?php
$title = "Login Form";
require_once 'header.php';
?>

<div class="login">
  <h3>Login Form</h3>
  <form action="login-process.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="form-group">
        <input type="submit" value="Login" class="button">
    </div>

  </form>
</div>


<?php
require_once 'footer.php';
?>
