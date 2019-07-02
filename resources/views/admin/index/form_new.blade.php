@extends('admin.layouts.layout')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <h2 class="card-inside-title">基本表单</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">input</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">栅栏</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control">
                                <label class="form-label">col-sm-6</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="col-sm-3">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">输入状态</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line focused">
                                <input type="text" class="form-control" value="Focused" placeholder="Statu Focused">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-line disabled">
                                <input type="text" class="form-control" placeholder="Disabled" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Character Count</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="input-field col s12">
                            <input id="input_text" type="text" data-length="10">
                            <label for="input_text">Input text</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea"
                                data-length="120"></textarea>
                            <label for="textarea2">Textarea</label>
                        </div>
                    </div>
                </div>
                <h2 class="card-inside-title">Select</h2>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <label>选择</label>
                        <select class="browser-default">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>

                <h2 class="card-inside-title">Select2</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <label >Example</label>
                        <select name="select2[]" class="form-control select2" multiple="multiple">
                            <option value="1">1</option>
                            <option value="2" selected="selected">2</option>
                            <option value="3" selected="selected">3</option>
                            <option value="4">4</option>
                        </select>
                        <p class="help-block text-muted">
                            添加 <code>class="select2"</code>, <code>multiple</code> 属性表示允许多选, <code>option</code> 标签添加 <code>selected</code>属性表示选中状态
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <label >Ajax</label>
                        <select name="" class="form-control select2" data-ajax-url="{{route('api.web.city', ['level' => 1])}}">
                            <option value=""></option>
                        </select>
                        <p class="help-block text-muted">
                            属性 <code>data-ajax-url</code> 填写请求数据的地址, 添加 <code>class="select2"</code>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <label >Ajax Selected</label>
                        <select name="" class="form-control select2" data-json="{{json_encode($city)}}" data-ajax-url="{{route('api.web.city', ['level' => 1])}}">
                            <option value=""></option>
                        </select>
                        <p class="help-block text-muted">
                            属性 <code>data-json</code> 填写 <b>json_encode</b> 后的单个数据
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <label >Ajax Multiple</label>
                        <select name="" class="form-control select2" multiple data-ajax-url="{{route('api.web.city', ['level' => 1])}}">
                            <option value=""></option>
                        </select>
                        <p class="help-block text-muted">
                            添加属性 <code>multiple</code>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <label >Ajax Multiple Selected</label>
                        <select name="select2-ajax-multiple-selected" id="select2-ajax-multiple-selected" class="form-control select2" multiple data-json="{{json_encode($cities)}}" data-ajax-url="{{route('api.web.city', ['level' => 1])}}">
                            <option value=""></option>
                        </select>
                        <span class="helper-text" >
                            添加属性 <code>multiple</code>, 属性 <code>data-json</code> 填写 <b>json_encode</b> 后的多个数组
                        </span>
                    </div>
                </div>

                <h2 class="card-inside-title">DatePicker</h2>
                <div class="row clearfix">
                    <div class="col-sm-6 ">
                        <label for="year ">Year</label>

                        <div class="form-line">
                            <input type="text" class="form-control year" id="year">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <label for="month">Month</label>
                        <div class="form-line">
                            <input type="text" class="form-control month" id="month">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <label for="date">Date</label>
                        <div class="form-line">
                            <input type="text" class="form-control date" id="date">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <label for="datetime">Date Time</label>
                        <div class="form-line">
                            <input type="text" class="form-control datetime" id="datetime">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <label for="time">Time</label>
                        <div class="form-line">
                            <input type="text" class="form-control time" id="time">
                        </div>
                    </div>
                </div>

                <h2 class="card-inside-title">File Upload</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                    <form action="{{route('admin.index.upload')}}" class="form-horizontal" method="post" enctype="multipart/form-data" role="form" autocomplete="off">
                    {{csrf_field()}}
                        <div class="col-sm-8">
                            <label >File</label>
                            <input type="file" class="form-control file-input" name="file" data-rule-required="true" data-preview="{{$video_url}}">
                            <span class="helper-text" >
                                添加 <code>class="file-input"</code>
                            </span>
                        </div>
                        <div class="col-sm-8">
                            <label >File preview</label>
                            <input type="file" class="form-control file-input" data-preview="{{$imgs_url}}">
                            <span class="helper-text" >
                                添加属性 <code>data-preview="图片地址,图片地址"</code>
                            </span>
                        </div>
                        <div class="col-sm-8 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">提交</button>
                            <a href="javascript:history.back();" class="btn btn-default">返回</a>
                        </div>
                    </form>
                    </div>
                </div>
                <h2 class="card-inside-title">Custom Error or Success Messages</h2>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                            <span class="helper-text" data-error="Invalid Email" data-success="Valid Email">Helper
                                text
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(function () {
        $('.select2[data-ajax-url]').on('select2:unselecting', function (e) {
            var item = e.params.args.data;
            var data = $(this).select2('data');
            var val = [];
            for (var i in data) {
                if (item.id != data[i].id) {
                    val.push(data[i].id);
                }
            }
            $(this).val(val).trigger('change');
            return true;
        });
    })
</script>
@endsection