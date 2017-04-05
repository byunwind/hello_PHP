<? include ("./inc.php"); ?>
<html>
  <head>  </head>
<?php
  $connect = mysql_connect($db_ip,$db_user,$db_pass);
     mysql_select_db($db_database,$connect);

  $query = 	"select * from board1 where id = $id";
  $result = mysql_query($query,$connect);
  $row = mysql_fetch_array($result);

  $writer = $row[writer];
  $comment = $row[content];
  $subject = $row[subject];
  $visit = $row[visit];
  $email = $row[email];
  $wdate = $row[wdate];
  $visit=$visit+1;

  $update_query = "update board1 set visit = $visit where id = $id";
  $dbupdate = mysql_query($update_query,$connect);
?>

	<table width='600' border='0' cellpadding='0' cellspacing='0'                                   background='./img/board_up.gif' height='50'>
	   <tr>
		  <td width='35'>&nbsp;</td>
		  <td width='50'><a href=adminpassform.php><img src='./img/admin.gif'                          border='0'></td>
		  <td>&nbsp;</td>
	  </tr>
  </table>

  <table width='600' border='1' cellspacing='0' cellpadding='4'>
   <tr bgcolor='#eebbbb'> 
   <td width='170'><font size='2' color='white'>작성자 :</font><font size='2' color='#552277'><?=$writer?></font></td>

    <td width='288'><font size='2' color='white'>제 목 :</font><font size='2' color='#552277'><?=$subject?></font></td>
    <td width='128'> 
      <div align='right'><font size='2' color='white'>조회수 :</font><font size='2' color='#552277'><?=$visit?></font></div>
    </td>
  </tr>
  <tr bgcolor='#eebbbb'> 
    <td width='350' colspan='2' bgcolor='#eebbbb'><font size='2' color='white'>http://</font>
          <a href=http://$home><font size='2'><?=$home?></font></a>
    </td>  
  </tr>
  
  <tr> 
    <td colspan='3' height='191'><font size='2'><?=$comment?></font></td>
  </tr>
  <tr bgcolor='#eebbbb'> 
    <td width='170'><div align='left'><a href="delpassform.php?id=<?=$id?>&page=<?=$page?>">
                    <img src='./img/delete2.gif' border=0></a></div>
     </td>
    <td width='288'><div align='center'><font size='2'>글쓴일: <?=$wdate?></font></div></td>
    <td width='128'>&nbsp;</td>
  </tr>
  </table>
 
   <table width='600' border='0' cellpadding='0' cellspacing='0' background='./img/board_bottom.gif' height='50'>
    <tr><td align='center'> 
	   
	   <a href="writeform.php"><img src=./img/write.gif border=0 ></a>
	   <a href="writeForm.php?mode=update&id=<?=$id?>"><img src=./img/modify.gif border=0></a>
	   <a href="list.php"><img src=./img/list.gif border=0 alt=목록보기></a>
      
      </td>
    </tr>
  </table>
   </body>
  </html>
 