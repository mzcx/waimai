<?php 
include("check_login.php");
include("../conn.php");
include("fun.php");
//修改保存
if($action=="save")
{


if ($upfile!="")
{
$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);
move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
$uploadfile="admin/".$uploadfile;
$addtime=date("Y-m-d");
$sql="update goods set name='$name',jianjie='$jianjie',xinghao='$xinghao',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',leibie='$leibie',shuliang='$shuliang',tupian='$uploadfile' where id=".$_GET[id]."";
	}
else
$sql="update goods set name='$name',jianjie='$jianjie',xinghao='$xinghao',shichangjia='$shichangjia',huiyuanjia='$huiyuanjia',leibie='$leibie',shuliang='$shuliang' where id=".$_GET[id]."";

mysql_query($sql,$conn);
echo "<script>alert('菜品修改成功!');location.href='goods.php';</script>";
}

//取数据
  $sql1=mysql_query("select * from goods where id=".$_GET[id]."",$conn);
 $data1=mysql_fetch_array($sql1);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>更改菜品信息</title>
<link rel="stylesheet" type="text/css" href="base.css">

</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >更改菜品信息</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#E7E7E7"><table width="750" border="0" cellpadding="0" cellspacing="1">
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.name.value=="")
	   {
	     alert("请输入菜品名称!");
		 form.name.select();
		 return(false);
	   }

	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入菜品会员价!");
		 form.huiyuanjia.select();
		 return(false);
	   }



	  if(form.shichangjia.value=="")
	   {
	     alert("请输入菜品市场价!");
		 form.shichangjia.select();
		 return(false);
	   }


	   if(form.leibie.value=="")
	   {
	     alert("请输入菜品菜品类别!");
		 form.leibie.select();
		 return(false);
	   }

	   if(form.xinghao.value=="")
	   {
	     alert("请输入菜品编号!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入菜品数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入菜品简介!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="?action=save&id=<?php  echo $_GET[id];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">菜品名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="name" size="25" class="inputcss" value="<?php  echo $data1[name];?>">
            </div></td>
          </tr>
  <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">菜品图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">价格：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">市场价：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php  echo $data1[shichangjia];?>">
                元&nbsp;&nbsp;会员价：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php  echo $data1[huiyuanjia];?>">
                元</div></td>
          </tr>
          
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">菜品类别：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
              <select name="leibie" id="leibie">
  <?php 
  $sql="select * from leibie order by id DESC";
 $res=mysql_query($sql);
 while($rs=mysql_fetch_array($res))
 {
	 ?>

	  <option value="<?php  echo $rs[id]?>" <?php  if($rs[id]==$data1[leibie]) echo "selected"; ?>><?php  echo $rs[name]?></option>
	 <?php 
	 }
  ?>

  </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">菜品编号：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php  echo $data1[xinghao];?>">
            </div></td>
          </tr>
           
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">菜品数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php  echo $data1[shuliang];?>">
            </div></td>
          </tr>

          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">菜品简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php  echo $data1[jianjie];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
