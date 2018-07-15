<!-- 继承公共模板内容 -->
@extends('Home/layouts/index')

<!-- 替换单行占位的内容 -->
@section('title', '作品')
@section('lightspot', '作品')
@section('active3')
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
							<h1 class="mb30">Awesome Project</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-project">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading  animate-box">
					<span>Want Some Cool Stuff</span>
					<h2>Recent Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-1.jpg" alt="" class="img-responsive">
						<h3>Clipboard Office</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-2.jpg" alt="" class="img-responsive">
						<h3>Smart Layers</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-3.jpg" alt="" class="img-responsive">
						<h3>Notepad Mockup</h3>
					</a>
				</div>



				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-4.jpg" alt="" class="img-responsive">
						<h3>Outline Ribbon</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-5.jpg" alt="" class="img-responsive">
						<h3>Food Icons Set</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-6.jpg" alt="" class="img-responsive">
						<h3>Business Card</h3>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-1.jpg" alt="" class="img-responsive">
						<h3>Clipboard Office</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-2.jpg" alt="" class="img-responsive">
						<h3>Smart Layers</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-3.jpg" alt="" class="img-responsive">
						<h3>Notepad Mockup</h3>
					</a>
				</div>



				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-4.jpg" alt="" class="img-responsive">
						<h3>Outline Ribbon</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-5.jpg" alt="" class="img-responsive">
						<h3>Food Icons Set</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="/static/images/work-6.jpg" alt="" class="img-responsive">
						<h3>Business Card</h3>
					</a>
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