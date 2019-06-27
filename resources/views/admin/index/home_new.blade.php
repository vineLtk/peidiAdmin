@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="counter-box text-center white">
                <div class="text font-17 m-b-5">Total Income</div>
                <h3 class="m-b-10">$758
                    <i class="material-icons col-green">trending_up</i>
                </h3>
                <div class="icon">
                    <div class="chart chart-bar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="counter-box text-center white">
                <div class="text font-17 m-b-5">Orders Received</div>
                <h3 class="m-b-10">1025
                    <i class="material-icons col-red">trending_down</i>
                </h3>
                <div class="icon">
                    <span class="chart chart-line"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="counter-box text-center white">
                <div class="text font-17 m-b-5">Total Sales</div>
                <h3 class="m-b-10">956
                    <i class="material-icons col-green">trending_up</i>
                </h3>
                <div class="icon">
                    <div class="chart chart-pie"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="counter-box text-center white">
                <div class="text font-17 m-b-5">Total Active Users</div>
                <h3 class="m-b-10">214
                    <i class="material-icons col-red">trending_down</i>
                </h3>
                <div class="icon">
                    <div class="chart" id="liveChart">Loading..</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Revenue</strong> Report</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#" onClick="return false;">Action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Another action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="margin-20 p-b-20">
                                <h2>
                                    <span class="col-green">$19,258</span>
                                    <i class="col-green material-icons">trending_up</i>
                                </h2>
                                <div class="icon m-t-10">
                                    <div class="chart chart-bar1">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9
                                    </div>
                                </div>
                                <h4 class="m-t-10">Total Earning</h4>
                            </div>
                            <div class="margin-20">
                                <h2>
                                    <span class="col-orange">1,548</span>
                                    <i class="col-orange material-icons">trending_down</i>
                                </h2>
                                <div class="icon m-t-10">
                                    <div class="chart chart-bar2">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9
                                    </div>
                                </div>
                                <h4 class="m-t-10">New Customers</h4>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-6">
                            <div class="recent-report__chart">
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Task</strong> List</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#" onClick="return false;">Action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Another action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li class="userlist-tab">
                            <a href="#usrtab1" data-toggle="tab" class="userlist-tab-img active show">
                                <img src="../../assets/images/user/user1.jpg" alt="user"> Sarah Smith</a>
                        </li>
                        <li class="userlist-tab">
                            <a href="#usrtab2" data-toggle="tab" class="userlist-tab-img show">
                                <img src="../../assets/images/user/user2.jpg" alt="user"> Jalpa Joshi</a>
                        </li>
                        <li class="userlist-tab">
                            <a href="#usrtab3" data-toggle="tab" class="userlist-tab-img show">
                                <img src="../../assets/images/user/user3.jpg" alt="user"> Mark Peter</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="usrtab1">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Task C</td>
                                            <td><span class="badge col-green">Completed</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-green width-per-72"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task A</td>
                                            <td><span class="badge col-red">On Process</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-red width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task B</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task D</td>
                                            <td><span class="badge col-green">Completed</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-green width-per-72"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task E</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="usrtab2">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Task D</td>
                                            <td><span class="badge col-red">On Process</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-red width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task E</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task F</td>
                                            <td><span class="badge col-green">Completed</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-green width-per-72"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TaskG</td>
                                            <td><span class="badge col-red">On Process</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-red width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task K</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="usrtab3">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Task E</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task D</td>
                                            <td><span class="badge col-red">On Process</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-red width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task F</td>
                                            <td><span class="badge col-green">Completed</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-green width-per-72"
                                                        role="progressbar" aria-valuenow="72" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task L</td>
                                            <td><span class="badge col-red">On Process</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-red width-per-62"
                                                        role="progressbar" aria-valuenow="62" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Task H</td>
                                            <td><span class="badge col-purple">On Hold</span></td>
                                            <td>John Doe</td>
                                            <td>
                                                <div class="progress shadow-style border-radius-per-10">
                                                    <div class="progress-bar l-bg-purple width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>Notice</strong> Board</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#" onClick="return false;">Action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Another action</a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="recent-comment">
                        <div class="notice-board">
                            <div class="table-img">
                                <img class="notice-object" src="../../assets/images/user/user6.jpg" alt="...">
                            </div>
                            <div class="notice-body">
                                <h5 class="notice-heading col-green">Airi Satou</h5>
                                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
                                <small class="text-muted">7 hours ago</small>
                            </div>
                        </div>
                        <div class="notice-board">
                            <div class="table-img">
                                <img class="notice-object" src="../../assets/images/user/user4.jpg" alt="...">
                            </div>
                            <div class="notice-body">
                                <h5 class="notice-heading color-primary col-indigo">Sarah Smith</h5>
                                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
                                <p class="comment-date">1 hour ago</p>
                            </div>
                        </div>
                        <div class="notice-board">
                            <div class="table-img">
                                <img class="notice-object" src="../../assets/images/user/user3.jpg" alt="...">
                            </div>
                            <div class="notice-body">
                                <h5 class="notice-heading color-danger col-cyan">Cara Stevens</h5>
                                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
                                <div class="comment-date">Yesterday</div>
                            </div>
                        </div>
                        <div class="notice-board no-border">
                            <div class="table-img">
                                <img class="notice-object" src="../../assets/images/user/user7.jpg" alt="...">
                            </div>
                            <div class="notice-body">
                                <h5 class="notice-heading color-info col-orange">Ashton Cox</h5>
                                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
                                <div class="comment-date">Yesterday</div>
                            </div>
                        </div>
                        <div class="notice-board no-border">
                            <div class="table-img">
                                <img class="notice-object" src="../../assets/images/user/user1.jpg" alt="...">
                            </div>
                            <div class="notice-body">
                                <h5 class="notice-heading color-info col-orange">Ashton Cox</h5>
                                <p>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</p>
                                <div class="comment-date">Yesterday</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <!-- Activity -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>World</strong> Wide Branches</h2>
                </div>
                <div class="body">
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="map">
                                <div id="world-map-bubble"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <h5>Office Branches</h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/in.png" alt=""></span>
                                            India</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/ca.png" alt=""></span>
                                            Canada</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/br.png" alt=""></span>
                                            Brazil</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/fr.png" alt=""></span>
                                            France</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/sa.png" alt=""></span>
                                            Saudi Arabia</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/us.png" alt=""></span>
                                            United State</td>
                                    </tr>
                                    <tr>
                                        <td><span><img src="../../assets/images/flags/au.png" alt=""></span>
                                            Australia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Activity -->
    </div>
@endsection
@section('script')
<!-- Custom Js -->
<script src="{{asset('atrio1.4/assets/js/pages/dashboard/dashboard2.js')}}"></script>
<script src="{{asset('atrio1.4/assets/js/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- datamaps Js -->
<script src="{{asset('atrio1.4/assets/js/bundles/datamaps/d3.min.js')}}"></script>
<script src="{{asset('atrio1.4/assets/js/bundles/datamaps/topojson.min.js')}}"></script>
<script src="{{asset('atrio1.4/assets/js/bundles/datamaps/datamaps.world.min.js')}}"></script>
@endsection