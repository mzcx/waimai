<?php 
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
session_start();
if($_SESSION[admin_username]==""){
	echo "<script>alert('请先登录!');window.top.location.href='login.php';</script>";
}
?>
