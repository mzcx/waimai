<?php

require("header.php");
?>
<?php
$sql="select * from notice where id=$id";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

?><br><br><br>
<TABLE width=950 border=0 align="center" cellPadding=0 cellSpacing=0 id=table_info>
 <TR height=55 align="center">
	 	 <td style="padding-left:30px" colspan=2><?php echo $data[title];?></TD>


 	 

 </TR>
 <TR height=35 align=left >
	 	 <td style="padding-left:30px" colspan=2><?php echo $data[content];?></TD>


 	 

 </TR>
</table>
<!--µ×²¿-->
<?php
require("footer.php");
?>
