<?
  if(isset($_GET['p'])){
    switch ($_GET['p']) {
      case 1: // โปรแกรมสวัสดี
        $code = '<div>/* โปรแกรมสวัสดี */</div><div><br></div><div>ประกาศ name;</div><div>name = รับ("กรุณาใส่ชื่อ");</div><div>แสดง("สวัสดี " + name);</div>';
        break;
      case 2: // โปรแกรมหาพื้นที่วงกลม
        $code = '<div>/* โปรแกรมหาพื้นที่วงกลม */</div><div><br></div><div>ประกาศ r;</div><div>ประกาศ area;</div><div>r = รับ("กรุณาใส่รัศมีวงกลม");</div><div>area = r * r * 3.14;</div><div>แสดง("พื้นที่วงกลมรัศมี " + r + " คือ " + area);</div>';
        break;
      case 3: // โปรแกรมตัดเกรด
        $code = '<div>/* โปรแกรมตัดเกรด */</div><div><br></div>ประกาศ score;<div>score = รับ("กรุณาใส่คะแนน");</div><div>ถ้า(score&lt;50){</div><div>แสดง("เกรด F");</div><div>}ไม่ก็ถ้า(score&lt;60){</div><div>แสดง("เกรด D");</div><div>}ไม่ก็ถ้า(score&lt;70){</div><div>แสดง("เกรด C");</div><div>}ไม่ก็ถ้า(score&lt;80){</div><div>แสดง("เกรด B");</div><div>}ไม่ก็{</div><div>แสดง("เกรด A");</div><div>}</div>';
        break;
      case 4: // โปรแกรมวาดกล่องจากตัวอักษร
        $code = '<div>/* โปรแกรมวาดกล่องสี่เหลี่ยม */</div><div><br></div><div>ประกาศ i;</div><div>ประกาศ j;</div><div>ประกาศ result = "";</div><div>ประกาศ row;</div><div>row = รับ("ใส่จำนวนแถว");</div><div>วน (i) จาก (1) ถึง (row) โดย (1){</div><div>วน (j) จาก (1) ถึง (row) โดย (1){</div><div>ถ้า(i==1 หรือ j==1 หรือ j==row หรือ i==row){</div><div>result += "0";</div><div>}ไม่ก็{</div><div>result += " &nbsp;";<br></div><div>}</div><div>}</div><div>result += "\n";</div><div>}</div><div>แสดง(result);</div>';
        break;
      case 5: // โปรแกรมแยกตัวประกอบ
        $code = '<div>/* โปรแกรมแยกตัวประกอบ */</div><div><br></div><div>ประกาศ num;</div><div>ประกาศ p = 2;</div><div>num = รับ("ใส่จำนวนที่ต้องการแยกตัวประกอบ");</div><div>ประกาศ str = num + " = 1";</div><div>เมื่อ ((num&gt;1) และ (p&lt;num)) {</div><div>ถ้า(num%p==0) {</div><div>str = str + " x " + p;</div><div>num = num/p;</div><div>p=2;</div><div>} ไม่ก็ {</div><div>p +=1;</div><div>}</div><div>} //while</div><div>str = str + " x " + p // เพิ่มตัวที่ไม่ลง</div><div>แสดง(str);</div>';
        break;
      case 6: // โปรแกรมแจกแจงเงินเป็นธนบัตร/เหรียญ
        $code = '<div>/* โปรแกรมแจกแจงเงินเป็นธนบัตร/เหรียญ */</div><div><br></div><div>ประกาศ save ,money, rem,&nbsp;<span>th=0, hTh</span><span>=0</span><span>, h</span><span>=0</span><span>, hH</span><span>=0</span><span>, tw</span><span>=0</span><span>, t</span><span>=0</span><span>, f</span><span>=0</span><span>, d</span><span>=0</span><span>; //1000 500 100 50 20 10 5 2</span></div><div>money = รับ("กรุณาใส่จำนวนเงิน");</div><div>save = money;</div><div>if(money&gt;1000-1){</div><div>rem = money%1000;</div><div>money -= rem;</div><div>th = money/1000;</div><div>money /= 1000;</div><div>money = money + rem - th;</div><div>}</div><div><div>if(money&gt;500-1){</div><div>rem = money%500;</div><div>money -= rem;</div><div>hTh = money/500;</div><div>money /= 500;</div><div>money = money + rem - hTh;</div><div>}</div></div><div><div>if(money&gt;100-1){</div><div>rem = money%100;</div><div>money -= rem;</div><div>h = money/100;</div><div>money /= 100;</div><div>money = money + rem - h;</div><div>}</div><div><div>if(money&gt;50-1){</div><div>rem = money%50;</div><div>money -= rem;</div><div>hH = money/50;</div><div>money /= 50;</div><div>money = money + rem - hH;</div><div>}</div><div><div>if(money&gt;20-1){</div><div>rem = money%20;</div><div>money -= rem;</div><div>tw = money/20;</div><div>money /= 20;</div><div>money = money + rem - tw;</div><div>}</div><div><div>if(money&gt;10-1){</div><div>rem = money%10;</div><div>money -= rem;</div><div>t = money/10;</div><div>money /= 10;</div><div>money = money + rem - t;</div><div>}</div><div><div>if(money&gt;5-1){</div><div>rem = money%5;</div><div>money -= rem;</div><div>f = money/5;</div><div>money /= 5;</div><div>money = money + rem - f;</div><div>}</div><div><div>if(money&gt;2-1){</div><div>rem = money%2;</div><div>money -= rem;</div><div>d = money/2;</div><div>money /= 2;</div><div>money = money + rem - d;</div><div>}</div><div>แสดง("จำนวนเงินทั้งหมด "+save+" บาท ประกอบด้วย\n &nbsp; - ธนบัตร 1000 บาท "+th+" ใบ\n &nbsp; - ธนบัตร 500 บาท "+hTh+" ใบ\n &nbsp; - ธนบัตร 100 บาท "+h+" ใบ\n &nbsp; - ธนบัตร 50 บาท "+hH+" ใบ\n &nbsp; - ธนบัตร 20 บาท "+tw+" ใบ\n &nbsp; - เหรียญ 10 บาท "+t+" เหรียญ\n &nbsp; - เหรียญ 5 บาท "+f+" เหรียญ\n &nbsp; - เหรียญ 2 บาท "+d+" เหรียญ\n &nbsp; - เหรียญ 1 บาท "+money+" เหรียญ");</div></div></div></div></div></div></div>';
        break;
      default:
        $code = "";
        break;
    }
  }
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Maitree" rel="stylesheet">
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_code.css">
  <script src="lang_lib/translateJS.js"></script>
  <script>
    var stdIoChecker;
    var displayIoChecker;
    var codeInputFontSize = 15;

    function codeZoomIn(){
      codeInputFontSize++;
      codeInput.style.fontSize = codeInputFontSize/10 + "em";
      codeOutput.style.fontSize = codeInputFontSize/10 + "em";
      zoomNumDisplay.value = codeInputFontSize/10 + "x";
    }

    function codeZoomOut(){
      codeInputFontSize--;
      codeInput.style.fontSize = codeInputFontSize/10 + "em";
      codeOutput.style.fontSize = codeInputFontSize/10 + "em";
      zoomNumDisplay.value = codeInputFontSize/10 + "x";
    }

    function stdIo(){
      stdIoChecker = document.getElementById('stdIoChecker').checked;
    }

    function displayIo(){
      displayIoChecker = document.getElementById('displayIoChecker').checked;
    }

    function convertCode(){
      codeOutput.innerHTML = translateCode(codeInput.innerText,displayIoChecker,stdIoChecker);
      codeForm.value = codeOutput.innerText;
    }

    function codeUpdate() {
      stdIo();
      displayIo();
      convertCode();
    }

    function copyCode() {
        if (document.selection) {
            var range = document.body.createTextRange();
            range.moveToElementText(document.getElementById("codeOutput"));
            range.select();
        } else if (window.getSelection) {
            var range = document.createRange();
            range.selectNode(document.getElementById("codeOutput"));
            window.getSelection().addRange(range);
        }
    }
  </script>
