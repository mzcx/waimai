<TABLE border=0 cellPadding=0 cellSpacing=0 width="180">
  <TBODY>




            <table width=100% cellspacing="0" cellpadding="0" border="0">
			<tr>
          <TD width="180" height="35" class="menu_bar">≤À∆∑∑÷¿‡</TD>
        </tr>
<?php
$sql="select * from leibie ";
$res=mysql_query($sql);
while($a=mysql_fetch_array($res))
{
?>
              <tr align="center">
                <td height="30" colspan=3  style="CURSOR: hand" onMouseOver="this.bgColor='#FFFFFF';" onMouseOut="this.bgColor='#FFFFFF';"><font color="#FFFFFF"><a href=cat.php?leibie=<?php echo $a[id]?>><b><font color="#FF6600" size=+1><?php echo $a[name]?></font></b></a></font></td>
              </tr>

<?php
}
	?>
              <tr>
                <td colspan=3 height=1 background="images/bj_x1.gif" ></td>
              </tr>
            </table>






