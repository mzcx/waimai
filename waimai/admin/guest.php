<body topmargin="0" leftmargin="0" bottommargin="0"><link href="css/content.css" rel="stylesheet" type="text/css">

 <?php
require("../conn.php");

if($act=="del")
{
	$sql="delete from liuyan where id=$id";
	mysql_query($sql);
}
if($act=="update")
{
if($replay=="" )
	{
	echo "<script>alert('留言回复不能为空');history.back();</script>";
	exit;
	}
$sql="update liuyan set replay='$replay',rtime=NOW() where id=$id";
$res=mysql_query($sql);
if($res)
	{
	echo "<script>alert('回复成功');location.href='?act=view&id=$id';</script>";
	exit;
	}
	else

	exit("失败了");
	}

if($act!="view")
{
	  ?>
<table width="640" class="table_southidc" border="1" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="guest_del.php">
  <tr bgcolor="#E7F3FB">
    <td height="20" colspan="2"><div align="center">用户留言管理</font></div></td>
  </tr>
  <tr>
    <td height="40" colspan="2" bgcolor="#E7F3FB"><table width="740" class="table_southidc"  border="1" align="center" cellpadding="0" cellspacing="1">
        <tr>
          <td width="184" height="20" bgcolor="#FFFFFF"><div align="center">留言主题</div></td>
          <td width="150" bgcolor="#FFFFFF"><div align="center">留言时间</div></td>
          <td width="127" bgcolor="#FFFFFF"><div align="center">留言内容</div></td>
		   <td width="82" bgcolor="#FFFFFF"><div align="center">留言者</div></td>
          <td width="49" bgcolor="#FFFFFF"><div align="center">删除</div></td>		   <td width="82" bgcolor="#FFFFFF"><div align="center">查看回复</div></td>

        </tr>
		 <?php



			 $sql1=mysql_query("select * from liuyan order by addtime desc ");
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info1[title];?></div></td>

          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[addtime];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[content];?></div></td>
		            <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[userid];?></div></td>

          <td height="20" bgcolor="#FFFFFF"><div align="center">
<a href="?act=del&id=<?php echo $info1[id]?>"> 删除</a>
            </div></td>  <td height="20" bgcolor="#FFFFFF"><div align="center">
<a href="?act=view&id=<?php echo $info1[id]?>"> 查看回复</a>
            </div></td>
        </tr>
		<?php
		 }
		?>
      </table></td>
  </tr>


  </form>
</table>
  <?php
}
if($act=="view")
{
  ?>
<p>&nbsp;</p>
    <?php
				  $sql="select * from liuyan where id=$id";
				  $res=mysql_query($sql);
				$d=mysql_fetch_array($res);

				  ?>
                  <form name="form2" method="post" action="?act=update&id=<?php echo $id?>">
  <table width="740" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="30" colspan="2" align="center">留言回复</td>
    </tr>
    <tr>
      <td width="321" height="30" align="right">留言标题:</td>
      <td width="413" height="30"><?php echo $d[title]?></td>
    </tr>
    <tr>
      <td height="30" align="right">留言内容:</td>
      <td height="30"><?php echo $d[content]?></td>
    </tr>
    <tr>
      <td height="30" align="right">回复:</td>
      <td height="30">
        <label for="replay"></label>
        <textarea name="replay" id="replay" cols="45" rows="5"><?php echo $d[replay]?></textarea>
     </td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="center"><input type="submit" name="button" id="button" value="回复留言">
      <a href="guest.php">返回</a></td>
    </tr>
  </table>
   </form>
<?php
}
  ?>

</body>
</html>
