<?php

$host = 'localhost';
$user = 'root';
$pw = 'root';
$dbName = 'coin180';
$mysqli = new mysqli($host, $user, $pw, $dbName);

extract($_POST);

$sql = "update users set balance = balance - '$amount' where id = '$sid'";
$a = $mysqli -> query($sql);
$sql = "update users set balance = balance + '$amount' where id = '$rid'";
$b = $mysqli -> query($sql);
if ($a && $b) {
  ?>
  <center>
  <br><br><br>송금이 정상적으로 처리되었습니다.
  <br><br>
  <button onclick = "location.href = 'login.php'"> 확인 </button>
  </center>
  <?php
}
else {
  ?>
  <center>
  <br><br><br>문제가 발생했습니다.
  <br><br>
  <button onclick = "location.href = 'login.php'"> 확인 </button>
  </center>
  <?php
}
?>
