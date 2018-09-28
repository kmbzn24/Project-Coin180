<?php
session_start();
if ($_SESSION['id'] == null) {
?>
<center>
  <form name = "login_form" action = "login_check.php" method = "post">
    <br><br><br>
    Coin180 - Login
    <br><br>
    <table border = 0>
      <tr>
        <td> 아이디 </td>
        <td> <input type = "text" name="id" size = 18> </td>
      </tr>
      <tr>
        <td> 비밀번호 </td>
        <td> <input type = "password" name="password" size = 18> </td>
      </tr>
    </table>
    <br>
    <input type = "submit" name = "login" value = "로그인"> </td>
  </form>
  <button onclick = "location.href = 'signup.php'"> 회원가입 </button>
</center>
<?php
}
else {
   echo "<center><br><br><br>";
   echo $_SESSION['성명']."(".$_SESSION['id'].")님의 잔고<br><font size = 5>".$_SESSION['balance']." 코인</font><br>";
   ?>
   <br> <button onclick = "location.href = 'logout.php'"> 로그아웃 </button>
   <?php
   echo "</center>";
}
?>
