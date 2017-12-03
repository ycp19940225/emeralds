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
            <button class="btn btn-primary pull-right m-l-20" type="button" onclick=" window.location.href='/admin/cat/add' ">添加分类</button>
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
                        <table id="data-table" class="table table-hover table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>分类名</th>
                                <th>二级分类</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                @if($v['parent_id'] == 0)
                                <tr>
                                    <td>{{ $v['cat_name'] }}</td>
                                    <td>
                                        @foreach($v->child_cat as $k=>$v)
                                            <a href="" style="color: red" title="点击编辑属性">{{ $v['cat_name'] }}</a>
                                        @endforeach
                                    </td>
                                    <td>{{ $v['created_at'] }}</td>
                                    <td>{{ $v['updated_at'] }}</td>
                                    <td>
                                        <a class="btn btn-success btn-xs m-2 detail" href="{{ url('admin/cat/edit',['id'=>$v['id']]) }}" >编辑</a>
                                        <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
                                    </td>
                                </tr>
                                @endif
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
    </script>
@endsection