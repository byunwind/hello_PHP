<? include ("./inc.php"); ?>
<html>
<head>
<title>掲示板</title>
</head>
<body bgcolor=white text=#003366>
<?php
 $connect = mysql_connect($db_ip,$db_user,$db_pass);
 mysql_select_db($db_database,$connect);

 if($mode=="write"){
   $query = "insert into
                    board1(id,id_num,id_depth,writer,subject,email,home,content,wdate,visit,passwd,userfile,filesize)
	         values('','$id_num','$id_depth','$writer','$subject','$email','$home','$comment','$wdate',0,'$passwd','$userfile_name','$userfile_size')";

   $result = mysql_query($query,$connect);
 }else if($mode=="update"){
	 $query = "update board1 set subject='$subject', email='$email'
           ,home='$home', writer = '$writer',passwd='$passwd'
          ,content='$comment',userfile='$userfile_name',filesize='$userfile_size'
          where id = $id";
    $result = mysql_query($query,$connect);
 }else if($mode=="delete"){
	$query = " delete from board1 where id = $id ";
    $result = mysql_query($query,$connect);
 }
?>
<script>
	self.location.href="list.php";
</script>
