<?php 
 include("../conn.php");
 if($act=="save")
 {
	 $sql="select * from admin where name='$Username'";
$result=mysql_query($sql);
if(!mysql_num_rows($result))
	{
	 $Password_new=md5($Password_new);
	 $sql="INSERT INTO `admin` (`name` ,`pwd` ,
`Levels`) VALUES ('$Username' , '$Password_new' , 0 )";

$result=mysql_query($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('管理员账号增加成功');location.href='admin.php';</SCRIPT>";
}
else
{
	echo "<SCRIPT LANGUAGE='JavaScript'>alert('失败,帐号已存在');history.back();</SCRIPT>";
	exit;
}
 }
?><link rel="stylesheet" type="text/css" href="base.css">

<table width="96%"  border="0"  cellpadding="4" cellspacing="1" bgcolor="#E7E7E7" class="table_big">	<form action="?act=save" method="post">

   <tr  bgcolor="#E7E7E7">
      <td colspan="3" class="title2">&nbsp;用于添加网站的管理员</td>
    </tr>
   <tr  bgcolor="#E7E7E7">
      <td width="20%" class="table">&nbsp;管理员用户名</td>
      <td width="80%" colspan="2" class="table"><input name="Username" type="text" id="UserName3">
      &nbsp;<font class="alert"></font></td>
    </tr>

 <tr  bgcolor="#E7E7E7">
      <td class="table">&nbsp;输入新密码</td>
      <td colspan="2" class="table"><input name="Password_new" type="password" id="Password_new"></td>
    </tr>
  <tr  bgcolor="#E7E7E7">
      <td class="table"><p align="left">&nbsp;重新输入新密码</p></td>
      <td colspan="2" class="table"><input name="Password_new2" type="password" id="Password_new2"></td>
    </tr>

    <tr  bgcolor="#E7E7E7">
      <td colspan="3" class="table"><div align="center">
          <input type="submit" name="Submit3" value="添加">
&nbsp;
      </div></td>
    </tr>
</form>
</table>
