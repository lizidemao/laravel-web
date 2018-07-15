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

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card-box table-responsive">
					<h4 class="m-t-0 header-title">版块分类</h4>
					<p class="text-muted font-14 m-b-30">
						文章版块管理分类.
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
											<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">id</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">类别名</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">状态</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">路径</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 50px;">缩略图</th>
											<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 250px;">操作</th>
										</tr>
									</thead>
									<tbody>
										<volist name="res" id="res">
											<tr role="row" class="odd">
												<td>{$res.id}</td>
												<td>{$res.name}</td>
												<td>{$res.status}</td>
												<td>{$res.path}</td>
												<td>{$res.blogo}</td>
												<td>
													<div class="button-list">
				                                        <button type="button" class="btn btn-info" disabled="">修改</button>
				                                        <button type="button" class="btn btn-purple" disabled="">添加子模块</button>
				                                        <button type="button" class="btn btn-pink" disabled="">查看帖子</button>
				                                        <button type="button" class="btn btn-dark" disabled="">删除</button>
				                                    </div>
												</td>
											</tr>
										</volist>
									</tbody>
								</table>
								<div class='green-black'>{$show}</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

@endsection