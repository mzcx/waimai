<?php
require("header.php");

?>
<table width="950" border="0" align="center">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>



<TABLE width=950 border=0 align="center" cellPadding=0 cellSpacing=0 id=table_info>
 <TR height=35 align=left >
	 	 <td style="color:white;padding-left:30px" colspan=2 class="menu_bar">新闻公告</TD>


 	 

 </TR>

    <?php


			  $sql="select * from notice $where order by id DESC";
			    $res=mysql_query($sql);
					$i=0;

	  while($data=mysql_fetch_array($res))
	  {

		$i++;
	?>
  <TR height=35 align=left >
   
 <td height="25" style="padding-left:20px"><?php echo $data["title"]?></td>

<td height="25"><?php
 echo "<font color=red><a href=view1.php?id=$data[id] >查看</a></font>";

?></TR>
  
<?php
	}
?>

     </TABLE>
<table width="950" border="0" align="center">
  <tr>
    <td height="20">&nbsp;</td>
  </tr>
</table>




<?php

require("footer.php");
?>