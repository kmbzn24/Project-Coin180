<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "데이터베이스 비밀번호";
  $db_name = "데이터베이스명";
  $con = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
  if ($con -> connect_errno) {
      die('Connection Error : '.$con -> connect_error);
  }
?>
