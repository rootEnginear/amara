<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Maitree" rel="stylesheet">
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_learn.css">
</head>
<body class="background">
  <? include_once "elements/navbar.php" ?>

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1><small>เรียน</small> "อมรา"</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container whiteBG">
    <div class="row">
      <div class="col-sm-3">
        <div id="sidebar" class="panel panel-default" data-spy="affix" data-offset-top="222">
          <div class="panel-heading"><h1><small>เริ่มต้นกับ</small> อมรา</h1></div>
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="#learn_intro">แนะนำภาษา</a></li>
              <li role="presentation"><a href="#learn_output">แสดงข้อความ</a></li>
              <li role="presentation"><a href="#">ประกาศตัวแปร</a></li>
              <li role="presentation"><a href="#">รับค่า</a></li>
              <li role="presentation"><a href="#">แนะนำภาษา</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-9">

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แนะนำภาษา</h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แสดงข้อความ</h1></div>
          <div class="panel-body">
            <p>
              &emsp;พื้นฐานแรกที่ทุกคนจะได้เรียนรู้เมื่อเขียนโปรแกรม คือการแสดงค่าออกมาทางหน้าจอ โดยสามารถให้ "อมรา" แสดงข้อความออกมาทางหน้าจอได้โดยการพิมพ์คำสั่ง <code>แสดง("ข้อความ");</code> เช่น<br>
              <div class="input-group input-group-lg" id="control_anim">
                <input id="exampleCode" type="text" class="form-control" placeholder='แสดง("ข้อความ");' value='แสดง("อมรา");'>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" onclick="displayName();">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                </span>
              </div><br>
              &emsp;ในกรณีที่เราต้องการให้แสดงข้อความหลายบรรทัด เราสามารถใช้คำสั่ง <code>\n</code> เพื่อให้แสดงข้อความอีกบรรทัดได้ เช่น<br>
              <div class="input-group input-group-lg" id="control_anim">
                <input id="exampleCode" type="text" class="form-control" placeholder='แสดง("ข้อความ \n ข้อความ");' value='แสดง("สวัสดี \n อมรา");'>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" onclick="displayName();">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                </span>
              </div><br>
              &emsp;โดยปกติแล้ว " ' และ \ เป็นตัวอักษรพิเศษสำหรับคอมพิวเตอร์ ถ้าหากเราต้องการแสดง ตัวอักษร " ' และ \ เราสามารถพิมพ์ในลักษณะ <code>\"</code> <code>\'</code> และ <code>\\</code> ได้ เช่น<br>
              <div class="input-group input-group-lg" id="control_anim">
                <input id="exampleCode" type="text" class="form-control" placeholder='แสดง("");' value='แสดง("");'>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button" onclick="displayName();">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                </span>
              </div><br>
            </p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แนะนำภาษา</h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แนะนำภาษา</h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แนะนำภาษา</h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><h1>แนะนำภาษา</h1></div>
          <div class="panel-body">
            <p>&emsp;อมรา ไม่ได้ทำขึ้นเพื่อช่วยให้คนไทยสามารถเรียนรู้พื้นฐานการเขียนโปรแกรมได้เท่านั้น แต่ยังสามารถนำไปต่อยอดยังภาษาอื่นๆ เช่น Javascript, Lua, Python, Ruby และอื่นๆ ได้อีกมากมาย</p>
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
    document.getElementById("navLearn").className += "active";
  </script>
</body>
</html>
