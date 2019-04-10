<?php  include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>用户信息管理</title>
<link rel="stylesheet" type="text/css" href="skin/css/base.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
include("../conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from user where id=".$id."",$conn);
$data=mysql_fetch_array($sql);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="djyh.php">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >用户信息查看</div></td>
  </tr>
  <tr>
    <td height="98" bgcolor="#E7E7E7"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="99" height="20" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
        <td width="180" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[name];?></div></td>
       </div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">真实姓名：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[truename];?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[sfzh];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[email];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[tel];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">QQ号码：</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php  echo $data[qq];?></div></td>
      </tr>


    </table></td>
  </tr>


  </form>
</table>
</body>
</html>
