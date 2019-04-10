<?php 
include("check_login.php");

$zt=$_POST[yfh];


 if(($zt==""))
  {
    echo "<script>alert('请选择处理状态!');history.back();</script>";
	exit;
  }
 include("../conn.php");

 $sql3=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $data3=mysql_fetch_array($sql3);
 if(trim($data3[zt])=="已完成")
 {
 $sql=mysql_query("select * from orders where id='".$_GET[id]."'",$conn);
 $data=mysql_fetch_array($sql);
 $array=explode("@",$data[spc]);
 $arraysl=explode("@",$data[slc]);

   for($i=0;$i<count($array);$i++)
    { $id=$array[$i];
     $num=$arraysl[$i];
      mysql_query("update goods set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'",$conn);
    }
  }
  $atime=date("Y-m-d h:i:s");
  mysql_query("update orders set zt='".$zt."',atime='$atime' where id='".$_GET[id]."'",$conn);
 header("location:order.php");
?>