<?php 
require("header.php");

?>
<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td width="950" height="34" class="menu_bar">≤À∆∑∑÷¿‡</td>
  </tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0">
<?php 
						$sql="select * from leibie ";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
						?>
		          <tr>
		             <td height="28" id="roll-line-1607838439" width="100%">
		                <div class="" style="padding:2px 0px;">

		                   <div class="f-left"><img src="./img/head-mark3.gif" align="middle" class="img-vm" border="0"/>
		                      <a href="./cat.php?leibie=<?php  echo $data[id]?>">
		                         <span style="font-size:14px;color:red"><?php  echo $data[name]?></span></a>


		                   </div>

		                   <div class="clear"></div>
		                </div>
		              </td>

		          </tr> <?php 
							}
							?>

		 </table><?php 
require("footer.php");
?>