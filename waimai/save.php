<?php 
session_start();
include("conn.php");
$title=$_POST[title];
$content=$_POST[content];
$spid=$_GET[id];
$time=date("Y-m-j");
$sql=mysql_query("select * from user where name='".$_SESSION[login]."'");
$info=mysql_fetch_array($sql);
$userid=$info[id];
mysql_query("insert into pingjia (userid,spid,title,content) values ('$userid','$spid','$title','$content') ");
echo "<script>alert('评论发表成功!');history.back();</script>";
?>