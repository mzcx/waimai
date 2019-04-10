<?php  include("check_login.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查看订单</title>
<link rel="stylesheet" type="text/css" href="base.css">

</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
 <br><table width="750" height="50" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
			   <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("请输入下订单人或订单号");
					  form.username.select();
					  return(false);
				    }
				   return(true);

				 }
			   </script>
                <form name="form3" method="post" action="" onSubmit="return chkinput3( this)">
				<tr>
                  <td height="25"><div align="center">下订单人姓名:<input type="text" name="username" class="inputcss" size="20" >
                    订单号:<input type="text" name="ddh" size="20" class="inputcss" ></div></td> <td height="25">
                    <div align="center">
					    <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="查 找">
                    </div></td>
                </tr>

			    </form>
              </table>
<?php 
    include("../conn.php");
 $where =" where 1=1";
	 // if($name=="") exit("请输入菜品名称");
	  if($username!="") $where.=" and xiadanren='$username'";
	  if($ddh!="") $where.=" and orderid='$ddh'";

	   $sql=mysql_query("select count(*) as total from orders $where",$conn);
	   $data=mysql_fetch_array($sql);
	   $total=$data[total];


	       $pagesize=25;
		   if ($total<=$pagesize){
		      $pagecount=1;
			}
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(($_GET[page])==""){
			    $page=1;

			}else{
			    $page=intval($_GET[page]);
			}
           $sql1=mysql_query("select * from orders $where order by time desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   $data1=mysql_fetch_array($sql1);
?>

<form name="form1" method="post" action="order_del.php">
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="table_big">
  <tr>
    <td height="30" bgcolor="#E7E7E7"><div align="center" >查看订单 </div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#E7E7E7"><table width="750" height="44" border="0" align="center" cellpadding="0" cellspacing="1">

	  <tr>
        <td width="121" height="20" bgcolor="#FFFFFF"><div align="center">订单号</div></td>
        <td width="59" bgcolor="#FFFFFF"><div align="center">下单人</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">订货人</div></td>
        <td width="70" bgcolor="#FFFFFF"><div align="center">金额总计</div></td>
        <td width="88" bgcolor="#FFFFFF"><div align="center">付款方式</div></td>
        <td width="87" bgcolor="#FFFFFF"><div align="center">收货方式</div></td>
        <td width="141" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
        <td width="115" bgcolor="#FFFFFF"><div align="center">操作</div></td>

	  </tr>
	  <?php 
		    do{
			  $array=explode("@",$data1[spc]);
		      $sum=count($array)*20+260;
	  ?>
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[orderid];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[xiadanren];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[shouhuoren];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[total];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[zfff];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[shff];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php  echo $data1[zt];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center">

		    &nbsp;
		    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='order_view.php?id=<?php  echo $data1[id];?>';" value="处理订单">
            <input type="checkbox"  name=<?php  echo $data1[id];?> value=<?php  echo $data1[id];?>></div></td>
      </tr>
	  <?php 
	      }while($data1=mysql_fetch_array($sql1))
	  ?>

    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="652"><div align="right">
	本站共有订单
	    <?php 
		   echo $total;
		  ?>
	    &nbsp;条&nbsp;每页显示&nbsp;<?php  echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php  echo $page;?>&nbsp;页/共&nbsp;<?php  echo $pagecount; ?>&nbsp;页
        <?php 
		  if($page>=2)
		  {
		  ?>
        <a href="lookdd.php?page=1" title="首页"><font face="webdings"> 9 </font></a>
		 <a href="lookdd.php?id=<?php  echo $id;?>&page=<?php  echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php 
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="lookdd.php?page=<?php  echo $i;?>"><?php  echo $i;?></a>
        <?php 
		     }
		   }else{
		   for($i=1;$i<=4;$i++){
		  ?>
        <a href="lookdd.php?page=<?php  echo $i;?>"><?php  echo $i;?></a>
        <?php  }?>
        <a href="lookdd.php?page=<?php  echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a>
		<a href="lookdd.php?id=<?php  echo $id;?>&page=<?php  echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php  }?>

	</div></td>
    <td width="98"><div align="center"><input type="hidden" name="page_id" value=<?php  echo $page;?>><input type="submit" value="删除选择项" class="buttoncss" onclick="return confirm('确定要删除吗');"></div></td>
  </tr>
</table>

</form>
</body>
</html>
