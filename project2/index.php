<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <h1>ເວັບອັບໂຫຼດເພື່ອມວນຊົນ</h1>
      <h2>Upload 1 - Single File</h2>
    <form method="post" action="upload-process2.php" enctype="multipart/form-data">
      <h3>ກະລຸນາເລືອກຟາຍ ແລ້ວກົດ ອັບໂຫຼດ</h3>
      <input type="file" name="upload[]" id="file" multiple>
      <input type="submit" value="ອັບໂຫຼດ">
    </form>
  </body>
</html>
