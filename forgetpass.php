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
          <h1>ลืมรหัสผ่าน</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container whiteBG">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <form action="action/authAction.php" method="post">
          <div class="form-group">
            <label for="authEmail" class="control-label">อีเมล</label>
            <input type="email" class="form-control" name="authEmail" id="authEmail" placeholder="อีเมล"  aria-describedby="newpassByEmail">
            <span id="newpassByEmail" class="help-block">รหัสผ่านใหม่จะถูกส่งไปยังอีเมลของท่าน</span>
          </div>

          <hr>

          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="authForget">ส่งรหัสผ่านใหม่</button>
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
