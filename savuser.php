<?php
  $host = 'localhost';
  $user = 'root';
  $pw = 'Wndehd31108';
  $dbName = 'coin180';
  $mysqli = new mysqli($host, $user, $pw, $dbName);

  $name = $_POST['name'];
  $id = $_POST['id'];
  $password = $_POST['password'];

  $sql = "insert into users (성명, id, password, balance)";
  $sql = $sql. " values ('$name', '$id', '$password', 0)";

  if ($mysqli -> query($sql)) {
    ?>
    <center>
    회원가입이 정상적으로 완료되었습니다.
    <br>
    <button onclick = "location.href = 'login.php'"> 로그인 </button>
    </center>
    <?php
  }
  else {
    echo '문제가 발생하였습니다.';
  }
?>
