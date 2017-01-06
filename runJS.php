<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>

  <script>
  window.onerror = function(msg, url, linenumber){
    alert('เกิดข้อผิดพลาด!\n\n'+msg+'\n\nบรรทัดที่: '+(linenumber-44));
    window.close();
    return true;
  }
  </script>
</head>
<body style="background-color:rgb(51,51,51); overflow:hidden;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center" style="color:white; font-family: 'Prompt', sans-serif; padding-top: 70px; font-size:5em">
        <i class="fa fa-cog fa-spin" style="font-size:5em;"></i><br>
        กำลังรัน <i class="fa fa-code" aria-hidden="true"></i><br>
        <small style="font-size:2rem; position:relative; top:-48px;">หน้าต่างนี้จะปิดโดยอัตโนมัติถ้าหากไม่มีความผิดพลาด</small>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script>
  function main(){
    "use strict";
    <?
    echo $_POST['code'];
    ?>
  }

  function input(text){
    return window.prompt(text, "");
  }

  function output(text){
    window.alert(text);
  }

  main();
  window.close();
  </script>
</body>
</html>
