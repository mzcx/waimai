<?php 
require("header.php");

?><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">个性化推荐（登录后更智能哦！） </td>
  </tr></table>
<table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>菜品名称</td>
					                  <td>市场价</td>
					                  <td>会员价</td>
					                  <td>菜品图片</td>
					                  <td>操作</td>
					              </tr>
<?php 

$jilu="";
$sql="";
//查询出用户购买的订单信息
if($_SESSION[login]=="")
  {
  	$sql="select * from goods   order by hits DESC";
  }
else
	{
		$SQL1="select spc from orders where xiadanren ='".$_SESSION[login]."'";
		$result=mysql_query($SQL1);
		while($data=mysql_fetch_array($result))
		{
			$jilu=$jilu.$data[spc];
			$jilu= ltrim($jilu, "@");
		}
		 
	 
	 $jilu=str_replace("@",",",$jilu);
	 $jilu=rtrim($jilu, ","); 
 	$sql="select * from goods where id in(".$jilu.") order by hits DESC";
	} 
		

			$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
	 
?>
			  <tr align='center' bgcolor="#FFFFFF" height="22">
				  <td><a href="goodsDetail.php?goodsId=<?php  echo $data[id]?>"><?php  echo $data[name]?></a></td>
				  <td>￥<?php  echo $data[shichangjia]?><br/></td>
				  <td>￥<?php  echo $data[huiyuanjia]?></td>
				  <td><a href="goodsDetail.php?goodsId=<?php  echo $data[id]?>"> <img width="60" height="60" src="<?php  echo $data[tupian]?>" border=0/> </a></td>
				  <td><a href="cart.php?id=<?php  echo $data[id]?>&act=buy"><img alt="" src="./images/icon_buy.gif" border=0/></a></td>
			  </tr>
<?php 
}
	?></table>

<?php 
require("footer.php");
?>