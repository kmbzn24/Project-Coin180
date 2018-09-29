<?php
session_start();
include ("connect.php");
$id = $_POST['id'];
$password = $_POST['password'];
$query = "select * from users where id = '$id' and password = '$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if ($id == $row['id'] && $password == $row['password']) {
   $_SESSION['id'] = $row['id'];
   $_SESSION['name'] = $row['name'];
   $_SESSION['balance'] = $row['balance'];
   echo "<script>location.href='login.php';</script>";
}
else {
   echo "<script>window.alert('아이디 또는 비밀번호가 올바르지 않습니다.');</script>";
   echo "<script>location.href='login.php';</script>";
}
?>
