
<?php
session_start();
	include 'function.php';
	check_login();
?>

<?php require_once 'header.php'; ?>

<div class="container">
  &nbsp;
<?php
  if($_GET){
    if($_GET['error']==0){
      echo "<p class='bg-success'>
      User Added
      </p>";
    }else{
      echo "<p class='bg-danger'>
      User NOT Add
      </p>";
    }
  }
?>
  <legend>
    <h1>ເພີ່ມຂໍ້ມູນຜູ້ໃຊ້ງານ </h1>
  </legend>
  <p>
    <a href="index.php">ກັບຄືນ</a>
  </p>
  <div class="container">
    <form class="form-horizontal" action="add-user-process.php" method="post">

      <div class="form-group">
        <label class="col-lg-1 control-label">ຊື່ຜູ້ໃຊ້</label>
        <div class="col-lg-8">
          <input type="text" name="username" class="form-control" />
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-1 control-label">ລະຫັດຜ່ານ</label>
        <div class="col-lg-8">
          <input type="password" name="password" class="form-control" />
        </div>
      </div>

      <div class="form-group col-lg-9">
        <center>
          <input type="submit" value="ເພີ່ມຜູ້ໃຊ້" class="btn btn-primary"  />
        </center>

      </div>
    </form>
  </div>

</div>

<?php require_once 'footer.php'; ?>
