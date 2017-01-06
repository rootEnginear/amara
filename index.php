<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_index.css">
  <script>
    function displayName(){
      var exampleCode = document.getElementById('exampleCode').value;
      var name = exampleCode.replace(/แสดง\("(.+?)"\);*/g, "$1");
      if(name != ""){
        alert(name);
      }
    }
  </script>
</head>
<body class="background">
  <? include_once "elements/navbar.php" ?>

    <div class="jumbotron">
      <div class="container">

      <div class="row">
        <div class="col-sm-10 col-md-offset-1" id="title_anim">
          <h1>"อมรา" <small>เรียนเขียนโปรแกรมง่ายๆ ผ่านคำสั่งภาษาไทย</small></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9 col-md-offset-2">
          <div class="input-group input-group-lg" id="control_anim">
            <input id="exampleCode" type="text" class="form-control" placeholder='ลองพิมพ์ "แสดง("ชื่อของคุณ");" แล้วกด "Run" ดูซิ!' value='แสดง("สวัสดี...");'>
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button" onclick="displayName();">Run <i class="fa fa-play" aria-hidden="true"></i></button>
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container whiteBG">
    <div class="row">
      <div class="col-md-4 col-md-push-4">
        <img src="img/coding_example.PNG" alt="Amara" class="img-thumbnail img-responsive center-block">
      </div>
      <div class="col-md-4 col-md-pull-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>อมรา <small>คืออะไร</small></h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา คือชุดคำสั่งเขียนโปรแกรมที่ดัดแปลงมาจากภาษา Javascript เพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรม และสามารถนำไปต่อยอดยังภาษาอื่นๆ ได้อีกต่อไป</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>อมรา <small>ทำมาเพื่ออะไร</small></h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-4">
        <img src="img/team_portrait_01.jpg" alt="Amara Founder" class="img-circle img-responsive">
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>สุเทพ จันทร์ชูผล<br><small>&emsp;Amara Founder</small></h1></div>
          <div class="panel-body">
            <p><h3>"... ทุกคนควรที่จะเขียนโปรแกรมด้วยความเข้าใจ ไม่ใช่ท่องจำ ..."</h3> &emsp;การเขียนโปรแกรมเป็นพื้นฐานที่ดีในการฝึกการคิดอย่างเป็นระบบ และช่วยให้สามารถคิดหาวิธีแก้ไขปัญหาได้อย่างเป็นขั้นเป็นตอน ผมเชื่อว่าภาษา "อมรา" จะช่วยเป็นพื้นฐานที่ดี และจะพัฒนาโปรแกรมเมอร์ชาวไทยที่มีฝีมือออกมาอีกมากมาย</p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-4 col-md-push-8">
        <img src="img/team_portrait_02.jpg" alt="Exclusive Designer" class="img-circle img-responsive">
      </div>
      <div class="col-md-8 col-md-pull-4">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>ณัฐวุฒิ พ่วงภู่<br><small>&emsp;Exclusive Designer</small></h1></div>
          <div class="panel-body">
            <p><h3>"... พื้นฐานในการเขียนโปรแกรมที่ดีย่อมทำให้เกิดการเรียนรู้อย่างมั่นคง ..."</h3> &emsp;กระบวนการคิดวิเคราะห์และออกแบบงานต่างๆ ต้องเกิดจากการเชื่อมโยงหลายๆ สิ่งเข้าด้วยกัน โปรแกรมเมอร์เองก็จำเป็นที่จะต้องออกแบบโปรแกรมให้มีความสวยงามน่าใช้ ดีไซน์เนอร์เอง ก็จำเป็นที่จะต้องนำโปรแกรมเข้ามาช่วยออกแบบงานให้ตอบโจทย์มากที่สุดเช่นกัน</p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-4">
        <img src="img/team_portrait_03.jpg" alt="ผู้พัฒนา Amara" class="img-circle img-responsive">
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading"><h1>รัชกฤช ทวีจารุภัทร<br><small>&emsp;<del>Janitor</del> Database Administrator</small></h1></div>
          <div class="panel-body">
            <p><h3>"... รอบตัวเราทุกวันนี้มีแต่โปรแกรม ..."</h3> &emsp;โทรศัพท์ โทรทัศน์ แม้แต่เครื่องซักผ้าของคุณเองก็ยังใช้การเขียนโปรแกรมมาเพื่อควบคุมพวกมัน ถ้าคุณไม่หัดเขียนมันตั้งแต่ตอนนี้ พรุ่งนี้คุณจะคุยกับเขา "ไม่รู้เรื่อง" //ตึ่งโป๊ะ</p>
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
    document.getElementById("navHome").className += "active";
  </script>
</body>
</html>
