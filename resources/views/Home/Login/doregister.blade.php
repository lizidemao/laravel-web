<!-- 继承公共模板内容 -->
@extends('Home/layouts/index')

<!-- 替换单行占位的内容 -->
@section('title', '注册')
@section('lightspot', '注册')
@section('active3')
	active
@endsection

<!-- 替换区块占位的sidebar内容 -->

@section('header')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="height:200px; background-image:url(/static/images/img_bg_1.jpg);">
	<div class="overlay"></div>
	<div class="container">
		
	</div>
</header>

<!-- 留言区 -->
	<div id="fh5co-testimonial" class="fh5co-bg-section" style="padding-top:30px">
		<div class="container">
			<div class="row animate-box row-pb-md" style="padding-bottom:0">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" >
					<span>感谢您对栗子的支持</span>
					<h2>注册</h2>
				</div>
			</div>
	
	<center>
		

		<form action="/" method="post">
		{{csrf_field()}}
		

		<div class="row form-group">
			<div class="col-md-12">
				<label for="email">设置账号</label>
				<input type="text" id="email" name="username" class="form-control" placeholder="设置账号" required>
			</div>
		</div>

		 <div class="row form-group">
			<div class="col-md-12">
				<label for="subject">密码</label>
				<input type="password" id="subject" name="password" class="form-control" placeholder="请输入密码" required>
			</div>
		</div> 

		<div class="row form-group">
			<div class="col-md-12">
				<label for="subject">密码确认</label>
				<input type="password" id="subject" name="password" class="form-control" placeholder="密码确认" required>
			</div>
		</div> 
		<br/>
		<br/>
		<center>
		<div class="row form-group" >
			<input type="submit" value="注册" class="btn btn-primary col-md-4" style="margin-left:390px">
		</div>
		</center>
	</form>


	</center>			

			
	</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	









@endsection