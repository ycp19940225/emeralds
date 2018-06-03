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
                                <th>精度</th>
                                <th>纬度</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{ $v['id'] }}</td>
                                    <td>{{ $v['position_x'] }}</td>
                                    <td>{{ $v['position_y'] }}</td>
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

@endsection
@section('page.js')
@endsection
@section('admin.page.js')
    <script>
        /**
         * 删除
         * @param i
         */
        function del(i) {
            //询问框
            layer.confirm('该分类下的类型将会一并删除,是否删除？', {
                title:'确认操作',
                btn: ['是','否'] //按钮
            }, function(){
                var _token =  "{{ csrf_token() }}";
                var data = {
                    id:i,
                    _token: _token
                };
                $.post("{{ url('admin/cat/delete') }}",data,function (res) {
                    console.log(res);
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/cat/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
        $(document).ready(function () {
            $("input[name = 'sort']").change(function () {
                var _token =  "{{ csrf_token() }}";
                var sort =  $(this).val();
                var id =  '';
                id = $(this).data('id');
                var data = {
                    id:id,
                    sort:sort,
                    _token: _token
                };
                $.post("{{ url('admin/cat/sort') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/cat/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        });
    </script>
@endsection