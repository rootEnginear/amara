<!DOCTYPE html>
<html lang="th">
<head>
  <? include_once "elements/head.html" ?>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Maitree" rel="stylesheet">
  <link rel="stylesheet" href="style/style_core.css">
  <link rel="stylesheet" href="style/style_code.css">
  <script src="lang_lib/translateJS.js"></script>
  <script>
  var stdIoChecker; /* # */
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

                </div>
              </div>
              <div class="col-sm-6 hidden-xs" style="height:100%;">
                <div id="codeOutput" class="form-control" onclick="copyCode()">

                </div>
              </div>
            </div>
            <div class="panel-footer">

              <div class="btn-toolbar form-inline" role="toolbar" aria-label="Toolbar">

                <form action="runJS.php" method="post" class=" pull-right" target="_blank">
                  <input type="hidden" name="code" id="codeHidden">
                    <div class="checkbox pull-left" style="margin-right:1em;">
                      <label class="checkbox-inline" title="แทนฟังก์ชั่นลงในหน้าต่าง Output">
                        <input type="checkbox" id="stdIoChecker" onclick="codeUpdate()"> ใช้ฟังก์ชั่น I/O
                      </label>
                    </div>

                    <div class="checkbox pull-left" style="margin-right:1em;">
                      <label class="checkbox-inline" title="แสดงฟังก์ชั่นในหน้าต่าง Output">
                        <input type="checkbox" id="displayIoChecker" onclick="codeUpdate()"> แสดงฟังก์ชั่น I/O
                      </label>
                    </div>

                    <div class="input-group" role="group" aria-label="Zoom" style="margin-right:1em; width:10em;">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default" onclick="codeZoomOut()"><i class="fa fa-minus" aria-hidden="true"></i></button>
                      </div>
                      <input id="zoomNum" type="text" class="form-control text-center" readonly value="1.5x">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-default" onclick="codeZoomIn()"><i class="fa fa-plus" aria-hidden="true"></i></button>
                      </div>
                    </div>

                    <button class="btn btn-default" type="button" onclick="copyCode()" style="margin-right:1em;"><i class="fa fa-i-cursor" aria-hidden="true"></i> Select All</button>

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
      var codeInput = document.getElementById("codeInput");
      var codeOutput = document.getElementById("codeOutput");
      var codeForm = document.getElementById("codeHidden");
      var zoomNumDisplay = document.getElementById("zoomNum");
      codeUpdate();
      document.getElementById("navCode").className += "active";
    </script>
</body>

</html>
