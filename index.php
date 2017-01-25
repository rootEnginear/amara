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
  <? include_once "elements/navbar.php" ?>

  <div class="jumbotron">
    <div class="container">

      <div class="row">
        <div class="col-sm-11 col-md-offset-1">
          <h1>"อมรา" <small>เรียนเขียนโปรแกรมง่ายๆ ผ่านคำสั่งภาษาไทย</small></h1>
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
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h1>อมรา <small>คืออะไร?</small></h1></div>
					<div class="panel-body">
						<p>&emsp;อมรา คือชุดคำสั่งเขียนโปรแกรมในภาษาไทยที่ใช้ภาษา JavaScript เป็นฐานหลัก โดยมีจุดประสงค์เพื่อให้การเขียนโปรแกรมนั้นสามารถเข้าใจระบบการทำงานได้ง่ายมากขึ้น และสามารถใช้เขียนโปรแกรมอย่างง่ายได้</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><h1>ดูตัวอย่างโปรแกรม</h1></div>
					<div class="panel-body">
						<div class="col-md-6">
							<ul class="nav nav-pills nav-stacked">
							  <li role="presentation"><a href="#">โปรแกรมสวัสดี</a></li>
							  <li role="presentation"><a href="#">โปรแกรมตัดเกรด</a></li>
							  <li role="presentation"><a href="#">โปรแกรมแยกตัวประกอบ</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="nav nav-pills nav-stacked">
							  <li role="presentation"><a href="#">โปรแกรมหาพื้นที่วงกลม</a></li>
							  <li role="presentation"><a href="#">โปรแกรมวาดกล่องจากตัวอักษร</a></li>
							  <li role="presentation"><a href="#">โปรแกรมแจกแจงเงินเป็นธนบัตร/เหรียญ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<img src="img/coding_example01.PNG" alt="Example" class="img-responsive"><br>
			</div>
			<div class="col-md-12">
				<img src="img/coding_example02.PNG" alt="Result of Example" class="img-responsive"><br>
			</div>
		</div>
	</div>

    <hr>

    <div class="row">
		<div class="col-md-4">
			<img src="img/team_portrait_01.jpg" alt="Amara Founder" class="img-circle img-responsive"><br>
			<div class="panel panel-default">
			  <div class="panel-heading"><h1>สุเทพ จันทร์ชูผล<br><small>&emsp;Amara Founder</small></h1></div>
			  <div class="panel-body">
				<h3>"... ทุกคนควรที่จะเขียนโปรแกรมด้วยความเข้าใจ ไม่ใช่ท่องจำ ..."</h3> 
				<p>&emsp;การเขียนโปรแกรมเป็นพื้นฐานที่ดีในการฝึกการคิดอย่างเป็นระบบ และช่วยให้สามารถคิดหาวิธีแก้ไขปัญหาได้อย่างเป็นขั้นเป็นตอน ผมเชื่อว่าภาษา "อมรา" จะช่วยเป็นพื้นฐานที่ดี และจะพัฒนาโปรแกรมเมอร์ชาวไทยที่มีฝีมือออกมาอีกมากมาย</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<img src="img/team_portrait_02.jpg" alt="Exclusive Designer" class="img-circle img-responsive"><br>
			<div class="panel panel-default">
			  <div class="panel-heading"><h1>ณัฐวุฒิ พ่วงภู่<br><small>&emsp;Exclusive Designer</small></h1></div>
			  <div class="panel-body">
				<h3>"... พื้นฐานในการเขียนโปรแกรมที่ดีย่อมทำให้เกิดการเรียนรู้อย่างมั่นคง ..."</h3>
				<p>&emsp;กระบวนการคิดวิเคราะห์และออกแบบงานต่างๆ ต้องเกิดจากการเชื่อมโยงหลายๆ สิ่งเข้าด้วยกัน โปรแกรมเมอร์เองก็จำเป็นที่จะต้องออกแบบโปรแกรมให้มีความสวยงามน่าใช้ ดีไซน์เนอร์เอง ก็จำเป็นที่จะต้องนำโปรแกรมเข้ามาช่วยออกแบบงานให้ตอบโจทย์มากที่สุดเช่นกัน</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4">
			<img src="img/team_portrait_03.jpg" alt="ผู้พัฒนา Amara" class="img-circle img-responsive"><br>
				<div class="panel panel-default">
			    <div class="panel-heading"><h1>รัชกฤช ทวีจารุภัทร<br><small>&emsp;Application Developer</small></h1></div>
			    <div class="panel-body">
					<h3>"... รอบตัวเราทุกวันนี้มีแต่โปรแกรม ..."</h3>
					<p>&emsp;โทรศัพท์ โทรทัศน์ แม้แต่เครื่องซักผ้าของคุณเองก็ยังใช้การเขียนโปรแกรมมาเพื่อควบคุมพวกมัน ถ้าคุณไม่หัดเขียนมันตั้งแต่ตอนนี้ พรุ่งนี้คุณจะคุยกับเขา "ไม่รู้เรื่อง" //ตึ่งโป๊ะ</p>
			    </div>
			</div>
		</div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
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
