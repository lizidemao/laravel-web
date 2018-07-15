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
                                <div class="card-box">
                                    <h4 class="header-title mb-4">网站概述</h4>

                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#0acf97" value="15" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">访问人数</p>
                                                    <h3 class="">15</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f9bc0b" value="98" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">今日总浏览</p>
                                                    <h3 class="">98</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f1556c" value="14" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">发帖数量</p>
                                                    <h3 class="">14</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#2d7bf4" value="49" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">总留言量</p>
                                                    <h3 class=""49</h3>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">访问地区</h4>

                                    <div id="website-stats" style="height: 350px;" class="flot-chart mt-5"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">时间分布</h4>

                                    <div id="combine-chart">
                                        <div id="combine-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">留言板</h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-centered m-0">

                                            <thead>
                                            <tr>
                                                <th>头像</th>
                                                <th>昵称/账号</th>
                                                <th>联系方式</th>
                                                <th>发布时间</th>
                                                <th>留言内容</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="/Admin/assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">范云舰</h5>
                                                    <p class="mb-0 text-muted"><small>321@qq.com</small></p>
                                                </td>

                                                <td>
                                                     sdadsa
                                                </td>

                                                <td>
                                                    2018-07-13 10:33:49
                                                </td>

                                                <td>
                                                    这是一个测试
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="/Admin/assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">root</h5>
                                                    <p class="mb-0 text-muted"><small>123@qq.com</small></p>
                                                </td>

                                                <td>
                                                     188767676342
                                                </td>

                                                <td>
                                                    2018-07-13 10:35:20
                                                </td>

                                                <td>
                                                    dfsfsdfdsvxcx
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/Admin/assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">栗子</h5>
                                                    <p class="mb-0 text-muted"><small>657059205@qq.com</small></p>
                                                </td>

                                                <td>
                                                     18611555196
                                                </td>

                                                <td>
                                                    2018-07-15 19:12:25
                                                </td>

                                                <td>
                                                    范云舰你今天是不是吃大蒜了？
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/Admin/assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                               <td>
                                                    <h5 class="m-0 font-weight-normal">高级黑</h5>
                                                    <p class="mb-0 text-muted"><small>432423@qq.com</small></p>
                                                </td>

                                                <td>
                                                     1371879994
                                                </td>

                                                <td>
                                                    2018-07-1 15:15:56
                                                </td>

                                                <td>
                                                    今天真高兴
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="/Admin/assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle thumb-sm" />
                                                </td>

                                                <td>
                                                    <h5 class="m-0 font-weight-normal">root</h5>
                                                    <p class="mb-0 text-muted"><small>123@qq.com</small></p>
                                                </td>

                                                <td>
                                                     12334556
                                                </td>

                                                <td>
                                                    2018-07-15 23:15:12
                                                </td>

                                                <td>
                                                    马上要上线了
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-sm btn-custom"><i class="mdi mdi-plus"></i></a>
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-minus"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Total Wallet Balance</h4>


                                    <div id="donut-chart">
                                        <div id="donut-chart-container" class="flot-chart mt-5" style="height: 340px;">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- end row -->




                    </div> <!-- container -->


@endsection