<!-- 继承模板内容 -->
@extends('Admin/Layouts/index')

<!-- 替换头部标题 -->
@section('title', '主页')

<!-- 替换标题 -->
@section('nav', '后台主页')

<!-- 替换内页标题 -->
@section('page_title', '添加类别')

<!-- 替换内页详情 -->
@section('page_content', '如果下拉菜单选中的选项为请选择，代表添加根类；否则是在指定分类下添加子类')

<!-- 替换简介 -->
@section('intro', '欢迎发现更多精彩')

<!-- 替换区块占位的sidebar内容 -->

@section('content')

	<div class="container-fluid">
	    <div class="col-lg-6">
	        <div class="card-box">
	            <h4 class="header-title m-t-0">添加类别</h4>
	            <p class="text-muted font-14 m-b-20">
	                如果下拉菜单选中的选项为请选择，代表添加根类；否则是在指定分类下添加子类
	            </p>

	            <form action="__MODULE__/Cates/insert" method="post" novalidate="">

	                <div class="form-group">
	                    <label>类别名称 : </label>
	                    <div>
	                        <input type="text" class="form-control" required="" data-parsley-minlength="6" placeholder="请选择类别..." name="name">
	                    </div>
	                </div>
	                <label>选择父类 : </label>
	                <select class="custom-select mt-3" name="pid">
	                    <option value="0">请选择</option>
	                <volist name="res" id="v">
	                    <option value="{$v['id']}">{$v['name']}</option>
	                </volist>
	                </select>
	                <div class="form-group m-b-0" style="margin-top:20px;">
	                    <div>
	                        <button type="submit" class="btn btn-custom waves-effect waves-light">
	                            添加
	                        </button>
	                        <button type="reset" class="btn btn-light waves-effect m-l-5">
	                            重置
	                        </button>
	                    </div>
	                </div>
	            </form>

	        </div> <!-- end card-box -->
	    </div>
	</div>
@endsection