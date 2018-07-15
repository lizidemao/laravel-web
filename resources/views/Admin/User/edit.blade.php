<!-- 继承模板内容 -->
@extends('Admin/Layouts/index')

<!-- 替换头部标题 -->
@section('title', '用户管理')

<!-- 替换标题 -->
@section('nav', '修改用户资料')

<!-- 替换内页标题 -->
@section('page_title', '修改用户资料')

<!-- 替换内页详情 -->
@section('page_content', '设置权限、编辑用户资料、禁用、超级管理员权限')

<!-- 替换简介 -->
@section('intro', '欢迎发现更多精彩')

<!-- 替换区块占位的sidebar内容 -->

@section('content')
	<div class="container-fluid">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="header-title m-t-0">@yield('page_title')</h4>
            <p class="text-muted font-14 m-b-20">
                @yield('page_content')
            </p>

            <form role="form" novalidate="" action="/admin/users/{{$data['id']}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
                <div class="form-group row">
                    <label for="inputEmail3" class="col-4 col-form-label">用户昵称<span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <input type="text" required="" parsley-type="text" class="form-control" id="inputEmail3" placeholder="name" name="name" value="{{$data['name']}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-4 col-form-label">用户账号<span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <input type="email" required="" parsley-type="email" class="form-control" id="inputEmail3" placeholder="username" name="email" value="{{$data['email']}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass1" class="col-4 col-form-label">用户密码<span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <input id="hori-pass1" type="password" placeholder="Password" required="" class="form-control" name="password" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hori-pass2" class="col-4 col-form-label">确认密码
                        <span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <input data-parsley-equalto="#hori-pass1" type="password" required="" placeholder="Password" class="form-control" id="hori-pass2" name="surepass" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="webSite" class="col-4 col-form-label">用户权限<span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <select class="form-control" name="auth" >
                             <option value="1"{{ $data['auth']==1?'selected':''}}>管理员</option>          
                             <option value="0" {{ $data['auth']==0?'selected':''}}>普通用户</option>          
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="webSite" class="col-4 col-form-label">用户状态<span class="text-danger"> ：</span></label>
                    <div class="col-7">
                        <select class="form-control" name="status" >
                             <option value="1"{{ $data['status']==1?'selected':''}}>开启</option>          
                             <option value="0" {{ $data['status']==0?'selected':''}}>关闭</option>          
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8 offset-4">
                        <button type="submit" class="btn btn-custom waves-effect waves-light">
                            修改
                        </button>
                        <button type="reset" class="btn btn-light waves-effect m-l-5">
                            重置
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>


@endsection