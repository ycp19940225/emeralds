@extends('admin.layouts.layouts')
@section('admin.page.css')
    <link href="{{ loadStatic('admin/js/extend/umeditor/themes/default/css/umeditor.min.css') }}" rel="stylesheet" />
@endsection
@section('admin.page.content')
    <ol class="breadcrumb pull-left">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">{{ $title }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>
            <button class="btn btn-primary pull-right m-l-20" type="button" onclick=" javascript:history.go(-1) ">返回列表</button>
        </small>
    </h1>
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">{{ $title }}</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form action="" class="form-horizontal form_need_validate" role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">文章分类</label>
                                <div class="col-xs-4">
                                    {{  buildSelect($cat_data,'','cat_id','id','cat_name',isset($data) ? $data['cat_id']:'') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">标题</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $data['title'] or ''}}" placeholder="请输入分类名" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">简介</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="intro" name="intro" value="{{ $data['intro'] or ''}}" placeholder="请输入简介" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">翡翠详细描述</label>
                                <div class="col-xs-4">
                                    <label for="myEditor"></label>
                                    <textarea id="myEditor" name="content" >
                                        {{ $data['content'] or ''}}
                                    </textarea>

                                    <span class="help-block m-b-none" style="color: red">点击全屏进行编辑</span>
                                </div>

                            </div>
                            <div class="col-md-offset-5" >
                                <button type="submit" class="btn btn-success m-2" id="submit" name="repass">提交</button>
                                <button type="reset" class="btn btn-success m-2" id="reset" name="repass">重置</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
@endsection
@section('admin.page.js')
    {{--文本编辑器--}}
    <script src="{{ loadStatic('admin/js/extend/umeditor/umeditor.config.js') }}"></script>
    <script src="{{ loadStatic('admin/js/extend/umeditor/umeditor.js') }}"></script>
    <script src="{{ loadStatic('admin/js/extend/umeditor/lang/zh-cn/zh-cn.js') }}"></script>
    <!-- 实例化编辑器代码 -->
    <script type="text/javascript">
        var um = UM.getEditor('myEditor',{
            initialFrameWidth: '100%'
        });
    </script>
    <script>
        $(document).ready(function() {
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/article/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/article/addOperate')}}';
                $("form").attr('action',url);
            }
        });

    </script>

    @endsection