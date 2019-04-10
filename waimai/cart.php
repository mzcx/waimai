<?php 
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('请先登录，后购物!');history.back();</script>";
	exit;
  }
if($act=="buy")
{
$sql="select * from goods where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
if($data[shuliang]<=0)
 {

   echo "<script>alert('该菜品已经售完!');history.back();</script>";
   exit;

 }
   $array=explode("@",$_SESSION[goodslist]);

 for($i=0;$i<count($array)-1;$i++)
    {
	 if($array[$i]==$id)
	  {
	     echo "<script>location.href='cart.php';</script>";
		 exit;
	  }
	}
}
//购物车代码实现
if($act=="del")
{//移除购物车
	 $arraysp=explode("@",$_SESSION[goodslist]);
 $arraysl=explode("@",$_SESSION[goodsnum]);
for($i=0;$i<count($arraysp);$i++)
 {
   if($arraysp[$i]==$id)
    {
	  $arraysp[$i]="";
	  $arraysl[$i]="";
	}
 }
$_SESSION[goodslist]=implode("@",$arraysp);
$_SESSION[goodsnum]=implode("@",$arraysl);
echo "<script>location.href='cart.php';</script>";
exit;
}

$array=explode("@",$_SESSION[goodslist]);

  $_SESSION[goodslist]=$_SESSION[goodslist].$id."@";
  $_SESSION[goodsnum]=$_SESSION[goodsnum]."1@";

  if($_GET[qk]=="yes")
 {
 $_SESSION[goodslist]="";
 $_SESSION[goodsnum]="";
}
$arraygwc=explode("@",$_SESSION[goodslist]);
  $s=0;
   for($i=0;$i<count($arraygwc);$i++)
   {
       $s+=intval($arraygwc[$i]);
   }
   $goodstotal=0;
$array=explode("@",$_SESSION[goodslist]);
$arraygoodsnum=explode("@",$_SESSION[goodsnum]);
while(list($name,$value)=each($_POST))
 {
  for($i=0;$i<count($array)-1;$i++)
 {
    if(($array[$i])==$name)
	{
  $arraygoodsnum[$i]=$value;
	}
 }
}
$_SESSION[goodsnum]=implode("@",$arraygoodsnum);

?>
<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">&nbsp;<?php  echo $_SESSION[login];?>的购物车</td>
  </tr></table>
        <form name="form1" method="post" action="">

							 <table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>菜品名称</td>
					                  <td>会员价</td>
					                  <td>数量</td>
					                  <td>市场价</td>
					                  <td>删除</td></tr>
		<?php 
for($i=0;$i<count($array)-1;$i++)
 {
  $id=$array[$i];
  $num=$arraygoodsnum[$i];
 if($id!="")
				   {
   $sql=mysql_query("select * from goods where id=$id");
   $data=mysql_fetch_array($sql);
$sql1=mysql_query("select * from goods where id=$id");
$rs=mysql_fetch_array($sql1);
if($rs[shuliang]<$num){
	$_SESSION[goodsnum]=1;
   echo "<script>alert('该菜品库存不足!');location.href='cart.php';</script>";
  exit;
 }
 $goodstotal1=$num*$data[huiyuanjia];
$goodstotal+=$goodstotal1;
 $_SESSION["goodstotal"]=$goodstotal;
if($num=="") $num=1;?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><?php  echo $data[name]?></td>
									  <td>￥<?php  echo $data[huiyuanjia]?><br/></td>
									  <td> <input type="text" name="<?php  echo $data[id];?>" size="2" class="inputcss" value=<?php  echo $num;?>></td>
									  <td>￥<?php  echo $data[shichangjia ]?></td>
									  <td><a href="?id=<?php  echo $data[id]?>&act=del"> <img src="./images/delete_01.gif" border="0"/></a></td>
								  </tr>
<?php 
	}
	}
	?>
					              <tr>
					                 <td colspan="6" class="Order_goodstotal">
					                   <img hspace="5" src="./images/me03.gif"/>
									    总金额：￥<span id="goodstotalMoney"><?php  echo $goodstotal;?></span>
									    &nbsp;&nbsp;&nbsp;&nbsp;
									    <img id="indicator1" src="./images/loading.gif" style="display:none"/>
									 </td>
					              </tr>
	        				</table>
<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
	        				   
			                   <tr>
			                       <td width="121">
</td>
			                       <td><a href="?qk=yes" ><img border="0" src="./images/Car_icon_01.gif"/></a></td>
								   <td >                              <input name="submit2" type="submit" style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" value="更改数量">
</td>
			                       <td>
			                       <td><a href="index.php">继续购买</a></td>
			                       <td><a href="jiesuan.php">结算</a></td>
			                   </tr>
			               </table></form>


<?php 
require("footer.php");
?>