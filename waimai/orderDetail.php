<?php 
require("header.php");
$sql="select * from orders where orderid ='$orderid'";
 $res=mysql_query($sql);
  $info=mysql_fetch_array($res);
  $spc=$info[spc];
  $slc=$info[slc];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);

?><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">查看订单</td>
  </tr></table>
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" ></td>
  </tr>
  <tr>
    <td height="20"><div align="left"><span class="style5">订单号：</span><?php  echo $orderid;?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style5">菜品列表(如下)：</div></td>
  </tr>
</table>
<table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#E7F3FB"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr >
        <td width="153" height="30"><div align="center" class="style1">菜品名称</div></td>
        <td width="80"><div align="center" class="style1">市场价</div></td>
        <td width="80"><div align="center" class="style1">会员价</div></td>
        <td width="80"><div align="center" class="style1">数量</div></td>
        <td width="101"><div align="center" class="style1">小计</div></td>
      </tr>
	  <?php 
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
		 if($arraysp[$i]!=""){
	     $sql1=mysql_query("select * from goods where id='".$arraysp[$i]."'");
	     $info1=mysql_fetch_array($sql1);
		 $total=$total+=$arraysl[$i]*$info1[huiyuanjia];
	  ?>
	  <tr bgcolor="#FFFFFF">
        <td height="20"><div align="center"><?php  echo $info1[name];?></div></td>
        <td height="20"><div align="center"><?php  echo $info1[shichangjia];?></div></td>
        <td height="20"><div align="center"><?php  echo $info1[huiyuanjia];?></div></td>
        <td height="20"><div align="center"><?php  echo $arraysl[$i];?></div></td>
        <td height="20"><div align="center"><?php  echo $arraysl[$i]*$info1[huiyuanjia];?></div></td>
     </tr>
	 <?php 
	   }
	   }
	 ?>

      <tr bgcolor="#FFFFFF">
        <td height="20" colspan="5">
          <div align="right"><span class="style5">总计费用:</span><?php  echo $info[total];?>
          </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="460" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="81" height="20"><div align="left" class="style6">下单人：</div></td>
    <td colspan="3"><div align="left"><?php  echo $_SESSION[username];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">收货人：</div></td>
    <td height="20" colspan="3"><div align="left"><?php  echo $info[shouhuoren];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">收货人地址：</div></td>
    <td height="20" colspan="3"><div align="left"><?php  echo $info[dizhi];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">邮&nbsp;&nbsp;编：</div></td>
    <td width="145" height="20"><div align="left"><?php  echo $info[youbian];?></div></td>
    <td width="66"><div align="left" class="style6">电&nbsp;&nbsp;话：</div></td>
    <td width="158"><div align="left"><?php  echo $info[tel];?></div></td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">E-mail:</div></td>
    <td height="20"><div align="left"><?php  echo $info[email];?></div></td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr>
    <td height="20"><div align="left" class="style6">送货方式：</div></td>
    <td height="20"><div align="left"><?php  echo $info[shff];?></div></td>
    <td height="20"><div align="left" class="style6">支付方式：</div></td>
    <td height="20"><div align="left"><?php  echo $info[zfff];?></div></td>
  </tr>
<br>
  <tr>
   <td height="20"><div align="center" class="style6">送货时间：</div></td>
    <td height="20"><div align="left"><?php  echo $info[atime];?></div></td>
    <td height="20"><div align="center" class="style6">创建时间：</div></td>
    <td height="20"><div align="left"><?php  echo $info[time];?></div></td>
  </tr>
</table>

<?php 
require("footer.php");
?>