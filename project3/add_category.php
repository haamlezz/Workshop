<?php include 'dbconfig.php';?>
<?php
  if($_POST){
    $catname = filter_input(INPUT_POST, 'catname');
    $sql = "INSERT INTO category VALUES('', '$catname')";
    mysqli_query($con, $sql);
  }
?>
<?php require 'header.php';?>

<div class="container">
<?php require 'menu.php';?>
<div class="row">
  <div class="col-md-4">
  <h1>ຟອມເພີ່ມປະເພດ</h1>
  <form  method="post">
  <div class="form-group">
    <label>ຊື່ປະເພດ</label>
    <input type="text" name="catname" class="form-control" />
  </div>
  <input type="submit" value="ເພີ່ມ" class="btn btn-info"/>
  </form>
  </div>

  <!-- ສະແດງປະເພດ -->
  <div class="col-md-8">

  <h1>ປະເພດທັງໝົດ</h1>
  <table class="table table-hover table-striped">
    <tr>
      <th>
        ດຳເນີນການ
      </th>
      <th>
        ລະຫັດປະເພດ
      </th>
      <th>
        ຊື່ປະເພດ
      </th>
    </tr>
<?php
      $sql = "SELECT * FROM category";
      $rs = mysqli_query($con, $sql);
      if(mysqli_num_rows($rs) == 0){
        echo '<p class="text-danger">
            ບໍ່ມີຂໍ້ມູນເດີ້.....
        </p>';
      }else{
        while($data = mysqli_fetch_array($rs)):
?>
      <tr>
          <td>
            <a href="edit-cat.php?catid=<?php echo $data['catid']; ?>">ແກ້ໄຂ</a> |
            <a href="delete-cat.php">ລຶບ</a>
          </td>
          <td>
            <?php echo $data['catid']; ?>
          </td>

          <td>
            <?php echo $data['catname']; ?>
          </td>
      </tr>

<?php
        endwhile;
      }
?>
  </table>
  </div>



</div>
</body>
</html>
