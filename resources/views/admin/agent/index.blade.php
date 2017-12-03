@extends('admin.layouts.layouts')
@section('admin.page.content')

    <div class="wrapper wrapper-content">

    <ol class="breadcrumb pull-left">
        <li><a href="javascript:;">Home</a></li>
        <li class="active">{{ $title }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        <small>
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
                        <table id="data-table" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>姓名</th>
                                <th>手机号</th>
                                <th>摊位号</th>
                                <th>微信号</th>
                                <th>主营项目</th>
                                <th>银行账号</th>
                                <th>支付宝账号</th>
                                <th>QQ号码</th>
                                <th>注册时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                            <tr>
                                <td>{{ $v['agent_code'] }}</td>
                                <td>{{ $v['agent_name'] }}</td>
                                <td>{{ $v['telphone'] }}</td>
                                <td>{{ $v['booth_number'] }}</td>
                                <td>{{ $v['wx'] }}</td>
                                <td>{{ $v['pm'] }}</td>
                                <td>{{ $v['bank_code'] }}</td>
                                <td>{{ $v['alipay_code'] }}</td>
                                <td>{{ $v['qq_code'] }}</td>
                                <td>{{ $v['created_at'] }}</td>
                                <td>{{ check_status($v['status']) }}</td>
                                <td>
                                    <a class="btn btn-info btn-xs m-2 detail" href="JavaScript:void(0)" onclick="check({{ $v['id'] }})">审核</a>
                                    <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
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
    </div>
@endsection
@section('admin.page.js')
    <script>
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
                console.log(data);
                $.post("{{ url('admin/agent/delete') }}",data,function (res) {
                    console.log(res);
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/agent/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
        function check($id) {
            layer.confirm('是否通过审核？', {
                title:'确认操作',
                btn: ['是','否'] //按钮
            }, function(){
                var url =  "{{ url('admin/agent/editOperate') }}";
                var _token =  "{{ csrf_token() }}";
                var data = {
                    id:$id,
                    _token: _token
                };
                $.post(url,data,function (res) {
                    console.log(res);
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/agent/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });

        }
    </script>
    @endsection