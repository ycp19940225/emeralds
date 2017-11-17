@extends('admin.layouts.layouts')
@section('admin.page.css')
    <link href="{{ loadStatic('admin/js/plugins/multree/multree.css') }}" rel="stylesheet" />

@endsection
@section('admin.page.content')
    <ol class="breadcrumb pull-left">
        <li><a href="javascript:">Home</a></li>
        <li class="active">{{ $title }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">

    </h1>
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <button class="btn btn-info" href="javaScript:void(0);" onclick="refresh()">刷新权限</button>
                        <form method="post" action="{{ route('update_pri_role') }}" class="form-horizontal" >
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $role_id }}">

                            <div class="form-group">
                                <label class="col-md-3 control-label">当前角色</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="text" class="form-control" disabled="disabled"
                                               value="{{ $role['role_name'] }}">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">权限选择</label>
                                <div class="col-md-9">
                                    <label for="accessTree"></label>
                                    <select id="accessTree" name="access[]" multiple="multiple" class="form-control">
                                        @foreach($pris as $v)
                                            <option value="{{ $v['id'] or ''}}"
                                                    data-id="{{ $v['id'] or ''}}"
                                                    data-pid="{{ $v['parent_id'] or ''}}"
                                                    {{ $v['selected'] or ''}}
                                                    {{ $v['disabled']  or ''}}
                                                    >{{ $v['pri_name'] or ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-sm btn-success">确定提交</button>
                                </div>
                            </div>

                        </form>

                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>

@endsection
@section('admin.page.js')
    <script src="{{ loadStatic('admin/js/plugins/multree/multree.js') }}"></script>

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
                $.post("{{ url('admin/role/delete') }}",data,function (res) {
                    console.log(res);
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/role/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
        /**
         * 刷新权限
         */
        function refresh() {
            $.get('{{ route('pri-refresh') }}',function (res) {
                if(res['code'] === 'success'){
                    layer.msg(res['msg'],{icon: 6});
                    setTimeout('window.location.reload()',1000);
                }else{
                    layer.msg(res['msg'],{icon:5});
                }
            });
        }
        /**
         * 初始化树形结构
         */
        $("#accessTree").mulTree();
        $("submit").click(function () {
            var url = $("form").attr('action');
            console.log(url);return;

        });
    </script>
    @endsection