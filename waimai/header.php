<?php 
session_start();
require("conn.php");

?>
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

  <title>个性化智能餐饮推荐系统</title>

<link rel="stylesheet" type="text/css" href="css/font.css">

  </head>

  <body>

<table width="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="119"  align="center">
<img src="images/logo.png">
	</td>
      </tr>
    </table>
    <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td width="950" height="48" background="images/navbg.gif"  >&nbsp;
    	<a href="index.php" style="color:#fff;font-size:14px;font-weight:bold">网站首页</a>&nbsp; <font color=white>|</font> 
    	<a href="notice.php" style="color:#fff;font-size:14px;font-weight:bold">新闻公告</a>&nbsp; <font color=white>|</font> 
    	<a href="all.php" style="color:#fff;font-size:14px;font-weight:bold">最新推荐</a>&nbsp; <font color=white>|</font> 
    	<a href="hot.php" style="color:#fff;font-size:14px;font-weight:bold">热卖推荐</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="tuijianhot" style="color:#fff;font-size:14px;font-weight:bold">个性化推荐</a>&nbsp; <font color=white>|</font>
    	<a href="reg.php"style="color:#fff;font-size:14px;font-weight:bold">用户注册</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="myorder.php" style="color:#fff;font-size:14px;font-weight:bold">我的订单</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="user.php" style="color:#fff;font-size:14px;font-weight:bold">我的信息</a>&nbsp;<font color=white>|</font>&nbsp;
    	<a href="cart.php" style="color:#fff;font-size:14px;font-weight:bold">我的购物车</a>&nbsp;<font color=white>|</font>&nbsp;
    	
    	 </td>

      <?php 
	  if($_SESSION[username]!=""){
	    echo "当前用户:$_SESSION[username]";
	  }
	?>
	<?php 
	if($_SESSION[username]!=""){
	    echo "<a href='logout.php'>注销离开</a>";
	  }
	?>
    </td>
  </tr>

</table>
<table width="1150" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"  align="center"><br>
	<form id="searchForm" action="./search.php" method="post">

					输入菜品名称<input class="inputText" id="goodsName" size="20" onKeyPress="if(event.keyCode==13){searchFormSubmit();return false;}" name="goodsName" type="text" />

					<input type="submit" value="搜索">

		</form></td>
        <td height="30" align="center">
		<script type="text/javascript">

	        function login()
	        {
	           if(document.userLogin.userName.value=="")
	           {
	               alert("请输入用户名");
return(false);
}
	           if(document.userLogin.userPw.value=="")
	           {
	               alert("请输入密码");
	              return(false);
	           }
   return(true);
	        }

	</script>
<?php 
if($_SESSION[login]=="")
{
?><form action="login.php?act=login" name="userLogin" method="post" onSubmit="return login()">用户名：<input class="input" id="username" title="用户名不能为空" size="14" name="userName" type="text" value="zhaoyi" />密　码：<input class="input" title="密码不能为空" type="password" size="16" name="userPw" value="123456"/>  <input type="submit" value="登  录"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />


<?php 
}  else
  {
   ?>

			     欢迎您：<?php  echo $_SESSION[login]?> &nbsp;&nbsp;<a href="./myorder.php">我的订单</a>&nbsp;&nbsp;
			    <a href="./logout.php">安全退出</a>  &nbsp;&nbsp;&nbsp;&nbsp;

<?php 
	}
	?>
</td>
  </tr>
</table></form>