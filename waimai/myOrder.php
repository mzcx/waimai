<?php 
require("header.php");
if($_SESSION[login]=="")
  {
    echo "<script>alert('请先登录');history.back();</script>";
	exit;
  }
  if($act=="del")
  mysql_query("delete from orders where id=$id");
?><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">我的订单</td>
  </tr></table>
<table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>订单号</td>
					                  <td>菜品总价</td>
					                  <td>下单时间</td>
					                  <td>订单状态</td>
					                  <td>操作</td>
					              </tr><?php 

$sql="select * from orders where xiadanren='$_SESSION[login]' order by id DESC";


			$result=mysql_query($sql);
while($data=mysql_fetch_array($result)){
//if($data['zt']=='正在审核') 
$a="<a href=?act=del&id=$data[id]>删除</a>";
//else
	//$a="";

?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td><a href="orderDetail.php?orderid=<?php  echo $data[orderid]?>"><?php  echo $data[orderid]?></a></td>
									  <td>￥<?php  echo $data[total]?><br/></td>
									  <td><?php  echo $data['time']?></td>
									  <td><?php  echo $data['zt']?></td>
									  <td><a href="orderDetail.php?orderid=<?php  echo $data[orderid]?>">查看订单</a> <?php  echo $a?></td>
								  </tr>
<?php 
}
	?>
		        			</table>

		</div>
<?php 
require("footer.php");
?>