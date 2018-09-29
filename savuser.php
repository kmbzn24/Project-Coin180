<?php

  $conn = mysqli_connect('localhost', 'root', 'root', 'coin180');

  $name = $_POST['name'];
  $id = $_POST['id'];
  $password = $_POST['password'];

  $sql = "insert into users (id, password, name, balance) values ('$id', '$password', '$name', 0)";

  if ($conn -> query($sql)) {
    ?>
    <center>
    <br><br><br>
    회원가입이 정상적으로 완료되었습니다.
    <br><br>
    <button onclick = "location.href = 'login.php'"> 로그인 </button>
    </center>
    <?php
  }
  else {
    echo '문제가 발생하였습니다.';
  }

?>
