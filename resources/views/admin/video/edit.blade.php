@extends('admin.layouts.layouts')
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
                                <label for="name" class="col-xs-4 control-label">视频或者音频</label>
                                <div class="col-xs-4">
                                    <div class="form-group " id="aetherupload-wrapper" ><!--组件最外部需要有一个名为aetherupload-wrapper的id，用以包装组件-->
                                        <div class="controls" >
                                            <input type="file" id="file"  onchange="aetherupload(this,'file').success(getVideoUrl).upload()"/><!--需要有一个名为file的id，用以标识上传的文件，video(file,group)中第二个参数为分组名，success方法可用于声名上传成功后的回调方法名-->
                                            <div class="progress " style="height: 6px;margin-bottom: 2px;margin-top: 10px;width: 200px;">
                                                <div id="progressbar" style="background:blue;height:6px;width:0;"></div><!--需要有一个名为progressbar的id，用以标识进度条-->
                                            </div>
                                            <span style="font-size:12px;color:#aaa;" id="output">等待上传</span><!--需要有一个名为output的id，用以标识提示信息-->
                                            <input type="hidden" name="pic" id="savedpath" ><!--需要有一个名为savedpath的id，用以标识文件保存路径的表单字段，还需要一个任意名称的name-->
                                        </div>
                                    </div>
                                    <div id="result"></div>
                                </div>
                            </div>
                            <div class="col-md-offset-5" >
                                <button type="submit" class="btn btn-success m-2" id="submit" name="repass">保存</button>
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
    <script>
        $(document).ready(function() {
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/video/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/video/addOperate')}}';
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
            html = '<input type="hidden" name="video" value="'+url+'" />';
            $("form").append(html);
        }
    </script>
    @endsection