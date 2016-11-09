
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<meta name="renderer" content="webkit">
	<title>CSS3 响应式纵向滚屏翻页，支持键盘，鼠标操作</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/public.css">
	<link rel="stylesheet" href="FONT\css\font-awesome.min.css">
	<!--[if lte IE 8]>
	<style type="text/css">
		html,body{width:100%; height:100%; overflow:scroll}
		.section-btn{display:none;}
	</style>
	<![endif]-->
</head>
<body>
	<section class="section-wrap">
		<div class="section section-1">
			<div class="title active">
				<div id="top">
					<div class="loga">
						<img src="images/log.jpg" alt="">
					</div>
					<ul class="list">
						<li><a href="">首页</a></li>
						<li><a href="">活动</a></li>
						<li><a href="">墨凌项目</a></li>
						<li><a href="">墨凌周边</a></li>
						<li><a href="">联系墨凌</a></li>
					</ul>
				</div>
				<div class="bannerbox">
				 
					<a href=""><img src="images/banner1.jpg" alt=""></a>
					<a href=""><img src="images/banner2.jpg" alt=""></a>
					<a href=""><img src="images/banner3.jpg" alt=""></a>
					<a href=""><img src="images/banner4.jpg" alt=""></a>
				 
					<div class="left"><</div>
					<div class="right">></div>
					<ul class="btnbox">
						
					</ul>
				</div>
			</div>
		</div>
		<div class="section section-2">
			<div class="title">
			</div>
			<div class="featurebox"><img src="images/pic01.jpg" alt=""></div>
		</div>
		<div class="section section-3">
			<div class="title">
			</div>
			<div class="featurebox"><img src="images/pic02.jpg" alt=""></div>
		</div>
		<div class="section section-4">
			<div class="title">
			</div>
			<div class="featurebox"><img src="images/pic03.jpg" alt=""></div>
		</div>
		<div class="section section-5">
				<div class="mapfooter">
					<div class="mapfooter-app">
						<div class="mapfooter-app-image">
							<img src="images/二维码.png" alt="扫码下载 APP"> 
							<span>扫码下载 APP</span>
						</div>
						<div class="mapfooter-app-text">
							<p>新用户首次下单</p>
							<strong>最高</strong><strong class="color-stress">立减20元</strong><p>立即下载APP，享更多优惠吧！</p>
						</div>
					</div>
					<p class="mapfooter-link">
						<a href="">我要开店</a>
						<a href="">联系我们</a> 
						<a href="">服务条款和协议</a> 
						<a href="">加入我们</a>
					</p>
					<div class="footer-copyright">
						增值电信业务许可证 : 
						<a href="" target="_blank">沪B2-20150033</a> | <a href="" >沪ICP备 09007032</a> | <a href="" >上海工商行政管理</a> 
						Copyright ©2008-2015 ele.me, All Rights Reserved.
					</div>
					<div class="footer-police">
						<a href="http://www.zx110.org/picp/?sn=310100103568" rel="nofollow" target="_blank">
							<img alt="已通过沪公网备案，备案号 310100103568" src="images/bottom.jpg" height="30">
						</a>
					</div>

			</div>
		</div>
	</section>
	<ul class="section-btn">
	  <li class="on"></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	</ul>
	<div class="arrow">&laquo;</div>


<script src="js/jquery.1.12.3.js"></script>
<script src="js/index.js"></script>
<script src="js/mousewheel.js"></script>


</body>
</html>