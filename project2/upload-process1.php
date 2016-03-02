<!doctype HTML>
<html>

<head>
  <meta charset="utf-8">
  <title>Upload Process....</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php

    //ເຊື່ອມຕໍ່ຖານຂໍ້ມູນ
    include 'dbconfig.php';

    //print_r ເປັນຄຳສັ່ງກວດສອບຄ່າທີ່ຢູ່ໃນ array
    print_r($_FILES);
    echo '<br>';
    //echo $_FILES['upload']['size'];

    $size = $_FILES['upload']['size'];
    $type = $_FILES['upload']['type'];

    if($size > 1048576 || $type != 'image/jpeg'){
      echo 'ຜິດພາດ....ກະລຸນາອັບໃໝ່';
      exit;
    }

    //ປະກາດໂຕປ່ຽນເກັບຊື່
    $file_name = $_FILES['upload']['name'];

    //ປະກາດໂຕປ່ຽນປາຍທາງ photo/ຊື່ຟາຍ.ນາມສະກຸນ
    $target = 'photo/'.$_FILES['upload']['name'];

    //ໂຕປ່ຽນຊື່ຟາຍຊົ່ວຄາວ
    $tmp_name = $_FILES['upload']['tmp_name'];

    //ກວດສອບການອັບໂຫຼດ
    if(move_uploaded_file($_FILES['upload']['tmp_name'], $target)){
      //ຖ້າວ່າອັບໂຫຼດໄດ້
      echo '<p>upload ໄດ້ແລ້ວ</p>';

      //ສະແດງຮູບ
      echo '<img src="'.$target.'" width="200"><br>';

      //ສ້າງ qry string
      $sql = "INSERT INTO photos VALUES(
              '',
              '$file_name',
              '$target',
              $size) ";

      if(mysqli_query($con, $sql)){
        echo 'ຮູບຈັດແລ້ວ';
      }
    }



  ?>
</body>
</html>
