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
                        <form action="" class="form-horizontal form_need_validate" role="form" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">账号</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="name" name="adminname" value="{{ $data['adminname'] or ''}}" placeholder="请输入名字" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-xs-4 control-label">密码</label>
                                <div class="col-xs-5">
                                    <input type="password" class="form-control" id="password" name="password" value="{{ $data['password'] or ''}}" placeholder="请输入密码" required>
                                </div>
                            </div>
                            @if( Route::current()->getActionMethod() == 'add')
                            <div class="form-group">
                                <label for="repass" class="col-xs-4 control-label">确认密码</label>
                                <div class="col-xs-5">
                                    <input type="password" class="form-control" id="repass" name="repass" placeholder="确认密码" required>
                                </div>
                            </div>
                            @endif
                            <div class="col-md-offset-5" >
                                <button type="button" class="btn btn-success m-2" id="submit" name="repass">保存</button>
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
    <script>
        /**
         * 表单提交
         */
        $("#submit").click(function () {
            /**
             *表单验证
             */
            if(!$(".form_need_validate").valid()){
                return false;
            }
           var data = $("form").serialize();
            var method = "{{ Route::current()->getActionMethod() }}";
            if(method === 'edit'){
                $.post('{{ url('admin/admin/editOperate') }}',data,function (res) {
                    handle(res);
                },"json");
            }else{
                if(validation() === false){
                    return false;
                }
                $.post('{{ url('admin/admin/addOperate') }}',data,function (res) {
                    handle(res);
                });
            }
        });
        /**
         * 表单验证
         */
        function validation() {
            var password = $("#password").val();
            var repass = $("#repass").val();
            if(password !==repass){
                layer.msg('密码输入不一致！',{icon:5});
                return false;
            }
        }
        /**
         * 结果处理
         */
        function handle(res){
            console.log(res);
            if(res['code'] === 'success'){
                layer.msg(res['msg'],{icon: 6});
                setTimeout('location.href="{{ url('admin/admin/index') }}"',1000);
            }else{
                layer.msg(res['msg'],{icon:5});
            }
        }
    </script>
    @endsection