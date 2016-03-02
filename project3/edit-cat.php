<?php include 'dbconfig.php';?>
<?php
  if($_POST){
    $catid = filter_input(INPUT_POST, 'catid');
    $catname = filter_input(INPUT_POST,'catname');

    $sql = "UPDATE category SET catname = '$catname' WHERE catid = $catid";

    $rs = mysqli_query($con, $sql);

    header('Location: add_category.php');
  }
?>
<!doctype HTML>
<html>
<head>
<title>Product</title>
<link href="bootstrap.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container">
  <?php
    $catid = filter_input(INPUT_GET, 'catid');

    $sql = "SELECT * FROM category WHERE catid = $catid";

    $rs = mysqli_query($con, $sql);

    $data = mysqli_fetch_array($rs);
   ?>

   <div class="row">
     <div class="col-md-4">
       <h1>ຟອມແກ້ໄຂປະເພດສິນຄ້າ</h1>
       <form method="post">
         <div class="form-group">
           <input type="hidden" name="catid" value="<?php echo $data['catid']; ?>">
           <input class="form-control" type="text" name="catname" value="<?php echo $data['catname']; ?>">
         </div>
         <input type="submit" value="ແກ້ໄຂ" class="btn btn-danger" />
         <a href="add_category.php" class="btn btn-info">ກັບຄືນ</a>
       </form>
     </div>
   </div>

</div>
</body>
</html>
