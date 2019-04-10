<?php  include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>处理订单</title>
<link rel="stylesheet" type="text/css" href="base.css">
<?php 
 include("../conn.php");
 $id=$_GET[id];
 $sql=mysql_query("select * from orders where id='".$id."'",$conn);
 $data=mysql_fetch_array($sql);
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #f2ab5b}
.style2 {color: #FF0000}
.style3 {color: #000000}
-->
</style>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

</table>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >执行处置</div></td>
  </tr>
  <tr>
    <td bgcolor="#E7E7E7"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveorder.php?id=<?php  echo $data[id];?>">
	  <tr>
        <td width="70" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">订单编号：</div></td>
        <td width="271" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[orderid];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">
        
        </div></td>
        <td width="101" bgcolor="#FFFFFF"><div align="center">
         
        </div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center"></div></td>

    </table></td>
  </tr>
</table>

<table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#E7E7E7"><table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr #E7F3FB>
        <td width="106" height="20"><div align="center" >商 品 名 称</div></td>
        <td width="106"><div align="center" >数量</div></td>
        <td width="106"><div align="center" >市场价</div></td>
        <td width="106"><div align="center" >会员价</div></td>
        <td width="106" height="20"><div align="center" >成交价</div></td>
        <td><div align="center" >小 计</div></td>
      </tr>
	 <?php 
	   $array=explode("@",$data[spc]);
	   $arraysl=explode("@",$data[slc]);
	   $total=0;
	   for($i=0;$i<count($array)-1;$i++)
	    {
		  if($array[$i]!="")
		  {
	       $sql1=mysql_query("select * from goods where id='".$array[$i]."'",$conn);
		   $data1=mysql_fetch_array($sql1);
		   $total=$total+$data1[huiyuanjia]*$arraysl[$i];
	 ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="left"> <?php  echo $data1[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  if($data1[shuliang]<0) echo "售完"; else echo $arraysl[$i];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[shichangjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[huiyuanjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[huiyuanjia];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[huiyuanjia]*$arraysl[$i];?></div></td>
      </tr>
	 <?php 
	     }
	   }
	 ?>
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="right" class="style3">合计：<?php  echo $total;?></div></td>
  </tr>
</table>
<table width="750" height="195" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td height="193" bgcolor="#E7E7E7"><table width="750" height="151" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr #E7F3FB>
        <td height="20" colspan="2"><div align="center" >收货人信息</div></td>
      </tr>
      <tr>
        <td width="120" height="25" bgcolor="#FFFFFF"><div align="center" class="style3">收货人姓名：</div></td>
        <td width="627" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[shouhuoren];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">详细地址：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[dizhi];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">电话：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[youbian];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">手机：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[tel];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">电子邮件：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[email];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">送货方式：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[shff];?></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">支付方式：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[zfff];?></div></td>
      </tr>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center" class="style3">简单留言：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[liuyan];?></div></td>
      </tr>
        <tr>
    <td height="20" align="center"  colspan="2">    <div align="center"><br>
 <input name="yfh" type="hidden" id="radio" value="已完成" checked>
          
<input type="submit" value="已完成配送" class="buttoncss" onClick="return confirm('确定要操作吗');">  <input type="button" value="返回" class="buttoncss" onClick="javascript:history.back();">  </div></td>


  </tr>
    </table></td>
    </form>
  </tr>
</table>
</body>
</html>
