<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Maitree" rel="stylesheet">
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_learn.css">
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
        <form action="runJS.php" method="post" target="_blank">

          <!--

            โค้ดเพิ่มช่องไว้ใส่ตัวอย่างโค้ดให้ผู้ใช้ลอง run เล่น

            <div class="input-group">
              <input id="code99" type="text" class="form-control" placeholder='คำสั่งที่แสดงเมื่อลบหมด' value='คำสั่งที่พิมพ์ให้เลย'>
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit" onclick="runCode('code99');">Run <i class="fa fa-play" aria-hidden="true"></i></button>
              </span>
            </div>

            จุดที่ต้องเปลี่ยน
            - id="code99" เปลี่ยน code99 เป็นอันอื่นหรือชื่อที่สอดคล้องกับคำสั่ง
            - placeholder='คำสั่งที่แสดงเมื่อลบหมด' เป็นคำสั่ง ในกรณีที่ผู้ใช้ลบข้อความออกจากกล่องข้อความหมด
            - value='คำสั่งที่พิมพ์ให้เลย' เป็นคำสั่งที่พิมพ์ไว้ให้สามารถกด Run ได้เลย
            - onclick="runCode('code99');" เป็นชื่อตาม id ในข้อแรก

            อื่นๆ
            - เวลาพิมพ์เนื้อหา แล้วมีโค้ด ให้ใช้ <code></code> ครอบไว้ด้วย เช่น <code>ประกาศ name;</code>
            - ย่อหน้าด้วย &emsp;
            - ขึ้นบรรทัดใหม่ด้วย <br>
            - โค้ดต้องใส่ ; ปิดด้วย
          -->

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
                <div class="input-group">
                  <input id="code00" type="text" class="form-control" placeholder='แสดง("ข้อความ");' value='แสดง("อมรา");'>
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" onclick="runCode('code00');">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                  </span>
                </div><br>
                &emsp;ในกรณีที่เราต้องการให้แสดงข้อความหลายบรรทัด เราสามารถใช้คำสั่ง <code>\n</code> เพื่อให้แสดงข้อความอีกบรรทัดได้ เช่น<br>
                <div class="input-group">
                  <input id="code01" type="text" class="form-control" placeholder='แสดง("ข้อความ\nข้อความ");' value='แสดง("สวัสดี\nอมรา");'>
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" onclick="runCode('code01');">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                  </span>
                </div><br>
                &emsp;โดยปกติแล้ว " ' และ \ เป็นตัวอักษรพิเศษสำหรับคอมพิวเตอร์ ถ้าหากเราต้องการแสดง ตัวอักษร " ' และ \ เราสามารถพิมพ์ในลักษณะ <code>\"</code> <code>\'</code> และ <code>\\</code> ได้ เช่น<br>
                <div class="input-group">
                  <input id="code02" type="text" class="form-control" placeholder='แสดง(" \&#39; \&quot; \\ ");' value='แสดง(" \&#39; \&quot; \\ ");'>
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" onclick="runCode('code02');">Run <i class="fa fa-play" aria-hidden="true"></i></button>
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

          <!-- All the magic happens here... -->
          <div id="codeOutput" style="display:none;"></div>
          <input type="hidden" name="code" id="codeHidden">

        </form>
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
