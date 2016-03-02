<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8" >
    <title>Insert User</title>
    <script type="text/javascript" src="jquery-1.11.3.js"></script>
    <script type="text/javascript">
      //ນີ້ແມ່ນສ່ວນພາສາ javascript
      $(document).ready(function(){
        var form = $(#user-form); //ປະກາດ form ຮັບຈາກ #user-form
        var submit = $(#add-user); //ປະກາດ submit ຮັບຈາກ #add-user
        var alert = $(#alert); //ປະກາດ alert ຮັບຈາກ #alert

        form.on('add-user', function(e){
          e.prevenDefault();

          $.ajax({
            url: 'register-process.php',
            type: 'POST';
            dataType: 'html',
            data: form.serialized(),
            beforeSend: function(){
              alert.fadeOut();
              submit.html('Adding...');
            },
            success: function(e){
              alert.html(e).fadeIn();
              form.trigger('reset'); //reset form
              submit.html('User Added');
            },
            error: function(e){
              console.log(e);
            }
          });
        });
      });


    </script>

  </head>
  <body>
    <h2>Insert User without reload page</h2>

    <div id="alert"></div>

    <form id="user-form" action="" method="post">
      <table>
        <tr>
          <td>
            <input type="text" name="username" placeholder="Enter username">
          </td>
        </tr>
        <tr>
          <td>
            <input type="password" name="password" placeholder="Enter password">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="firstname" placeholder="Enter firstname">
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="lastname" placeholder="Enter lastname">
          </td>
        </tr>
        <tr>
          <td>
            <input type="button" id="add-user" value="GO">
          </td>
        </tr>
      </table>
    </form>
    <div>
      <p>
        Status: <span id="result"></span>
      </p>
    </div>
  </body>
</html>
