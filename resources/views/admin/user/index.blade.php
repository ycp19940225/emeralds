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
            <button class="btn btn-primary pull-right m-l-20" type="button" onclick=" window.location.href='/admin/users/add' ">添加用户</button>
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
                    <div class="table-responsive">
                        @if (session('info'))
                            <div class="alert alert-info">
                                {{ session('info') }}
                            </div>
                        @endif
                        <table id="data-table" class="table table-hover table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>手机号</th>
                                <th>别名</th>
                                <th>积分</th>
                                <th>头像</th>
                                <th>邮箱</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                            <tr>
                                <td>{{ $v['id'] }}</td>
                                <td>{{ $v['telphone'] }}</td>
                                <td>{{ $v['nickname'] }}</td>
                                <td>{{ $v['score'] }}</td>
                                <td><img width="40px" height="40px" src="{{ loadStaticImg($v['logo']) }}" alt=""></td>
                                <td>{{ $v['email'] }}</td>
                                <td>{{ $v['created_at'] }}</td>
                                <td>{{ $v['updated_at'] }}</td>
                                <td>
                                    <a class="btn btn-success btn-xs m-2 detail" href="{{ url('admin/users/edit',['id'=>$v['id']]) }}" >编辑</a>
                                    <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#points_manage_div" data-id="{{ $v['id'] }}" data-name="{{  $v['nickname'] }}">
                                        编辑积分
                                    </button>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>

    <div class="modal fade in" id="points_manage_div" style="z-index: 1001; display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" name="close_points_manage">×</button>
                    <h4 class="modal-title">加减积分</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="points">
                        <input name="id" id="id" value="" style="display:none">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">客户姓名</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control input-sm" name="name" id="nickName" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">选择方式</label>
                            <div class="col-lg-6">
                                <select class="form-control input-md" name="type" id="pointsType">
                                    <option value="plus">增加</option>
                                    <option value="minus">减少</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">积分数额</label>
                            <div class="col-lg-10">
                                <input class="form-control input-sm" name="score" value="0" id="pointsNum">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm cancel" data-dismiss="modal" name="close_points_manage">关闭</button>
                    <button type="button" class="btn btn-primary btn-sm" id="pointsManageBtn">保存</button>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('page.js')
@endsection
@section('admin.page.js')
    <script>

        $(function () {
            var modal = $("#points_manage_div");
            modal.on("show.bs.modal", function(e) {
                // 这里的btn就是触发元素，即你点击的删除按钮
                var btn = $(e.relatedTarget),
                    id = btn.data("id"),
                    nickname = btn.data("name");
                $("#id").val(id);
                $("#nickName").val(nickname);
            });

            $("#pointsManageBtn").click(function () {
                var data = $("form").serialize();
                $.post("{{ url('admin/users/editScore') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/users/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        });
        /**
         * 删除
         * @param i
         */
        function del(i) {
            //询问框
            layer.confirm('是否删除？', {
                title:'确认操作',
                btn: ['是','否'] //按钮
            }, function(){
                var _token =  "{{ csrf_token() }}";
                var data = {
                    id:i,
                    _token: _token
                };
                $.post("{{ url('admin/users/delete') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/users/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }


    </script>
    @endsection