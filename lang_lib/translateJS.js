var i = 0;

function translateCode(codeInput,displayIo,stdIo) {
    var codeTemp = codeInput;

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

    if(displayIo == true){
      codeTemp += '<br>function input(text){<br>return window.prompt(text, "");<br>}<br><br>function output(text){<br>window.alert(text);<br>}';
    }

    if(stdIo == true){
      codeTemp = codeTemp.replace(/output\(/g, "window.alert\(");
      codeTemp = codeTemp.replace(/input\((".*?")\)/g, "window\.prompt\($1, \"\"\)");
      codeTemp = codeTemp.replace(/input\(\)/g, "window\.prompt\(\"\", \"\"\)");
    }

    return codeTemp;
}
