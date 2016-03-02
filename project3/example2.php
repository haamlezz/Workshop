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
        document.getElementById('show').innerHTML = 'Hello, ' + nickname;
      }
    </script>
  </head>
  <body>
    <form>
      <input type="text" name="nick_name" id="nick_name" placeholder="Enter Nickname">
      <input type="button" value="Show" onclick="Get_Nickname()">
    </form>

    <div id="show">
      
    </div>
  </body>
</html>
