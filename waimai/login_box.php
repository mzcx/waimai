 <script language="javascript">
							 function chkuserinput(form){
							   if(form.username.value==""){
								  alert("请输入用户名!");
								  form.username.select();
								  return(false);
								}
								if(form.userpwd.value==""){
								  alert("请输入用户密码!");
								  form.userpwd.select();
								  return(false);
								}
								if(form.yz.value==""){
								  alert("请输入验证码!");
								  form.yz.select();
								  return(false);
								}
							   return(true);
							 }
						  </script>
<form name="userlogin" method="post" action="chkuser.php">
<TABLE border=0 cellPadding=0 cellSpacing=0>
          <tr>
                <TD width="180" height="35" class="menu_left">会员中心</TD>
                        </tr>
 <?php
								 if($_SESSION[username]=="")
								 {
								 ?>
<tr>
<td align="center"><font color="#FF6633">顾客您好,购买菜品请先登录</font></td>
</tr>
<tr>
<td align="center">用户名：
<input type="text" class="wenbenkuang" name="username" size="14">
</td>
</tr>
<tr>
<td align="center">密　码：
<input type="password" class="wenbenkuang" name="userpwd" size="14">
</td>
</tr>
<tr>
<td align="center">验证码：
<input class=wenbenkuang name=yz type=text value="" maxLength=4 size=6>
 <?php 
									   $num=intval(mt_rand(1000,9999));
									   for($i=0;$i<4;$i++){
										echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
									   }
									?>
</td>
</tr>
<tr><input type="hidden" value="<?php  echo $num;?>" name="num">
<td align="center" height="38">
<input class=go-wenbenkuang name="imageField" value="登 陆" type=submit onFocus="this.blur()">
<input class=go-wenbenkuang onClick="window.location='reg.php'" type=reset value="注 册" name=Submit2>

</td>
</tr>
 <?php
	}
else
{
	?><tr>
<td align="center"><p align=center>欢迎回来:<?php echo $_SESSION[username]?><br>
									<font color="#FF6633" size=+1><a href=user.php>用户中心</a>
									<a href=logout.php>退出登录</a></p></font></td>
</tr>
<?php
}
								  ?>
</table></form>