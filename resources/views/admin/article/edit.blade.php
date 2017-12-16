@extends('admin.layouts.layouts')
@section('admin.page.css')
    <link href="{{ loadStatic('admin/css/plugins/summernote/summernote.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet" />
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
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">标题</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ $data['cat_name'] or ''}}" placeholder="请输入分类名" required>
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
                                    <div id="article_content">

                                    </div>

                                    <button  class="btn btn-primary" onclick="content_save()" type="button">保存文章</button>
                                </div>
                                <span class="help-block m-b-none" style="color: red">请编辑文章，完成后记得点击保存按钮</span>

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
    <script src="{{ loadStatic('admin/js/content.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/summernote/summernote-zh-CN.js') }}"></script>
    <script>
        $(document).ready(function() {
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/articlecat/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/articlecat/addOperate')}}';
                $("form").attr('action',url);
            }
            /**
             * 文本编辑
             */
            $("#article_content").summernote({
                lang:"zh-CN",
                height:250,
                focus:true,
                placeholder: '请编辑文章内容...'
            });
        });
        /**
         *文章保存
         */
        function content_save() {
            var markup = $('#goods_detail').code();
            var html = '<textarea style="display: none" name="content" value="'+markup+'" />';
            $("form").append(html);
            layer.msg('保存成功！',{icon: 6});
        }
    </script>
    @endsection