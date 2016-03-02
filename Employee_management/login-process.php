<?php
  session_start();//ເລີ່ມ session
  include 'dbconfig.php';
  include 'function.php';

  echo do_hash('3123df3ee8ffa1f13bed69b18090a777');

  if($_POST){

    //ຮັບຄ່າ userid
    $userid = filter_input(INPUT_POST, 'userid', FILTER_SANITIZE_SPECIAL_CHARS);

    //ຮັບຄ່າ password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    //ເຂົ້າລະຫັດ md5 ໃຫ້ກັບ password
    $password = md5($password);

    //ເລືອກເອົາ record ທີ່ມີ userid
    $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$userid'");

    //ດຶງຂໍ້ມູນມາເກັບທີ່ໂຕປ່ຽນ data
    $data = mysqli_fetch_array($result);
    echo mysqli_error($con);

    //ທຳການກວດສອບລະຫັດຜ່ານດ້ວຍຄຳສັ່ງ password_verify ລະຫວ່າງ password ທີ່ຖືກສົງມາ ແລະ ໂຕທີ່ເກັບໃນຖານຂໍ້ມູນ
    if(password_verify($password, $data['password'])){
      //ຖ້າວ່າມີການ verify ທີ່ຖືກຕ້ອງຈະສ້າງ SESSION ຂຶ້ນມາ

      //ສ້າງ sesion ຊື່ login ມີຄ່າເປັນ true ເຊິ່ງເປັນ boolean
      $_SESSION['login'] = true;

      //ສ້າງ session ຊື່ userid ມີຄ່າເປັນ userid ທີ່ລ໊ອກອິນເຂົ້າມາ ມີຄ່າເປັນ string
      $_SESSION['username'] = $userid;

      //ສ້າງ session ຊື່ role ເພື່ອເກັບລະດັບຂອງຜູ້ໃຊ້ງານລະບົບ ຖ້າເປັນ 0 ແມ່ນຜູ້ດູແລ, ເປັນ 1 ແມ່ນພະນັກງານທົ່ວໄປ
      $_SESSION['role'] = $data['role'];

      //ສ້າງ session ຊື່ sid ມີຄ່າເທົ່າກັບ session id ທີ່ທາງ ຝັ່ງ server ສ່້າງຂຶ້ນ
      $_SESSION['sid'] = session_id();

      //ສ້າງ redirect ເຂົ້າໜ້າ index
      header('Location: index.php');
    }else{
      //ໃນກໍລະນີທີ່ verify ບໍ່ຜ່ານແມ່ນໃຫ້ redirect ກັບໄປທີ່ໜ້າ login
      //ພ້ອມກັບສົ່ງ error code ຜ່ານທາງ url
      header('Location: login.php?error=1');
    }

  }
 ?>
