<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8" >
    <title>JavaScript</title>
    <script type="text/javascript">
      //ນີ້ແມ່ນສ່ວນພາສາ javascript
      function Get_Nickname(){
        var nickname;
        nickname = document.getElementById('nick_name').value;
        document.getElementById('show').innerHTML = nickname;
      }
    </script>
  </head>
  <body>
    <form>
      <input type="text" name="nick_name" id="nick_name" placeholder="Enter Nickname" onkeyup="Get_Nickname()">
    </form>

    <div id="">
        <p>
          Hello, <span id="show"></span>
        </p>
    </div>
  </body>
</html>
