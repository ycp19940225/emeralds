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
                        @if (session('error'))
                            <div class="alert alert-info">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="" class="form-horizontal form_need_validate" role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">文章分类</label>
                                <div class="col-xs-4">
                                    {{  buildSelect($cat_data,'','cat_id','id','cat_name',isset($data) ? $data['cat_id']:'') }}
                                </div>
                                <span style="color:red">*必选*</span>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">标题</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $data['title'] or ''}}" placeholder="请输入标题" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">是否置顶</label>
                                <?php if(isset($data['top']) && $data['top'] == 1){ $checked2 = 'checked';}else{$checked1 = 'checked';} ?>
                                <div class="col-xs-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="0"  name="top" {{ $checked1 or ''}}>非置顶</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="1"  name="top" {{ $checked2 or ''}}>置顶</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">文章类型</label>
                                <?php if(isset($data['type']) && $data['type'] == 1){ $checkedS = 'checked';}else if(isset($data['type']) && $data['type'] == 2){ $checkedY = 'checked';}
                                else{$checkedT = 'checked';} ?>
                                <div class="col-xs-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="3"  name="type" {{ $checkedT or ''}}>图文</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="2"  name="type" {{ $checkedY or ''}}>音频</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="1"  name="type" {{ $checkedS or ''}}>视频</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">简介</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="intro" name="intro" value="{{ $data['intro'] or ''}}" placeholder="请输入简介" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-xs-4 control-label">封面图片</label>
                                <div class="col-xs-4">
                                    @if(Route::current()->getActionMethod() == 'add')
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @else
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="{{ loadStaticImg($data['pic']) }}" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @endif
                                    <p>
                                        <a href="javascript:;" class="file">
                                            <input type="file" id="image-file" name="pic" value="{{ $data['pic'] or '' }}">
                                        </a>
                                    </p>
                                    <p id="file-info"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">视频或者音频</label>
                                <div class="col-xs-4">
                                    <div class="form-group " id="aetherupload-wrapper" ><!--组件最外部需要有一个名为aetherupload-wrapper的id，用以包装组件-->
                                        <div class="controls" >
                                            <input type="file" id="file"  onchange="aetherupload(this,'file').success(getVideoUrl).upload()"/><!--需要有一个名为file的id，用以标识上传的文件，video(file,group)中第二个参数为分组名，success方法可用于声名上传成功后的回调方法名-->
                                            <div class="progress " style="height: 6px;margin-bottom: 2px;margin-top: 10px;width: 200px;">
                                                <div id="progressbar" style="background:blue;height:6px;width:0;"></div><!--需要有一个名为progressbar的id，用以标识进度条-->
                                            </div>
                                            <span style="font-size:12px;color:#aaa;" id="output">等待上传</span><!--需要有一个名为output的id，用以标识提示信息-->
                                            <input type="hidden" name="file" id="savedpath" ><!--需要有一个名为savedpath的id，用以标识文件保存路径的表单字段，还需要一个任意名称的name-->
                                        </div>
                                    </div>
                                    <span style="color: red">如为图文则不需上传</span>
                                    <div id="result"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">编辑文章详情</label>
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
    <script src="{{ loadStatic('admin/js/extend/upload.js') }}"></script>
    {{--大文件上传组件--}}
    <script src="{{ URL::asset('js/spark-md5.min.js') }}"></script><!--需要引入spark-md5.min.js-->
    <script src="{{ URL::asset('js/aetherupload.js') }}"></script><!--需要引入aetherupload.js-->
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
            upload.init();
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

        var getVideoUrl = function(){
            // Example
            $('#result').append(
                '<p>原文件名：<span >'+this.fileName+'</span> | 原文件大小：<span >'+parseFloat(this.fileSize / (1000 * 1000)).toFixed(2) + 'MB'+'</span> | 储存文件名：<span >'+this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1)+'</span></p>'
            );
            var html = '';
            var url = this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1);
            html = '<input type="hidden" name="file" value="'+url+'" />';
            $("form").append(html);
        }

    </script>

    @endsection