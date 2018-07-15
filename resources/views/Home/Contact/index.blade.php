<!-- 继承公共模板内容 -->
@extends('Home/layouts/index')

<!-- 替换单行占位的内容 -->
@section('title', '联系')
@section('lightspot', '联系')
@section('active6')
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
						<h1 class="mb30">感 谢 您 对 栗 子 家 的 建 议</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- 留言区 -->
	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>感谢您对栗子的支持</span>
					<h2>留言区</h2>
				</div>
			</div>
			<div class="row">
			@foreach ($data as $v)
				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;{{$v->content}}.&rdquo;</p>
							<p class="author"> <img src="/static/images/person1.jpg" alt="Free HTML5 Bootstrap Template by "> <cite>&mdash; {{$v->name}}</cite><cite>{{$v->ctime}}</cite></p>
							
						</blockquote>
					</div>

				</div>
			@endforeach
				
			</div>

			<div class="col-md-12 text-center">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">«</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">»</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
		</div>
	</div>





<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-1 animate-box">
				
				<div class="fh5co-contact-info">
					<h3>联系信息</h3>
					<ul>
						<li class="address">北京市 <br> 西城区</li>
						<li class="phone"><a href="tel://1234567920">+ 186 11555 196</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">657059205@QQ.com</a></li>
						<li class="url"><a href="http://www.lizij.com">栗子家</a></li>
					</ul>
				</div>

			</div>
			<div class="col-md-6 animate-box">
				<h3>留言</h3>
				<form action="/contact" method="post">
				{{csrf_field()}}
					<div class="row form-group">
						<div class="col-md-6">
							<label for="fname">昵 称</label>
							<input type="text" id="fname" name="name" class="form-control" placeholder="name"  required>
						</div>
						<div class="col-md-6">
							<label for="lname">联系方式</label>
							<input type="text" id="lname" name="phone" class="form-control" placeholder="phone"  required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="email">邮 箱</label>
							<input type="text" id="email" name="email" class="form-control" placeholder="Email"  required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label for="message">你想说的</label>
							<textarea id="message"cols="30" rows="5" name="content" class="form-control" placeholder="请输入..."  required></textarea>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="提交" class="btn btn-primary">
					</div>

				</form>		
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