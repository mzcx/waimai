<!-- 右边的用户登录。留言。投票 -->
			<div class="page_other_msg right">
				<div class="left_row">
					<div class="list">
						<div class="list_bar">
							用户登录
						</div>
						<div class="list_content">
							<div id="div">





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
?>
<form action="login.php?act=login" name="userLogin" method="post" onSubmit="return login()">
			      <table cellspacing="0" cellpadding="0" width="98%" align="center" border="0">
			          <tr>
			            <td align="center" colspan="2" height="10"></td>
			          </tr>
			          <tr>
			            <td align="right" width="31%" height="30" style="font-size: 11px;">用户名：</td>
			            <td align="left" width="69%"><input class="input" id="username" title="用户名不能为空" size="14" name="userName" type="text" /></td>
			          </tr>
			          <tr>
			            <td align="right" height="30" style="font-size: 11px;">密　码：</td>
			            <td align="left"><input class="input" title="密码不能为空" type="password" size="16" name="userPw"/></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="10"><font color="red"></font></td>
			          </tr>
			          <tr>
			            <td align="center" colspan="2" height="30">
			               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			               <input type="submit" value="登  录"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />
						   &nbsp;
						   <input type="button" value="注  册" onclick="javascript:location.href='reg.php'" style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" />
			            </td>
			          </tr>
			      </table>
		    </form>
<?php 
							   }
						   else
						   {
							   ?>

		        <br/>
			     欢迎您：<?php  echo $_SESSION[login]?> &nbsp;&nbsp;&nbsp;&nbsp;
			    <a href="./logout.php">安全退出</a> &nbsp;&nbsp;&nbsp;&nbsp;
			    <br/><br/><br/>

<?php 
	}
	?>
							</div>
						</div>
					</div>
				</div>
                <div class="left_row">
				    <div class="list">
				        <div class="list_bar">菜品分类</div>
				        <div class="list_content">
				            <div id="div">
				                   <div style="overflow:hidden;height:150px;">
							             <div id="roll-orig-1607838439">





	     <table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php 
						$sql="select * from categories where reid=0";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
						?>
		          <tr>
		             <td height="28" id="roll-line-1607838439" width="100%">
		                <div class="" style="padding:2px 0px;">

		                   <div class="f-left"><img src="./img/head-mark3.gif" align="middle" class="img-vm" border="0"/>
		                      <a href="./cat.php?dalei=<?php  echo $data[id]?>">
		                         <span style="font-size:14px;color:red"><?php  echo $data[name]?></span></a>->
<?php 
							   	$sq="select * from categories where reid=$data[id]";
$res=mysql_query($sq);
while($d=mysql_fetch_array($res))
echo  '<a href="./cat.php?xiaolei='.$d[id].'">                        <span style="font-size:14px;">'.$d[name].'</span></a>&nbsp;';
						?>


		                   </div>

		                   <div class="clear"></div>
		                </div>
		              </td>

		          </tr> <?php 
							}
							?>

		 </table>
	</body>
</html>

							             </div>
						                 <div id="roll-copy-1607838439"></div>
				                   </div>
					        </div>
					    </div>
				    </div>
				</div>
				<div class="left_row">
				    <div class="list">
				        <div class="list_bar"><span style="float:left">网站公告</span>
							 <span style="float:right"><a href="./gonggao.php">更多>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
				        <div class="list_content">
				            <div id="div">
				                   <div style="overflow:hidden;height:150px;">
							             <div id="roll-orig-1607838439">




		 <table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php 
						$sql="select * from news order by id DESC limit 0,6";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
						?>
		          <tr><td height="28" id="roll-line-1607838439" width="100%"><div class="" style="padding:2px 0px;"><div class="f-left"><img src="./img/head-mark3.gif" align="middle" class="img-vm" border="0"/> <a href="./details.php?id=<?php  echo $data[id]?>" title=""><span style=""><?php  echo $data[title]?></span></a></div><div class="clear"></div></div></td></tr>
<?php 
							}
							?>
		 </table>
	</body>
</html>

							             </div>
						                 <div id="roll-copy-1607838439"></div>
				                   </div>
					        </div>
					    </div>
				    </div>
				</div>
			</div>
			<div style="clear: both"></div>