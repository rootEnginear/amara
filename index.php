<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_index.css">
  <script src="lang_lib/translateJS.js"></script>
  <script>
    function runCode(codeId){
      // raw code from codeId get translate and put into codeOutput and then copy innerText to codeHidden and then run.
      var inputCode = document.getElementById(codeId);
      var outputDiv = document.getElementById('codeOutput');
      var outputHidden = document.getElementById('codeHidden');
      outputDiv.innerHTML = translateCode(inputCode.value);
      outputHidden.value = outputDiv.innerText;
    }
  </script>
</head>
<body class="background">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <? include_once "elements/navbar.php" ?>

  <div class="jumbotron">
    <div class="container">

      <div class="row">
        <div class="col-sm-11 col-md-offset-1">
          <h1 style="margin-top: 0;">"อมรา" <small>เรียนเขียนโปรแกรมง่ายๆ ผ่านคำสั่งภาษาไทย</small></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9 col-md-offset-2">
          <form action="runJS.php" method="post" target="_blank">
            <div class="input-group input-group-lg" id="control_anim">
              <input id="exampleCode" type="text" class="form-control" placeholder='ลองพิมพ์ "แสดง("ชื่อของคุณ");" แล้วกด "Run" ดูซิ!' value='แสดง("สวัสดี...");'  data-toggle="tooltip" data-placement="bottom" data-trigger="focus" title='แสดง("สวัสดี...");'>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit" onclick="runCode('exampleCode');">Run <i class="fa fa-play" aria-hidden="true"></i></button>
              </span>
            </div>
            <div id="codeOutput" style="display:none;"></div>
            <input type="hidden" name="code" id="codeHidden">
          </form>
        </div>
      </div>

    </div>
  </div>

  <div class="container whiteBG">
    <div class="row">
      <div class="col-md-8">
        <div class="col-md-12">
  				<div class="panel panel-default">
  					<div class="panel-heading"><img src="img/coding_example01.PNG" alt="Example" class="img-responsive center-block"></div>
  					<div class="panel-body">
              <h1>อมรา <small>คืออะไร?</small></h1>
  						<p>&emsp;อมรา (อะ-มะ-รา) คือชุดคำสั่งเขียนโปรแกรมในภาษาไทยที่ใช้ภาษา JavaScript เป็นฐานหลัก โดยมีจุดประสงค์เพื่อให้การเขียนโปรแกรมนั้นสามารถเข้าใจระบบการทำงานได้ง่ายมากขึ้น และสามารถใช้เขียนโปรแกรมอย่างง่ายได้</p>
  					</div>
  				</div>
  			</div>
      </div>
      <div class="col-md-4">
		<a class="btn btn-success btn-lg btn-block" href="codeJS.php"><i class="fa fa-code" aria-hidden="true"></i> เขียนโปรแกรม</a>
		<hr>
       <div class="panel panel-default">
          <div class="panel-body">
            <h1>ตัวอย่างโปรแกรม</h1>
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="codeJS.php?p=1">โปรแกรมสวัสดี</a></li>
              <li role="presentation"><a href="codeJS.php?p=2">โปรแกรมหาพื้นที่วงกลม</a></li>
              <li role="presentation"><a href="codeJS.php?p=3">โปรแกรมตัดเกรด</a></li>
              <li role="presentation"><a href="codeJS.php?p=4">โปรแกรมวาดกล่องสี่เหลี่ยม</a></li>
              <li role="presentation"><a href="codeJS.php?p=5">โปรแกรมแยกตัวประกอบ</a></li>
              <li role="presentation"><a href="codeJS.php?p=6">โปรแกรมแจกแจงเงินเป็นธนบัตร/เหรียญ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
	<nav id="navbarFooter" class="navbar navbar-default navbar-fixed-bottom hidden-xs">
  <div class="container">
    <p class="navbar-text navbar-right">Copyright &copy; <?php date_default_timezone_set("Asia/Bangkok"); echo date("Y"); ?> Amara All right reserved.</p>
  </div>
</nav>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
  <script>
    document.getElementById("navHome").className += "active";
  </script>
</body>
</html>
