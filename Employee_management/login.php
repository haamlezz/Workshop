<?php require_once 'header.php';?>

  <div class="main">
    <div class="container login-form">
      <h2>Login Form</h2>
      <?php
        if($_GET){
          echo '<p class="error">
          Error Password or Username
          </p>';
        }
      ?>
      <form action="login-process.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="userid" id="userid" />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" id="password" />
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-success" value="ເຂົ້າລະບົບ"  />
          <input type="reset" class="btn btn-warning" value="ລົບລ້າງ"/>
        </div>
      </form>
    </div>
  </div>

<?php require_once 'footer.php';?>
