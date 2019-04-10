<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="resource/theme/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="resource/theme/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})
</script>
</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>功能菜单</div>
<!--开始-->
<dl class="leftmenu">
    <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>新闻公告管理</div> 
	<ul class="menuson">
 <li><cite></cite><a href="notice.php?action=list" target="manFrame">新闻公告管理</a><i></i></li>
  <li><cite></cite><a href="notice.php?action=add" target="manFrame">添加新闻公告</a><i></i></li>

	</ul>
    </dd>   
     <!--结束-->

<!--开始-->
<dl class="leftmenu">
    <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>用户管理</div> 
	<ul class="menuson">
 <li><cite></cite><a href="user.php" target="manFrame">注册用户管理</a><i></i></li>
	</ul>
    </dd>   
     <!--结束-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>菜品管理</div>
    <ul class="menuson">
 <li><cite></cite><a href="goods_add.php" target="manFrame">添加菜品</a><i></i></li>
 <li><cite></cite><a href="goods.php" target="manFrame">菜品管理</a><i></i></li>
 <li><cite></cite><a href="leibie.php" target="manFrame">菜品类别管理</a><i></i></li>
  <li><cite></cite><a href="pingjia.php" target="manFrame">菜品评价管理</a><i></i></li>

 	</ul>
    </dd>   
     <!--结束-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>订单管理</div>
    <ul class="menuson">
 <li><cite></cite><a href="order.php" target="manFrame">订单管理</a><i></i></li>



 	</ul>
    </dd>   
     <!--结束-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>管理员管理</div>
    <ul class="menuson">
 <li><cite></cite><a href="admin_add.php" target="manFrame">添加管理员</a><i></i></li>
 <li><cite></cite><a href="admin.php" target="manFrame">管理员管理</a><i></i></li>
 
 	</ul>
    </dd>   
     <!--结束-->
 <dd><div class="title"><span><img src="resource/theme/images/leftico04.png" /></span>退出系统</div>
    <ul class="menuson">
 <li><cite></cite><a href="../logout.php" target="_top">退出后台</a><i></i></li>
</ul>
    </dd>   
    </dl><!--结束-->
    </body>
</html>