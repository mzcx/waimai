<?php 
require("header.php");
if($act=="save")
{
$sql=mysql_query("select * from user where name='".$_SESSION[login]."'",$conn);
$info=mysql_fetch_array($sql);
$ordershao=date("YmjHis").$info[id];
$spc=$_SESSION[goodslist];
$slc= $_SESSION[goodsnum];
//减库存

  for($i=0;$i<count($pid)-1;$i++){
$sql="update goods set shuliang=shuliang-$num[$i],cishu=cishu+$num[$i] where id=$pid[$i]";
mysql_query($sql);
}
$xiadanren=$_SESSION[username];
 $time=date("Y-m-j H:i:s");
 $zt="正在配送";
 $total=$_SESSION[goodstotal];
$sql="insert into orders(orderid ,spc,slc,shouhuoren,sex,dizhi,youbian,tel,email,shff,zfff,liuyan,time,xiadanren,zt,total) values ('$ordershao','$spc','$slc','$shouhuoren','$sex','$dz','$yb','$tel','$email','$shff','$zfff','$ly','$time','$_SESSION[login]','$zt','$total')";

 $res=mysql_query($sql);
 $_SESSION[goodslist]="";
$_SESSION[goodsnum]="";
 echo "<script language='javascript'>alert('购买成功！');location.href='myOrder.php';</script>";
	   }

?> <script language="javascript">
		     function chkinput(form)
			 {
			   if(form.shouhuoren.value=="")
			    {
				  alert("请输入收货人姓名!");
				  form.shouhuoren.select();
				  return(false);

				}
				if(form.dz.value=="")
			    {
				  alert("请输入收货人地址!");
				  form.dz.select();
				  return(false);

				}
				if(form.yb.value=="")
			    {
				  alert("请输入收货人邮编!");
				  form.yb.select();
				  return(false);

				}
				if(form.tel.value=="")
			    {
				  alert("请输入收货人联系电话!");
				  form.tel.select();
				  return(false);

				}
				if(form.email.value=="")
			    {
				  alert("请输入收货人E-mail地址!");
				  form.email.select();
				  return(false);

				}
				if(form.email.value.indexOf("@")<0)
				 {
				    alert("收货人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);

				 }
				return(true);

			 }

		   </script><table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">用户结算</td>
  </tr></table>
		  	               <table width="530" height="300" border="0" align="center" cellpadding="0" cellspacing="1">
  <form name="form1" method="post" action="?act=save" onSubmit="return chkinput(this)">
  <?php 
  $sql="select * from `user` where name='$_SESSION[login]'";
$res=mysql_query($sql);
  $d=mysql_fetch_array($res);

  ?>
                <tr>
                  <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">收货人姓名：</div></td>
                  <td width="183" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="shouhuoren" size="25" class="inputcss" value=<?php echo $d[truename]?>>
                  </div></td>
                  <td width="86" bgcolor="#FFFFFF"><div align="center"></div></td>
                  <td width="176" bgcolor="#FFFFFF"><div align="left">
                     
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">详细地址：</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input name="dz" type="text" class="inputcss" id="dz"  size="25" value="<?php echo $d[dizhi]?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">学号 </div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="yb" size="25" class="inputcss" value="<?php echo $d[num]?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="tel" size="25" class="inputcss" value="<?php echo $d[tel]?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">QQ号码：</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <input type="text" name="email" size="25" class="inputcss" value="<?php echo $d[qq]?>">
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">送货方式：</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="shff" id="shff">
                       
                        <option value="送货上门">送货上门</option>
                      </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">支付方式：</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="zfff" id="zfff">
					   <option selected value="货到付款">货到付款</option>
                 
                        <option value="网上支付">网上支付</option>
                      </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="100" bgcolor="#FFFFFF"><div align="center">订单留言：</div></td>
                  <td height="100" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <textarea name="ly" cols="60" rows="8" class="inputcss" ></textarea>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">
                      <input name="submit2" type="submit" class="buttoncss" value="提交订单">
                  </div></td>
                </tr>
              </form></table>
 </div>
		         </div>
	        </div>

<?php 
require("footer.php");
?>