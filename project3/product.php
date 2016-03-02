<?php include 'dbconfig.php'?>
<!doctype HTML>
<html>
<head>
<title>Product</title>
<link href="bootstrap.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
  function Delete(proid){
    //alert(proid);
    var req = new XMLHttpRequest();

    var url = "delete.php?proid=" + proid;

    req.open("GET",url, true);
    req.send(null);

    req.onreadystatechange = function(){
      if(req.readyState === 4){
        document.getElementById("show").innerHTML = req.responseText;
      }
    };
  }
</script>

</head>
<body>
<div id="show">

</div>
<?php
  $qry = "SELECT * FROM products";
  $rs = mysqli_query($con, $qry);
?>

<div class="container">
  <h2>Products</h2>
  <table class="table table-striped table-bordered">
    <tr>
      <td>Action</td>
      <td>Products</td>
      <td>Price</td>
      <td>Quantity</td>
    </tr>

  <?php
    while($row = mysqli_fetch_array($rs)){
      echo '<tr>';
      echo '<td>
      <a  href="edit.php?proid='.$row['proid'].'">Edit</a> /
      <a href="#" id="'.$row['proid'].'"  onclick="Delete(this.id)">Delete</a>
      </td>';
      echo '<td>'.$row['proname'].'</td>';
      echo '<td>'.$row['proprice'].'</td>';
      echo '<td><p class="';
        if($row['quantity'] == 0){
          echo 'text-danger';
        }else{
          echo 'text-success';
        }
      echo '">'.$row['quantity'].'</p></td>';
      echo '</tr>';
    }
  ?>
  </table>

</div>
</body>
</html>
