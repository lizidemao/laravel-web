<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/static/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/static/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/static/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/static/css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/static/css/style.css">
	

	<!-- Modernizr JS -->
	<script src="/static/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


	
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="/">栗子家<span></span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="@section('active1')@show"><a href="/">主页</a></li>
						<li class="has-dropdown @section('active2')@show">
							<a href="/item">项目</a>
							<ul class="dropdown">
								<li><a href="/item/#">前端设计</a></li>
								<li><a href="/item/#">网页交互</a></li>
								<li><a href="/item/#">框架开发</a></li>
								<li><a href="/item/#">应用程序</a></li>
							</ul>
						</li>

						<li class="@section('active3')@show"><a href="/work">作者</a></li>
						<li class="@section('active4')@show"><a href="/message">个人简介</a></li>
						<li class="has-dropdown @section('active5')@show">
							<a href="/item">技术交流</a>
							<ul class="dropdown">
								<li><a href="/item/#">前端开发</a></li>
								<li><a href="/item/#">UI设计</a></li>
								<li><a href="/item/#">PHP开发</a></li>
								<li><a href="/item/#">框架开发</a></li>
							</ul>
						</li>
						<li class="@section('active6')@show"><a href="/contact">联系</a></li>
						
					</ul>

					<!-- <div  style="width:200px; position:absolute; top:-88px;right:-357px;">   
						
							<a style="color:rgba(255, 255, 255, 0.5);" class="@section('active3')@show" href="/login">登录</a>
							<a style="color:rgba(255, 255, 255, 0.5);" class="@section('active3')@show" href="/register">注册</a>
						
						 <div class="clearfix"> </div> 
					</div> -->
					@guest
						<div  style="width:200px; position:absolute; top:-88px;right:-357px;">   
						
							<a style="color:rgba(255, 255, 255, 0.5);" class="@section('active3')@show" href="{{ route('login') }}">登录</a>
							<a style="color:rgba(255, 255, 255, 0.5);" class="@section('active3')@show" href="{{ route('register') }}">注册</a>
						
							<div class="clearfix"> </div> 
                        </div>
                    @else

						<div  style="width:200px; position:absolute; top:-88px;right:-357px; ">   
						
							<li class="dropdown" style="list-style-type:none;" >
                                <a style="color:rgba(255, 255, 255, 0.5);" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="background-color:rgba(255, 255, 255, 0.5);">
                                    <li >
                                        <a style="padding:10px;" href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">退出
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
						<div class="clearfix"> </div> 

                        </div>   
                    @endguest

				</div>
			</div>
			
		</div>
	</nav>

@section('header')	
@show
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3>栗子科技.</h3>
					<p>栗子科技是诚信的互联网基础服务提供商，ICANN&CNNIC双认证域名注册机构，16年来，累计超过50万个网站在栗子云平台稳定运行，1000万个域名通过栗子云平台注册和管理，100万个用户通过栗子云的域名交易平台完成交易，栗子云一直在努力为您创建一个安全、快捷、稳定的一站式互联网基础服务平台!</p>
					<p><a href="#">了解更多</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">关于我们</a></li>
						<li><a href="#">帮助</a></li>
						<li><a href="#">联系</a></li>
						<li><a href="#">条款</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">官方商店</a></li>
						<li><a href="#">隐私</a></li>
						<li><a href="#">客户评价</a></li>
						<li><a href="#">手册</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">联系设计师</a></li>
						<li><a href="#">联系开发人员</a></li>
						<li><a href="#">开发团队</a></li>
						<li><a href="#">上午合作</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Copyright © 2002-2018 栗子科技, All rights reserved.     京ICP备14048674号-9</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/static/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/static/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/static/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/static/js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="/static/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="/static/js/jquery.magnific-popup.min.js"></script>
	<script src="/static/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="/static/js/main.js"></script>

	</body>
</html>

