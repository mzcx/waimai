<?php
require("../conn.php");
if($act=="del")
{
$sql="delete from `notice` where id=$id";
$result=mysql_query($sql);
echo "<SCRIPT LANGUAGE='JavaScript'>alert('删除成功');location.href='?action=list';</SCRIPT>";
exit;
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script charset="utf-8" src="./editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>

<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true,
						afterBlur: function(){this.sync();}

				});

			});
		</script>

		<link rel="stylesheet" type="text/css" href="./css/base.css" />

<script language="JavaScript">
function check()
{
  if (document.add.title.value=="")
     {
      alert("请填写信息名称！")
      document.add.title.focus()
      document.add.title.select()
      return false;
     }



return true;
}
</script>

	</head>

	<body leftmargin="2" topmargin="2" background='images/allbg.gif'>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="top">
    <td bgcolor="#FFFFFF">
<?php
if ($action=="add")
{
?>


      <table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#D1DDAA">
        <form name="add" method="post" action="Notice_do.php?act=add" onSubmit="return check();">
        <tr align="center" bgcolor="#F2FDFF">
       <td class="title" height="30" colspan="3" align="center" bgcolor="#A3C8F4">添加信息</td>
        </tr>
		<tr align='center' bgcolor='#F2FDFF'>
		  <td align='right'> 信息名称：</td>
		  <td width="85%" align='left'><input name="title" type="text" id="title" size="50"></td>
		</tr>
        <tr align="center" bgcolor="#FFFFFF">
          <td width="15%" align="right">信息内容：</td>
          <td align="left"><textarea id="content_1" name="content" cols="100" rows="8" style="width:550px;height:300px;"></textarea></td>
        </tr>
        <tr align="center" bgcolor="#ebf0f7">
          <td  colspan="2" >
		     <INPUT TYPE="hidden" name="action" value="yes">
            <input type="Submit" name="Submit" value="提交" >
          	<input type="button" name="Submit2" value="返回" onClick="history.back(-1)"></td>
        </tr>
		</FORM>
      </table>
<?php
	}
	?>
<br>
<?php
if ($action=="list")
{
?>
      <table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" >
        <tr align="center" bgcolor="#F2FDFF">
         <td class="title" height="30" colspan="3" align="center" bgcolor="#A3C8F4">信息列表 <a href="Notice.php?action=add" style="color:blue">添加信息</a></td>
        </tr>
        <tr align="center" bgcolor="#ebf0f7">
          <td width="5%">序号</td>
          <td width="75%">信息名称</td>
          <td width="20%">执行操作 <a href="Notice.php?action=add">添加</a></td>
        </tr>

<?php
$sql="select * from notice order by id desc";
$result=mysql_query($sql);
$i=0;
while($rs=mysql_fetch_array($result))
	{
	$i++;
?>
        <tr align='center' bgcolor='#FFFFFF' onmouseover='this.style.background="#F2FDFF"' onmouseout='this.style.background="#FFFFFF"'>
		  <td width="5%"><?php echo $i?></td>
          <td align='left' ><?php echo $rs["title"]?></td>
          <td align='center'>


          <a href="?action=edit&id=<?php echo $rs["id"]?>">修改</a> <a href="?act=del&id=<?php echo $rs["id"]?>" onClick="javascript: return confirm('确定删除？删除后不可恢复!')">删除</a>
         </a></td>
        </tr>
<?php
}
?>


      </table>
	  <br>

<?php
}
	if ($action=="edit")
	{


$sql="select * from notice where id=$id";

$result=mysql_query($sql);
$rs=mysql_fetch_array($result);
?>

	  <table width="96%"  border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#D1DDAA">
       <form name="add" method="post" action="Notice_do.php?act=edit" onSubmit="return check();">
		<tr align="center" bgcolor="#F2FDFF">
		  <td colspan=2  class="optiontitle">修改信息</td>
		</tr>
		<tr align='center' bgcolor='#F2FDFF'>
		  <td align='right'> 信息名称：</td>
		  <td width="78%" align='left'><input name="title" type="text" id="title" value="<?php echo $rs["title"]?>" size="50"></td>
		</tr>
        <tr align="center" bgcolor="#FFFFFF">
          <td width="22%" align="right">信息内容：</td>
          <td align="left"><textarea id="content_1" name="content" cols="100" rows="8" style="width:550px;height:300px;"><?php echo $rs["content"]?></textarea></td>
        </tr>
		<tr align="center" bgcolor="#ebf0f7">
		  <td colspan="2">
		  <input type="hidden" name="action" value="yes">
          <input type="Submit" name="Submit2" value="提交" >
          <input type="button" name="Submit2" value="返回" onClick="history.back(-1)">
		  <input name="id" type="hidden" id="id" value="<?php echo $rs["id"]?>">		  </td>
		</tr>
  		</FORM>
  	</table>
<?php
	}
?>
    </td>
  </tr>
</table>