<html>
  <head></head>
    <body bgcolor=ffffff LINK=#5485B6 VLINK=#5485B6 TEXT=#003366>
       <br>
<?php
include("inc.php"); 	

$connect = mysql_connect($db_ip,$db_user,$db_pass);
mysql_select_db($db_database,$connect);

	   
$query = "select * from board1";
$query = $query." order by id_depth desc";

$result = mysql_query($query,$connect);
    	
$totalnum = mysql_num_rows($result);
?>
<table width='600' border='0' cellpadding='0' cellspacing='0' background='./img/board_up.gif' height='50'>
   <tr>
	  <td width='35'>&nbsp;</td>
	  <td width='50'>&nbsp;</td>
	  <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width='600' board='0'><tr><td><div align='right'>
  <font size='2' color='blue'>총 자료수 : <?=$totalnum?></font>
</div></td></tr></table>
<table width=600 border='1' cellpadding='1' cellspacing='0'>
	<tr bgcolor=$lcolor>
		<td width=60 align=center><font size=2 color=$textcolor>번호</font></td>
		<td width=70 align=center><font size=2 color=$textcolor>작성자</font></td>
		<td width=300 align=center><font size=2 color=$textcolor>제목</font></td>
		<td width=80 align=center><font size=2 color=$textcolor>작성일</font></td>
		<td width=50 align=center><font size=2 color=$textcolor>조회수</font></td>
   </tr>
<?
if($totalnum>0)
{
	while($resultRow=mysql_fetch_array($result)) 
	{ 

		$id = $resultRow[id];
		$id_num = $resultRow[id_num];
        $id_depth = $resultRow[id_depth];
        $writer = $resultRow[writer];
		$subject = $resultRow[subject];
		$email = $resultRow[email];
        $visit = $resultRow[visit];
       	$wdate = $resultRow[wdate];
		$num = $totalnum - $i;
?>
	<tr style=padding-left: 10; padding-top: 0; padding-bottom: 0 bgcolor='#eeeeee' onMouseOver=this.style.backgroundColor='#dbdeee'  onMouseOut=this.style.backgroundColor='' >
		<td align=center><font size=2><?=$num?></font></td>
		<td><p align=center><font size=2><?=$writer?></font></a></td>
	    <td width=350><a href="view.php?&id=<?=$id?>"><font size=2><?=$subject?></font></a></td>
		<td align=center><font size=2><?=$wdate?></font></td>
	    <td align=center><font size=2><?=$visit?></font></td>
     </tr>
<?
	}
}
?>
</table>
 <table width='600' border='0' cellspacing='0' cellpadding='0' height='50' background='./img/board_bottom.gif'>
	<tr> 
	  <td><a href="writeform.php"><img src=./img/write.gif border=0 alt=글쓰기></a>
	 </td>
</tr>
</table> 
  <p>
  <div align='center'><font size='2' color='black'><?=$tailtitle?></font></div>

 </body>
</html>
	
