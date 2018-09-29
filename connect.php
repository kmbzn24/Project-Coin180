<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "root";
  $db_name = "coin180";
  $con = new mysqli($db_host, $db_user, $db_password, $db_name); // 데이터베이스 접속
  if ($con -> connect_errno) {
      die('Connection Error : '.$con -> connect_error);
  }
?>
