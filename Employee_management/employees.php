<?php
  include 'dbconfig.php';

  //ຮັບຂໍ້ມູນ depid ມາຈາກການຮ້ອງຂໍຂອງ AJAX
  $depid = filter_input(INPUT_GET, 'depid', FILTER_SANITIZE_SPECIAL_CHARS);
  //$depid = '*';
  //ກວດເງື່ອນໄຂ ຖ້າວ່າ depid ຖືກສົ່ງມາເປັນ * ແມ່ນເລືອກທັງໝົດ ແຕ່ຖ້າຖືກສົ່ງເປັນ ລະຫັດພະແນກແມ່ນ query ສະເພາະພະນັກງານໃນພະແນກ
  if($depid == '*'){
    $result = $mysqli->query("SELECT * FROM employees JOIN departments ON employees.depid = departments.depid");
  }else{
    $result = $mysqli->query("SELECT * FROM employees JOIN departments ON employees.depid = departments.depid WHERE employees.depid = $depid");
  }

  //ສ້າງຕາຕະລາງ
  //echo '<div class="container-fluid">';
  echo '<table class="table table-striped">
    <thead>
      <th>ລະຫັດພະນັກງານ</th>
      <th>ຊື່ ແລະ ນາມສະກຸນ</th>
      <th>ພະແນກ</th>
      <th>ຕຳແໜ່ງ</th>
      <th>ເບີໂທ</th>
      <th>ອີເມວ</th>
    </thead>';

    //ສັ່ງ fetch_array ຂໍ້ມູນຈາກຖານຂໍ້ມູນມາສະແດງໃນແຖວຕາຕະລາວ
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
      echo '<tr>';
      echo '<td>'.$row['empid'].'</td>';
      echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
      echo '<td>'.$row['depname'].'</td>';
      echo '<td>'.$row['position'].'</td>';
      echo '<td>'.$row['tel'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '</tr>';
  }

  echo '</table>';//ສິ້ນສຸດຕາຕະລາງ
  //echo '</div>';
?>
