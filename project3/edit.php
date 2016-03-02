<?php include 'dbconfig.php'?>
<!doctype HTML>
<html>
<head>
<title>Product</title>
<link href="bootstrap.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
  $proid = filter_input(INPUT_GET, 'proid');
  $qry = "SELECT * FROM products WHERE proid = $proid";
  $rs = mysqli_query($con, $qry);
?>

<div class="container">
  <h2>Edit Products</h2>
  <form action="edit-process.php" method="post">

  <table class="table table-striped">
    <tr>
      <td>Product ID</td>
      <td>Product Name</td>
      <td>Price</td>
      <td>Quantity</td>
    </tr>
  <?php $row = mysqli_fetch_array($rs);?>
    <tr>
      <td>
        <input type="hidden" name="proid" value="<?php echo $row['proid'];?>">
        <?php echo $row['proid'];?>
      </td>
      <td>
        <input type="text" value="<?php echo $row['proname'];?>" name="proname" class="form-control">
      </td>
      <td>
        <input type="text" value="<?php echo $row['proprice'];?>" name="proprice" class="form-control">
      </td>
      <td>
        <input type="text" value="<?php echo $row['quantity'];?>" name="quantity" class="form-control">
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <input type="submit" value="Update" class="btn btn-primary" />
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
