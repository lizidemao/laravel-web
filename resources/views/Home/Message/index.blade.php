<!-- 继承公共模板内容 -->
@extends('Home/layouts/index')

<!-- 替换单行占位的内容 -->
@section('title', '个人信息')
@section('lightspot', '个人信息')
@section('active4')
	active
@endsection

<!-- 替换区块占位的sidebar内容 -->

@section('header')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/static/images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">个人简介</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-about">
		<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Know us</span>
						<h2>李旭</h2>
						<p>大家好，博主本名李旭，也可叫我栗子，一个对未来充满渴望的小程序猿，栗子出身设计行业，现在从事学习前端和后端。自己在学习的同时自己搭建了一个小网站，请各路大神给予见解和意见，栗子在学习的路途中，勇往直前.</p>
					</div>
				</div>
				<div class="row row-pb-md animate-box">
					<div class="col-md-6 col-md-push-6">
						
						<div class="desc">
							<h3>Mission &amp; Vission</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quo est quis mollitia ratione magni assumenda repellat atque modi temporibus tempore ex. Dolore facilis ex sunt ea praesentium expedita numquam?</p> 
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci rem dolorem nesciunt perferendis quae amet deserunt eum labore quidem minima.</p>
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<img class="img-responsive" src="/static/images/img_bg_1.jpg" alt="about">
					</div>
					
				</div>
			
		</div>
	</div>

	<div id="fh5co-team" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Productive Staff</span>
					<h2>工作经验</h2>
					<p>栗子自2015年毕业以来从事过三份工作，</p>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="/static/images/person1.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>UI设计师</h3>
						<strong class="role">2015年7月-2017年4月</strong>
						<p>这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！历这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！历</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="/static/images/person2.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>直播运营</h3>
						<strong class="role">2017年5月-2018年3月</strong>
						<p>这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！历</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
					<div class="fh5co-staff">
						<img src="/static/images/person3.jpg" alt="Free HTML5 Templates by gettemplates.co">
						<h3>UI设计师</h3>
						<strong class="role">2018年3月-2018年8月</strong>
						<p>这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！历这是一个简历！这是一个简历！这是一个简历！这是一个简历！这是一个简历！</p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
							</div>
		</div>
	</div>
	
	

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>You deserved happiness</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"> <img src="/static/images/person1.jpg" alt="Free HTML5 Bootstrap Template by "> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="/static/images/person2.jpg" alt="Free HTML5 Bootstrap Template by "> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="/static/images/person3.jpg" alt="Free HTML5 Bootstrap Template by "> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="/static/images/person1.jpg" alt="Free HTML5 Bootstrap Template by "> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

				</div>

				

			</div>
		</div>
	</div>


	
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's work together</span>
					<h2>Start Your Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>
@endsection