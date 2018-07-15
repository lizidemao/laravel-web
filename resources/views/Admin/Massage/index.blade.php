<!-- 继承模板内容 -->
@extends('Admin/Layouts/index')

<!-- 替换头部标题 -->
@section('title', '主页')

<!-- 替换标题 -->
@section('nav', '后台主页')

<!-- 替换简介 -->
@section('intro', '欢迎发现更多精彩')

<!-- 替换区块占位的sidebar内容 -->

@section('content')
	<div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">留言管理</h4>
                <p class="text-muted font-14 m-b-30">
                   对留言模块进行管理 <code>$().DataTable();</code>.
                </p>

                <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length"><label>显示 <select name="datatable_length" aria-controls="datatable" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> 条</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>搜索:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                    <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 98px;">ID</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">昵称</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 282px;">用户名</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">联系方式</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Email</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 386px;">留言信息</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 184px;">留言时间</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 143px;">操作</th></tr>
                    </thead>


                    <tbody>
                    
                    
                    <tr role="row" class="odd">
                        <td class="sorting_1">1</td>
                        <td>root</td>
                        <td>123@qq.com</td>
                        <td>123456789</td>
                        <td>123@qq.com</td>
                        <td>afdsfsfdsfds</td>
                        <td>2018-07-13 10:02:48</td>
                        <td>
							<a href="#">回复</a> |
							<a href="#">删除</a> |
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="sorting_1">2</td>
                        <td>栗子</td>
                        <td>321@qq.com</td>
                        <td>18611555196</td>
                        <td>657059205@qq.com</td>
                        <td>这是一个测试</td>
                        <td>2018-07-14 17:30:23</td>
                        <td>
							<a href="#">回复</a> |
							<a href="#">删除</a> |
                        </td>
                    </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">显示 1 - 10 共 2 条</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">上一页</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">下一页</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>


@endsection