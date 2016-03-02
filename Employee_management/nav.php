<nav>
  <ul class="nav nav-pills">
    <li><a href="index.php">ໜ້າຫຼັກ</a></li>
<?php
    if($_SESSION['role'] == 0):
?>
    <li><a href="add-employee.php">ເພີ່ມພະນັກງານ</a></li>
    <li><a href="add-user.php">ເພີ່ມບັນຊີຜູ້ໃຊ້</a></li>
    <li><a href="add-department.php">ເພີ່ມພະແນກ</a></li>
<?php
    endif;
?>
    <li><a href="logout.php">ອອກຈາກລະບົບ</a></li>
  </ul>
</nav>
