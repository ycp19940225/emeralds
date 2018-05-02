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
            <button class="btn btn-primary pull-right m-l-20" type="button" onclick=" window.location.href='/admin/order/add' ">添加订单</button>
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
                        @if (isset($info))
                            <div class="alert alert-info">
                                {{ $info }}
                            </div>
                        @endif
                        <table id="data-table" class="table table-hover table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>快递名称</th>
                                <th>快递单号</th>
                                <th>代理商</th>
                                <th>操作管理员</th>
                                <th>用户</th>
                                <th>状态</th>
                                <th>备注</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>{{ $v['express_name'] }}</td>
                                    <td>{{ $v['express_code'] }}</td>
                                    <td>{{ $v->agent['agent_name'] }}</td>
                                    <td>{{ $v->admin['adminname'] }}</td>
                                    <td>{{ $v->user['telphone'] }}</td>
                                    <td>{{ check_order_status($v['status']) }}</td>
                                    <td>{{ $v['commit'] }}</td>
                                    <td>{{ $v['created_at'] }}</td>
                                    <td>{{ $v['updated_at'] }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs m-2 detail" href="{{ url('admin/order/edit',['id'=>$v['id']]) }}" >编辑</a>
                                        <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#points_manage_div" data-id="{{ $v['id'] }}" data-name="{{  $v['status'] }}">
                                            修改状态
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
                            <label class="col-lg-2 control-label">当前状态</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control input-sm" name="name" id="nickName" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">选择状态</label>
                            <div class="col-lg-6">
                                <select class="form-control input-md" name="status" id="pointsType">
                                    <option value="0">在路上</option>
                                    <option value="1">已结缘</option>
                                    <option value="2">已退回</option>
                                </select>
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
                    id = btn.data("id"),status;
                if(btn.data("name") == 0){
                    status = "在路上";
                }if(btn.data("name") == 1){
                    status = "已结缘";
                }if(btn.data("name") == 2){
                    status = "已退回";
                }
                $("#id").val(id);
                $("#nickName").val(status);
            });

            $("#pointsManageBtn").click(function () {
                var data = $("form").serialize();
                $.post("{{ url('admin/order/check') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/order/index') }}"',1000);
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
                $.post("{{ url('admin/order/delete') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('loorderion.href="{{ url('admin/order/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }

        function check(i) {
            //询问框
            layer.confirm('是否通过审核？', {
                title:'确认操作',
                btn: ['通过','不通过'] //按钮
            }, function(){
                var data = {
                    id:i,
                    checked: 1
                };
                $.post("{{ url('admin/order/check') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('loorderion.href="{{ url('admin/order/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            },function () {
                var data = {
                    id:i,
                    checked: 2
                };
                $.post("{{ url('admin/order/check') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('loorderion.href="{{ url('admin/order/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
    </script>
@endsection