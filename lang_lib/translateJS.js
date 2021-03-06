﻿var i = 0;

function translateCode(codeInput,displayIo = false,stdIo = false) {
    var codeTemp = codeInput; // get innerText

    /* ; */
    codeTemp = codeTemp.replace(/;/g, ";<br>");

    /* < > */
    codeTemp = codeTemp.replace(/</g, "&lt;");
    codeTemp = codeTemp.replace(/>/g, "&gt;");
    codeTemp = codeTemp.replace(/&lt;br&gt;/g, "<br>");

    /* var */
    codeTemp = codeTemp.replace(/ประกาศ/g, "var");
    codeTemp = codeTemp.replace(/#var/g, "ประกาศ");

    /* input */
    codeTemp = codeTemp.replace(/รับ/g, "input");
    codeTemp = codeTemp.replace(/#input/g, "รับ");

    /* output */
    codeTemp = codeTemp.replace(/แสดง/g, "output");
    codeTemp = codeTemp.replace(/#output/g, "แสดง");

    /* ask*/
    codeTemp = codeTemp.replace(/ถาม/g, "ask");
    codeTemp = codeTemp.replace(/#ask/g, "ถาม");

    /* if */
    codeTemp = codeTemp.replace(/ถ้า/g, "if");
    codeTemp = codeTemp.replace(/#if/g, "ถ้า");

    /* else */
    codeTemp = codeTemp.replace(/ไม่ก็/g, "else");
    codeTemp = codeTemp.replace(/#else/g, "ไม่ก็");

    /* else if */
    codeTemp = codeTemp.replace(/elseif/g, "else if");

    /* and or */
    codeTemp = codeTemp.replace(/และ/g, "&&");
    codeTemp = codeTemp.replace(/หรือ/g, "||");
    codeTemp = codeTemp.replace(/#&&/g, "และ");
    codeTemp = codeTemp.replace(/#\|\|/g, "หรือ");

    /* switch case */
    codeTemp = codeTemp.replace(/แบ่ง/g, "switch");
    codeTemp = codeTemp.replace(/กรณี/g, "case");
    codeTemp = codeTemp.replace(/อื่นๆ/g, "default");
    codeTemp = codeTemp.replace(/case(.+);/g, "case$1; break;");
    codeTemp = codeTemp.replace(/ต่อ; break;/g, "continue;");
    codeTemp = codeTemp.replace(/#switch/g, "แบ่ง");
    codeTemp = codeTemp.replace(/#case/g, "กรณี");
    codeTemp = codeTemp.replace(/#default/g, "อื่นๆ");

    /* while */
    codeTemp = codeTemp.replace(/เมื่อ/g, "while");
    codeTemp = codeTemp.replace(/#while/g, "เมื่อ");

    /* do while */
    codeTemp = codeTemp.replace(/ทำ([\s\S]*?while)/g, "do$1");

    /* random */
    codeTemp = codeTemp.replace(/สุ่ม\((.+?),(.+?)\)/g, "Math\.floor\(\(Math\.random\(\) \* $2\) + $1\)");

    /* for + */ /* วน i จาก 1 ถึง 10 โดย 1 */
    codeTemp = codeTemp.replace(/วน[ ]*?\((.+?)\)[ ]*?จาก[ ]*?\((.+?)\)[ ]*?ถึง[ ]*?\((.+?)\)[ ]*?โดย[ ]*?\((.+?)\)/g, "for\($1=$2;$1<=$3;$1+=$4\)");

    /* for - */ /* วน i จาก 1 ถึง 10 ลดโดย 1 */
    codeTemp = codeTemp.replace(/วน[ ]*?\((.+?)\)[ ]*?จาก[ ]*?\((.+?)\)[ ]*?ถึง[ ]*?\((.+?)\)[ ]*?ลดโดย[ ]*?\((.+?)\)/g, "for\($1=$2;$1<=$3;$1-=$4\)");

    /* { } */
    codeTemp = codeTemp.replace(/(\{|\})/g, "<br>$1<br>");
    codeTemp = codeTemp.replace(/<br>(\})/g, "$1");

    /* comment */
    codeTemp = codeTemp.replace(/(\/\*.+?\*\/)/g, "$1<br>");
    codeTemp = codeTemp.replace(/<br>(.+?)(\/\*.+?\*\/)/g, "$1$2");
    codeTemp = codeTemp.replace(/(\/\*.+?\*\/)<br>[\n]*?<br>/g, "$1<br>");
    codeTemp = codeTemp.replace(/\/\/(.+?)\n/g, "\/\/$1<br>");
    codeTemp = codeTemp.replace(/;<br>(.*?)\/\/(.+?)<br>/g, ";$1\/\/$2<br>");

    /* function */
    codeTemp = codeTemp.replace(/สร้าง/g, "function");
    codeTemp = codeTemp.replace(/#function/g, "สร้าง");
    codeTemp = codeTemp.replace(/คืนค่า/g, "return");
    codeTemp = codeTemp.replace(/#return/g, "คืนค่า");

    /* Math */
    codeTemp = codeTemp.replace(/#E/gi, "Math\.E");  // e
    codeTemp = codeTemp.replace(/#PI/gi, "Math\.PI");  // 3.14
    codeTemp = codeTemp.replace(/ปัด/g, "Math\.round"); // round
    codeTemp = codeTemp.replace(/#Math\.round/g, "ปัด");
    codeTemp = codeTemp.replace(/Math\.roundขึ้น/g, "Math\.ceil");  // round up
    codeTemp = codeTemp.replace(/Math\.roundลง/g, "Math\.floor"); // round down
    codeTemp = codeTemp.replace(/สัมบูรณ์/g, "Math\.abs");
    codeTemp = codeTemp.replace(/#Math\.abs/g, "สัมบูรณ์");
    codeTemp = codeTemp.replace(/สูงสุด/g, "Math\.max");
    codeTemp = codeTemp.replace(/#Math\.max/g, "สูงสุด");
    codeTemp = codeTemp.replace(/ต่ำสุด/g, "Math\.min");
    codeTemp = codeTemp.replace(/#Math\.min/g, "ต่ำสุด");
    codeTemp = codeTemp.replace(/ยกกำลัง[ ]*\((.+?),(.+?)\)/g, "Math\.pow\($1,$2\)");
    codeTemp = codeTemp.replace(/ถอดราก[ ]*\((.+?),(.+?)\)/g, "Math\.pow\($1,1\/$2\)");

    /* true false */
    codeTemp = codeTemp.replace(/จริง/g, "true");
    codeTemp = codeTemp.replace(/#true/g, "จริง");
    codeTemp = codeTemp.replace(/เท็จ/g, "false");
    codeTemp = codeTemp.replace(/#false/g, "เท็จ");

    /* COLOR SECTION */

    /* comment */
    /*codeTemp = codeTemp.replace(/\/\*([\s\S]*?)\*\//g, '<span class="comment">$1</span>');
    codeTemp = codeTemp.replace(/\/\/(.*)/g, '<span class="comment">$1</span>');*/

    /* blockquote */
    codeTemp = codeTemp.replace(/(["|'].*?["|'])/g, '<span class="blockquote">$1</span>');

    /* true false */
    codeTemp = codeTemp.replace(/(true)/g, '<span class="boolean">$1</span>');
    codeTemp = codeTemp.replace(/(false)/g, '<span class="boolean">$1</span>');

    if(displayIo == true){
      codeTemp += '<br>function input(text){<br>return prompt(text, "");<br>}<br><br>function output(text){<br>alert(text);<br>}<br><br>function ask(text){<br>return confirm(text);<br>}';
    }

    if(stdIo == true){
      codeTemp = codeTemp.replace(/output\(/g, "alert\(");
      codeTemp = codeTemp.replace(/input\((".*?")\)/g, "prompt\($1, \"\"\)");
      codeTemp = codeTemp.replace(/input\(\)/g, "prompt\(\"\", \"\"\)");
      codeTemp = codeTemp.replace(/ask\(/g, "confirm\(");
    }

    return codeTemp; // return innerHTML
}
