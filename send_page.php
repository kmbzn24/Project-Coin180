<html>
  <body>
    <center>
      <form method = "post" action = "send.php">
        <br><br><br>
        Coin180 - Remittance <br>
        <br>
        <input type = "hidden" name = "sid" value = "<?php echo $_POST['sid']; ?>">
        <table border = 0>
          <tr>
            <td> 보내는 사람 </td>
            <td> <?php echo $_POST['sname']."(".$_POST['sid'].")" ?>
          </tr>
          <tr>
            <td> 송금액 </td>
            <td> <input type = "text" name = "amount" size = 18> </td>
          </tr>
          <tr>
            <td> 받는 사람의 ID </td>
            <td> <input type = "text" name = "rid" size = 18> </td>
          </tr>
        </table>
       <br> <input type = submit value = "송금">
      </form>
    </center>
  </body>
</html>
