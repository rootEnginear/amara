<?php
include_once "connect.php";
if($_POST['authSignup']){

  #   S I G N   U P

  $username = $_POST['authUsername'];
  $password = md5($_POST['authPassword']);
  $email = $_POST['authEmail'];
  $sql = "INSERT INTO member('id','username','password','email') value('','$username','$password','$email')";
  $c = mysql_db_query($db_name,$sql);
  if(!$c){
    header("location: ../error.php");
    exit;
  }
  ?>
  <script>
    alert('สมัครสมาชิกเรียบร้อยแล้ว!');
    window.location.href = "../index.php";
  </script>
  <?
  exit;
}elseif ($_POST['authForget']){

  #   F O R G E T   P A S S W O R D

  $email = $_POST['authEmail'];
  $sql = "SELECT * FROM member WHERE email='$email'";
  $c = mysql_db_query($db_name,$sql);
  if(!$c){
    # Cannot Connect
    exit;
  }

  $row = mysql_num_rows($c);
  if($row==0){
    # No User
    exit;
  }

  $newpassword = md5(rand(999999,99999999));
  $subject = "รหัสผ่านใหม่ - Amara";
  $msg = "รหัสผ่านใหม่ของท่านคือ ".$newpassword." หากท่านไม่ได้ขอรหัสผ่านใหม่ หรือมีความเสี่ยงที่จะถูกแฮก โปรดติดต่อผู้พัฒนา (ข้อความนี้เป็นข้อความอัตโนมัติ โปรดอย่าตอบกลับ)";
  $header = "from: noreply_amara@kruchotika.com";
  $send = mail($email,$subject,$msg,$header);
  if($send){
    # Msg didn't send try again later
    exit;
  }

  $sql = "UPDATE member SET password = '$newpassword' WHERE email='$email'";
  $c = mysql_db_query($db_name,$sql);
  if(!$c){
    # Cannot Connect
    exit;
  }

  ?>
  <script>
    alert('ส่งรหัสผ่านใหม่เรียบร้อยแล้ว! โปรดตรวจสอบในกล่องขาเข้า/ข้อความขยะในอีเมลของท่าน');
    window.location.href = "../index.php";
  </script>
  <?
  exit;
}elseif($_POST['authLogin']){

  #   L O G   I N

  $username = $_POST['authUsername']; // This included email too.
  $password = md5($_POST['authPassword']);
  $sql = "SELECT * FROM member WHERE (username='$username' or email='$username') and password='$password'";
  $c = mysql_db_query($db_name,$sql);
  if(!$c){
    # Cannot Connect
    exit;
  }

  $row = mysql_num_rows($c);
  if($row==0){
    # No User
    exit;
  }

  $record = mysql_fetch_array($c);

  session_start();
  $_SESSION['sess_id'] = session_id();
  $_SESSION['sess_user'] = $record['username'];
  $_SESSION['sess_pos'] = $record['pos'];
}

?>
