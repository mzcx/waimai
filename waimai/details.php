<?php 
require("header.php");

						$sql="select * from news where id=$id";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);

						?>
<div class="page_row">
			<!--左边的 -->
			<div class="page_main_msg left">
		        <div class="left_row">
		            <div class="list pic_news">
		  	                <div class="list_bar">&nbsp;查看公告
		  	                  <table width="100%" border="0"> <tr>
		  	                      <td height="20" align="center">&nbsp;</td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td align="center">&nbsp;<font size="+1" color="#000000"><?php  echo $data[title]?></font></td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td height="20" align="center">&nbsp;</td>
	  	                        </tr>
		  	                    <tr>
		  	                      <td>&nbsp;<?php  echo $data[content]?></td>
	  	                        </tr>
	  	                      </table>
		  	                </div>

				  </div>
		         </div>
	        </div>
			<!--左边的 -->	<?php 

			require("right.php");
			?>

			<!-- 右边的 -->
		</div>
<?php 
require("footer.php");
?>