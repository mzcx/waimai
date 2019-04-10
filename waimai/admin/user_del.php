<?php 
include("check_login.php");
include("../conn.php");
while(list($name,$value)=each($_POST))
  {
    mysql_query("delete from user where id=".$value."",$conn);

  }
header("location:user.php");
?>