</head>

<body onload="document.getElementById('codeInput').focus()" class="background">
    <? include_once "elements/navbar.php" ?>

    <div class="container whiteBG">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default" style="margin-bottom:0;">
            <div class="panel-heading">
              <h3 class="text-center" style="margin-top: 10px;">อมรา <i class="fa fa-angle-right" aria-hidden="true"></i> JavaScript</h3>
            </div>
            <div class="panel-body" id="codeArea" style="height:53vh;">
              <div class="col-sm-6 col-xs-12" style="height:100%;">
                <div contenteditable="true" class="form-control" id="codeInput" oninput="codeUpdate()">
                  <? echo $code; ?>
                </div>
              </div>
              <div class="col-sm-6 hidden-xs" style="height:100%;">
                <div id="codeOutput" class="form-control" onclick="copyCode()" data-toggle="tooltip" data-placement="bottom"  title="คลิกเพื่อเลือกโค้ดทั้งหมด">

                </div>
              </div>
            </div>
            <div class="panel-footer">

              <div class="btn-toolbar form-inline" role="toolbar" aria-label="Toolbar">

                <form action="runJS.php" method="post" class=" pull-right" target="_blank">
                  <input type="hidden" name="code" id="codeHidden">
                    <div class="checkbox pull-left" style="margin-right:1em;" data-toggle="tooltip" data-placement="bottom"  title="ใช้ฟังก์ชั่นของ JS โดยไม่ผ่านฟังก์ชั่น I/O ของอมรา">
                      <label class="checkbox-inline" title="แทนฟังก์ชั่นลงในหน้าต่าง Output">
                        <input type="checkbox" id="stdIoChecker" onclick="codeUpdate()"> ใช้ฟังก์ชั่น I/O
                      </label>
                    </div>

                    <div class="checkbox pull-left" style="margin-right:1em;" data-toggle="tooltip" data-placement="bottom"  title="แสดงฟังก์ชั่น I/O ของอมรา">
                      <label class="checkbox-inline" title="แสดงฟังก์ชั่นในหน้าต่าง Output">
                        <input type="checkbox" id="displayIoChecker" onclick="codeUpdate()"> แสดงฟังก์ชั่น I/O
                      </label>
                    </div>

                    <div class="input-group" role="group" aria-label="Zoom" style="margin-right:1em; width:10em;" data-toggle="tooltip"  data-placement="bottom" title="ย่อ/ขยาย">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default" onclick="codeZoomOut()"><i class="fa fa-minus" aria-hidden="true"></i></button>
                      </div>
                      <input id="zoomNum" type="text" class="form-control text-center" readonly value="1.5x">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default" onclick="codeZoomIn()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                    </div>

                    <!-- <button class="btn btn-default" type="button" onclick="copyCode()" style="margin-right:1em;"><i class="fa fa-i-cursor" aria-hidden="true"></i> Select All</button> -->

                    <button class="btn btn-primary" type="submit">Run <i class="fa fa-play" aria-hidden="true"></i></button>
                </form>
              </div>
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
      var codeInput = document.getElementById("codeInput");
      var codeOutput = document.getElementById("codeOutput");
      var codeForm = document.getElementById("codeHidden");
      var zoomNumDisplay = document.getElementById("zoomNum");
      codeUpdate();
      document.getElementById("navCode").className += "active";
    </script>
</body>

</html>
