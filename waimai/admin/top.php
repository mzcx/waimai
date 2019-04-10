<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="resource/theme/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="resource/theme/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	$("#logout").click(function(){
		if(window.confirm('您确定要退出吗？')) {
	        top.location = '../logout.php';
	    }
	})	
})	
</script>
</head>

<body style="background:url(resource/theme/images/topbg.gif) repeat-x;">
    <div class="topleft">
    	<div style="margin-top: 20px;margin-left: 20px;">
    		<b style="font-weight: bold;font-size: 25px;color: white;">后台管理</b>
    	</div>
    </div>    
    <div class="topright">    
    <ul>
    <li><a href="javascript:void();" target="_parent" id="logout">退出</a></li>
    </ul>
    <div class="user">
    <span>管理员 您好！</span>  
    </div>    
    </div>
</body>
</html>
