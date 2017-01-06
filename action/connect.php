<?php
$host = "localhost";
$user = "root";
$pass = "12345678";
$db_name = "amara";
$c = @mysql_connect($host,$user,$pass);
if(!$c){
  header("location: ../error.php");
  exit;
}
?>
