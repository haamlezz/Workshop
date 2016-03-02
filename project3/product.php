<?php include 'dbconfig.php';?>
<?php require 'header.php';?>

<div id="show">

</div>
<?php
  $qry = "SELECT * FROM products";
  $rs = mysqli_query($con, $qry);
?>

<div class="container">
<?php require 'menu.php';?>

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
