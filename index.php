<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Simple calculator</title>
    <style>
      #textview {height : 30px;width:178px;
                  background-color:#3330308c;
                  color : white;
                  font-weight:bold;
                  margin-left:4px;
                  font-size:24px;
                  }

      .container {position:absolute; top:30%;left:40%;}
      .button {height:45px;width:37px;background:#3330308c;color:white;margin-right:6px;font-size:20px;}
      .button_zero {height:45px;width:107px;background:#3330308c;color:white;margin-right:6px;font-size:20px;}
      .bg{background:linear-gradient(to right,#ff0060,#8000ff);height:100%;}
    </style>
    <script type="text/javascript">
      function insert(num)
      {
        document.forms.result.value += num ;
      }
      function clearall()
      {
        document.forms.result.value = "";
      }
      function find()
      {
        document.forms.result.value =  eval(document.forms.result.value);
      }
      function backspace()
      {
        var str =   document.forms.result.value;
        str = str.substring(0,str.length - 1);
        document.forms.result.value = str;
      }
    </script>

  </head>
  <body>

      <div class="bg"></div>
      <div class="container">


      <form name="forms" method="post">
            <input type="text" name="result" id="textview" value="">
      </form>

      <table>

          <tr>

              <td><input type="button" class="button" value=" C " onclick="clearall()"></td>
              <td><input type="button" class="button" value=" < " onclick="backspace()"></td>
              <td><input type="button" class="button" value=" / " onclick="insert('/')"></td>
              <td><input type="button" class="button" value=" * " onclick="insert('*')"></td>

          </tr>

          <tr>

              <td><input type="button" class="button" value=" 7 " onclick="insert('7')"></td>
              <td><input type="button" class="button" value=" 8 " onclick="insert('8')"></td>
              <td><input type="button" class="button" value=" 9 " onclick="insert('9')"></td>
              <td><input type="button" class="button" value=" - " onclick="insert('-')"></td>

          </tr>

          <tr>

              <td><input type="button" class="button" value=" 4 " onclick="insert('4')"></td>
              <td><input type="button" class="button" value=" 5 " onclick="insert('5')"></td>
              <td><input type="button" class="button" value=" 6 " onclick="insert('6')"></td>
              <td><input type="button" class="button" value=" + " onclick="insert('+')"></td>

          </tr>

          <tr>

              <td><input type="button" class="button" value=" 1 " onclick="insert('1')"></td>
              <td><input type="button" class="button" value=" 2 " onclick="insert('2')"></td>
              <td><input type="button" class="button" value=" 3 " onclick="insert('3')"></td>
              <td rowspan="5"><input type="button" style="height:102px" class="button" value=" = " onclick="find()"></td>

          </tr>

          <tr>

              <td colspan=2><input class="button_zero" style="width:90px" type="button" value=" 0 " onclick="insert('0')" ></td>
              <td><input type="button" class="button" value=" . " onclick="insert('.')"></td>

          </tr>

      </table>
    </div>
  </body>
</html>