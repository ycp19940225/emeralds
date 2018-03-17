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
                                <label for="telphone" class="col-xs-4 control-label">手机号（登录名）</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="telphone" name="telphone" value="{{ $data['telphone'] or ''}}" placeholder="请输入手机号" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nickname" class="col-xs-4 control-label">别名</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="nickname" name="nickname" value="{{ $data['nickname'] or ''}}" placeholder="请输入别名" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nickname" class="col-xs-4 control-label">登录密码</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="password" name="password" value="" placeholder="请输入密码" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nickname" class="col-xs-4 control-label">用户类型</label>
                                <div class="col-xs-5">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="0" id="optionsRadios1" name="type" checked>普通用户
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"  value="1" id="optionsRadios1" name="type">管理员客服
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio"  value="2" id="optionsRadios1" name="type">代理商
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-xs-4 control-label">头像</label>
                                <div class="col-xs-4">
                                    @if(Route::current()->getActionMethod() == 'add')
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @else
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="{{ loadStaticImg($data['logo']) }}" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @endif
                                    <p>
                                        <a href="javascript:;" class="file">
                                            <input type="file" id="image-file" name="pic" value="{{ $data['logo'] or '' }}">
                                        </a>
                                    </p>
                                    <p id="file-info"></p>
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
    <script>
        $(document).ready(function() {
            upload.init();
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/users/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/users/addOperate')}}';
                $("form").attr('action',url);
            }
        });
    </script>
    @endsection