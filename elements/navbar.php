<nav id="navbarTop" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">เปิดเมนู</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" herf="#">
	    <img alt="Amara" src="img/amaralogo.svg" style="height:1.3em; filter: drop-shadow(0 0 1em white);">
	  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="navHome"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> หน้าแรก</a></li>
        <!--<li id="navLearn"><a href="learn.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> เรียน "อมรา"</a></li>-->
        <li id="navCode"><a href="codeJS.php"><i class="fa fa-code" aria-hidden="true"></i> เขียนโปรแกรม</a></li>
		<!--
        <li id="navTranslate" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-exchange" aria-hidden="true"></i> แปลภาษา <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="disabled"><a href="#">อมรา <i class="fa fa-angle-right" aria-hidden="true"></i> Lua --><!--<span class="label label-danger">Alpha</span>--><!--</a></li>
            <li class="disabled"><a href="#">อมรา <i class="fa fa-angle-right" aria-hidden="true"></i> Python</a></li>
            <li class="disabled"><a href="#">อมรา <i class="fa fa-angle-right" aria-hidden="true"></i> Ruby</a></li>
            <!--
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            --><!--
          </ul>
        </li>

        <li id="navWB"><a href="board.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Q&amp;A</a></li>-->
        <li id="navContact"><a href="https://www.facebook.com/AmaraProgramming/"><i class="fa fa-facebook-official" aria-hidden="true"></i> Fanpage</a></li>
      </ul>
	  <!--
      <ul class="nav navbar-nav navbar-right">
        <li id="navAuth"><a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user-circle" aria-hidden="true"></i> ลงชื่อเข้าใช้</a></li>


        --><!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      --><!--
      </ul>
	  -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- loginModal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size:1.4em;">&times;</span></button>
        <h4 class="modal-title" id="loginModalLabel">เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
        <form action="auth/authAction.php" method="post">
          <div class="form-group">
            <label for="loginEmail">ชื่อผู้ใช้/อีเมล</label>
            <input type="email" class="form-control" name="authUsername" id="loginEmail" placeholder="ชื่อผู้ใช้/อีเมล">
          </div>
          <div class="form-group">
            <label for="loginPassword">รหัสผ่าน</label>
            <input type="password" class="form-control" name="authPassword" id="loginPassword" placeholder="รหัสผ่าน">
          </div>
          <button type="submit" class="btn btn-primary btn-block"  name="authLogin">เข้าสู่ระบบ</button>
        </form>
      </div>
      <div class="modal-footer">
        <a class="norm" href="forgetpass.php">ลืมรหัสผ่าน?</a>&emsp;
        <a class="norm" href="signup.php">สมัครสมาชิก</a>
      </div>
    </div>
  </div>
</div>

<nav id="navbarFooter" class="navbar navbar-default navbar-fixed-bottom hidden-xs">
  <div class="container">
    <p class="navbar-text navbar-right">Copyright &copy; <?php date_default_timezone_set("Asia/Bangkok"); echo date("Y"); ?> "kruchotika.com" All right reserved.</p>
  </div>
</nav>
