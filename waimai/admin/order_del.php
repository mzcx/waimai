<?php 
  include("check_login.php");
  $page=intval($_POST[page_id]);
  include("../conn.php");
  while(list($value,$name)=each($_POST))
   {
     mysql_query("delete from orders where id='".$value."'",$conn);
   }
 header("location:order.php?page=".$page."");
?>