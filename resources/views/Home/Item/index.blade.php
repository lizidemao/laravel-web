<!-- 继承公共模板内容 -->
@extends('Home/layouts/index')

<!-- 替换单行占位的内容 -->
@section('title', '项目')
@section('lightspot', '项目')

@section('active2')
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
							<h1 class="mb30">Services</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-services">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-heading">
						<span>We're expert</span>
						<h2>What We Do</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Retina Ready</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Fully Responsive</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>Web Starter</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Retina Ready</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>Fully Responsive</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>Web Starter</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Learn more</a></p>
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