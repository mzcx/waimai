<?php 
require("header.php");
$sql="select * from goods where id=$goodsId";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
//更新浏览次数
mysql_query("update goods set hits=hits+1 where id=$goodsId");
?>
<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">菜品详情</td>
  </tr></table>
  <table width="950" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="center" style="margin-top:8px">
 <tr align='center' bgcolor="#FFFFFF" >
<td align="center" width="327">
		                        <table  border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF" align="left" >
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">菜品名称：</td>
					                  <td align="left">
					                      <?php  echo $data[name]?>
					                  </td>
					              </tr>
								    <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">菜品类别：</td>
				                    <td align="left">                          <?php  echo
			get_name($data[leibie],'leibie')?>
</td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">市场价：</td>
					                  <td align="left">
         <?php  echo $data[shichangjia]?>元
					                  </td>
					              </tr>
					              <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">会员价：</td>
					                  <td align="left">
                         <?php  echo $data[huiyuanjia]?>元
					                  </td>
					              </tr><tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">菜品数量：</td>
					                  <td align="left">
             <?php  echo $data[shuliang]?>
		                              </td>
					              </tr>


<form action="cart.php?id=<?php  echo $data[id]?>&act=buy" name="f" method="post" onSubmit="return chkinput(this)">

                                     <tr align='center' bgcolor="#FFFFFF" height="22">
					                  <td align="right">&nbsp;</td>
					                  <td align="left"> <input type="submit" value="放入购物车"  style="border:#ccc 1px solid; background-color:#FFFFFF; font-size:12px; padding-top:3px;" /></td>
					              </tr> </form>
							</table>


                            </td>
                            <td align="left" valign="top" width="612">
							<table width="450" border="0" align="left">
                                <tr>
                                  <td align="left" valign="top">&nbsp; <img width="300"  src="<?php  echo $data[tupian]?>"/></td>
                                </tr>

								</table>


								</td>
					     </tr>
                         <tr><td colspan="2"><table width="950" border="0">
  <tr>
    <td   height="30" class="menu_bar"><font color="#FFFFFF">菜品介绍</font></td>
  </tr>
  <tr>
    <td>&nbsp<?php  echo $data[jianjie]?>;</td>
  </tr>

           <tr><td colspan="2"><table width="950" border="0">
  <tr>
    <td  class="menu_bar" height="30"><font color="#FFFFFF">菜品评价</font></td>
  </tr>
  <tr>
    <td><form name="form1" method="post" action="save.php?id=<?php  echo $data[id];?>" onSubmit="return chkinput(this)">
<table width="550" border="0" align="center" cellpadding="0" cellspacing="1">
                  <script language="javascript">
		    function chkinput(form)
			{
			   if(form.title.value=="")
			   {
			     alert("请输入评论主题!");
				 form.title.select();
				 return(false);
			   }
			   if(form.content.value=="")
			   {
			     alert("请输入评论内容!");
				 form.content.select();
				 return(false);
			   }
			   return(true);
			}
		  </script>
                  <tr>
                    <td width="110" height="25" bgcolor="#FFFFFF"><div align="center">评论主题：</div></td>
                    <td width="437" bgcolor="#FFFFFF"><div align="left">
                        <input type="text" name="title" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    </div></td>
                  </tr>

                  <tr>
                    <td height="125" bgcolor="#FFFFFF"><div align="center">评论内容：</div></td>
                    <td height="125" bgcolor="#FFFFFF"><div align="left">
                        <textarea name="content" cols="60" rows="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
						               <br>   <input type="submit" value="发表" class="buttoncss">



						&nbsp;&nbsp;&nbsp;<a href="showpl.php?id=<?php  echo $_GET[goodsId];?>">查看该菜品评论</a>
                    </div></td>
                  </tr>
              </table></td>
            </tr>
        </table></form></td>
  </tr>
</table>
</td></tr>
<tr><td colspan="2"><?php 
require("footer.php");
?></td></tr>

</table>
<br>
