<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查看评论</title>
<link rel="stylesheet" type="text/css" href="base.css">
</head>
<?php 
include("../conn.php");
$sql=mysql_query("select * from pingjia where id='".$_GET[id]."'",$conn);
$info=mysql_fetch_array($sql);


?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="25"><div align="left">评论主题:<?php  echo $info[title];?></div></td>
  </tr>
  <tr>
    <td height="25"><div align="left">内容:</div></td>
  </tr>
  <tr>
    <td height="140" valign="top"><div align="left"><?php  echo $info[content];?></div></td>
  </tr>
</table>
</body>
</html>
