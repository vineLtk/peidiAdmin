@extends('admin.layouts.layout')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>{{isset($current_menu)?data_get($current_menu, 'children.0.text', data_get($current_menu, 'text')):''}}</h2>
            </div>
            <div class="body table-responsive dataTables_wrapper">
                <form action="" id="searchForm">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">姓名</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">年龄</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-3 col-sm-12 col-xs-12 ">
                            <button type="button" class="btn btn-primary btn-lg m-l-15 waves-effect pull-right">搜索</button>
                        </div>
                    </div>
                </form>
                
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>上级</th>
                            <th>名称</th>
                            <th>code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</td>
                            <td>{{$item->parent?$item->parent->name:'--'}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->code}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    {{$list->appends(request()->all())->links('admin.layouts.page')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection