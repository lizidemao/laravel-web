<!-- 继承模板内容 -->
@extends('Admin/Layouts/index')

<!-- 替换头部标题 -->
@section('title', '用户管理')

<!-- 替换标题 -->
@section('nav', '用户管理')

<!-- 替换简介 -->
@section('intro', '欢迎发现更多精彩')

<!-- 替换内页标题 -->
@section('page_title', '浏览用户')

<!-- 替换内页详情 -->
@section('page_content', '设置、编辑、用户管理')

<!-- 替换区块占位的sidebar内容 -->

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card-box table-responsive">
					<h4 class="m-t-0 header-title">@yield('page_title')</h4>
					<p class="text-muted font-14 m-b-30">
						@yield('page_content')
					</p>

					<div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="dataTables_length" id="datatable_length"></div>
							</div>
							<div class="col-sm-12 col-md-6">
								<div id="datatable_filter" class="dataTables_filter"><label>搜索:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="datatable" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 99px;">编号</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">账户昵称</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 391px;">管理账号</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 99px;">权限</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 99px;">锁定</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 187px;">最后登录</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">操作</th>
										</tr>
									</thead>
									<tbody>
									{{ method_field('PUT') }}
										 @foreach ($data as $v)
											
											<tr role="row" class="odd">
												<td>{{$v->id}}</td>
												<td>{{$v->name}}</td>
												<td>{{$v->email}}</td>
												<td>{{$v->auth}}</td>
												<td>{{$v->status==1?"开启":"关闭"}}</td>
												<td>{{$v->updated_at}}</td>
												<td>
													<a href="/admin/users/{{$v->id}}/edit">编辑</a> |
													<a href="/admin/users/{{$v->id}}">删除</a> |
													<a href="__MODULE__/user/disa/id/{$v.id}">禁用</a> |
												</td>
											</tr>
										@endforeach

									</tbody>
								</table>
								<div class='green-black'>{{ $data->links() }}</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

@endsection
