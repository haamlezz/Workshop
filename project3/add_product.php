<?php include 'dbconfig.php';?>
<?php require 'header.php';?>

<div class="container">
  <?php require 'menu.php';?>
<h1>ຟອມເພີ່ມສິນຄ້າ</h1>

<div class="row">
  <form>
    <div class="form-group row">
      <div class="col-md-1">
        <label>ຊື່ສິນຄ້າ:</label>
      </div>
      <div class="col-xs-4 col-md-5">
        <input class="form-control" type="text" name="proname" placeholder="Enter product name" />
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-1">
        <label>ລາຄາສິນຄ້າ:</label>
      </div>
      <div class="col-xs-4 col-md-5">
        <input class="form-control" type="text" name="proprice" placeholder="Enter product price" />
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-1">
        <label>ປະເພດສິນຄ້າ:</label>
      </div>
      <div class="col-xs-4 col-md-5">
        <select name="catid" class="form-control">
          <?php
            $sql = "SELECT * FROM category";
            $rs = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($rs)):
          ?>
          <option value="<?php echo $row['catid']; ?>">
            <?php echo $row['catname']; ?>
          </option>
          <?php
            endwhile;
          ?>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-1">
        <label>ຈຳນວນສິນຄ້າ:</label>
      </div>
      <div class="col-xs-4 col-md-5">
        <input class="form-control" type="text" name="quantity" placeholder="Enter product price" />
      </div>
    </div>

    <input type="submit" value="ເພີ່ມສິນຄ້າ" class="btn btn-primary btn-lg" />

  </form>
</div>
</div>
<?php require 'footer.php';?>
