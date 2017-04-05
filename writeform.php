<html>
<head>
</head>
<?php
include("inc.php");

$connect = mysql_connect($db_ip,$db_user,$db_pass);
mysql_select_db($db_database,$connect);

$query = "select writer,email,home,subject,content from board1 where id=$id";

$result = mysql_query($query,$connect);

if($result){
	$row = mysql_fetch_array($result);

	$writer = $row[writer];
	$email  = $row[email];
	$home   = $row[home];
	$subject = $row[subject];
	$content = $row[content];
	$comment = $row[content];
}
?>
<body bgcolor=white>
<form method=post action="action.php">
<input type=hidden name="mode" value="<?=$mode?>">
<input type=hidden name="id" value=<?=$id?> >

  <table width='600' border='1' height='157' cellpadding='1' cellspacing='0'>
    <tr>
      <td width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>�ۼ��� </font></div>
      </td>
      <td height='16' width='215'><font size='2'>
        <input type='text' name='writer' value='<?=$writer?>'>
        </font></td>
      <td height='16' width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>password</font></div>
      </td>
      <td height='16' width='215'><font size='2'>
        <input type='password' name='passwd'>
        </font></td>
    </tr>
    <tr>
      <td width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>email</font></div>
      </td>
      <td height='23' colspan='3'>
        <div align='left'><font size='2'>
          <input type='text' name='email' value='<?=$email?>' size='50'>
          </font></div>
      </td>
    </tr>
    <tr>
      <td width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>home</font></div>
      </td>
      <td height='31' width='487' colspan='3'><font size='2'>http://
        <input type='text' name='home' value='<?=$home?>' size='50'>
        </font></td>
    </tr>
    <tr>
      <td width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>����</font></div>
      </td>
      <td height='2' width='487' colspan='3'>
        <div align='left'><font size='2'>
          <input type='text' name='subject' value='<?=$subject?>' size='50'>
          </font></div>
      </td>
    </tr>
    <tr>
      <td width='85' bgcolor='#FFCCCC'>
        <div align='center'><font size='2'>comment</font></div>
      </td>
      <td width='487' colspan='3' height='163'><font size='2'>
        <textarea name='comment' cols='50' rows='10'><?=$comment?></textarea>
        </font></td>
    </tr>
    <tr>
      <td width='572' height='30' colspan='4'>
        <div align='center'>
          <input type='submit' name='Submit' value='�ۿø���'>
          <input type='reset' name='submit2' value='�ٽ��ۼ�'>
        </div>
      </td>
    </tr>
  </table>
</form>

  <table width='600' border='0' cellspacing='0' cellpadding='0' height='50' background='./img/board_bottom.gif'>
    <tr>
      <td>

      </td>
    </tr>
  </table>

</html>
