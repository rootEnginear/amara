<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_learn.css">
</head>
<body class="background">
  <? include_once "elements/navbar.php" ?>

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>สมัครสมาชิก</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container whiteBG">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-horizontal" action="action/authAction.php" method="post">
          <div class="form-group">
            <label for="authUsername" class="col-sm-2 control-label">ชื่อผู้ใช้</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="authUsername" id="authUsername" placeholder="ชื่อผู้ใช้">
            </div>
          </div>

          <div class="form-group">
            <label for="authPassword" class="col-sm-2 control-label">รหัสผ่าน</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="authPassword" id="authPassword" placeholder="รหัสผ่าน">
            </div>
          </div>

          <div class="form-group">
            <label for="authEmail" class="col-sm-2 control-label">อีเมล</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="authEmail" id="authEmail" placeholder="อีเมล">
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" name="authSignup" aria-describedby="conditionRegis">สมัครสมาชิก</button>
              <span id="conditionRegis" class="help-block">ในการสมัครสมาชิกนี้ ถือว่าคุณได้ยอมรับใน<a class="norm" href="#">ข้อตกลงและเงื่อนไขการใช้ Amara</a> แล้ว</span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <script>
    document.getElementById("navAuth").className += "active";
  </script>
</body>
</html>
