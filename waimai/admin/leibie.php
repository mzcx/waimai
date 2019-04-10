<?php 
session_start();
require "../conn.php";

if($act=="Del")
{
$sql="delete from leibie where id=$id";
$result=mysql_query($sql);

}
if($id!="")
{
	$sql="select * from leibie where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>类别管理</title>
<link href="images/main.css" rel="stylesheet" type="text/css">
<style leibie="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

</head>

<body topmargin="0" leftmargin="0" bottommargin="0">




<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">

  <tr>
    <td height="30" class="optiontitle" colspan="2"><div align="center" >类别管理</div></td>
  </tr>

       <?php 
$sql="select * from leibie";
$result=mysql_query($sql);

	   ?>
	   <tr bgcolor="#ebf0f7">
          <td width="224" height="20" bgcolor="#FFFFFF"><div align="center">类别名称</div></td>



 <td width="75" bgcolor="#FFFFFF"><div align="center">页面操作</div></td>
        </tr>
       <?php 
	      while($leibie=mysql_fetch_array($result))
		     {
	   ?>
	   <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php  echo $leibie[name];?></div></td>

           <td height="20" bgcolor="#FFFFFF"><div align="center">
		   <a href="?id=<?php  echo $leibie[id]?>&act=edit">修改</a>

<a href="?id=<?php  echo $leibie[id]?>&act=Del">删除</a>

          </div></td>
        </tr>
		<?php 
	        }

		?>
    </table></td>
  </tr>
</table>
<?php 
if($act=="save")
{
	if($id=="")
		{
 $sql="insert into leibie (name) values ('$p0')";
 if(mysql_query($sql))
			{
	echo "<script>location.href='leibie.php'</script>";
	 exit;
			}
 else
			{
	 echo "添加失败";
	 exit;
			}
		}
$sql="update leibie set name='$p0' where id=$id";
mysql_query($sql);
	echo "<script>location.href='leibie.php'</script>";
	exit;
}

?><p>
<div align="center">
<table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#aec3de">
    <form name="form1" method="post" action="?act=save&id=<?php  echo $data[id]?>" onSubmit="return chkinput(this)">
	<tr>
      <td height="30" class="optiontitle" colspan="2"><div align="center" >添加/编辑类别</div></td>
    </tr>



        <tr>
          <td height="25" bgcolor="#FFFFFF"><div align="center">类别名称</div></td>
          <td bgcolor="#FFFFFF"><div align="left"><input type="text" name="p0" class="inputcss" size="20" value="<?php  echo $data[name]?>"></div></td>
          </tr>
           <tr>

          </tr>








      </table>
	  </td>
    </tr>
     <tr>
      <td height="20"><div align="center" ><input type="submit" value="保存" class="buttoncss">&nbsp;</div></td>
    </tr>
	</form>
  </table>
</p>
<p>&nbsp;</p>
</form>
</body>
</html>
