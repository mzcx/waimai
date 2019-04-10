<?php 
 include("check_login.php");
 include("../conn.php");
	  //É¾³ý²ËÆ·
      mysql_query("delete from goods where id='".$id."'",$conn);
	  //É¾³ýÆÀ¼Û
	  mysql_query("delete from pingjia where spid='".$id."'",$conn);

 header("location:goods.php");
?>