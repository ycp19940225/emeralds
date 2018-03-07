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
{{--
            <button class="btn btn-primary pull-right m-l-20" type="button" onclick=" window.location.href='/admin/goods/add' ">添加翡翠</button>
--}}
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
                                <th>翡翠名</th>
                                <th>所属品种</th>
                                <th>分类明细</th>
                                <th>封面图</th>
                                <th>价格</th>
                                <th>库存</th>
                                <th>状态</th>
                                <th>审核状态</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{ $v['goods_name'] }}</td>
                                    <td>{{ $v->cat->cat_name or '' }}</td>
                                    <td>
                                        @foreach($v->attr as $type)
                                          {{ $type->type_name }}:{{ $type->pivot->type_val }} &nbsp;
                                            @endforeach
                                    </td>
                                    <td><img width="40px" height="40px" src="{{ loadStaticImg($v['logo']) }}" alt=""></td>
                                    <td>{{ $v['price'] }}</td>
                                    <td>{{ $v['stock'] }}</td>
                                    <td>{{ check_goods_status($v['status']) }}</td>
                                    <td>{{ check_goods_check($v['checked']) }}</td>
                                    <td>{{ $v['created_at'] }}</td>
                                    <td>{{ $v['updated_at'] }}</td>
                                    <td>
                                        {{--<a class="btn btn-success btn-xs m-2 detail" href="{{ url('admin/goods/edit',['id'=>$v['id']]) }}" >编辑</a>--}}
                                        <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
                                        <a href="JavaScript:void(0)" onclick="play_video('{{ loadStaticImg($v['video']) }}')" class="btn btn-info btn-xs m-2 delete" >预览视频</a>
                                        <a href="JavaScript:void(0)" onclick="check({{ $v['id'] }})" class="btn btn-warning btn-xs m-2 delete" >审核</a>
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
            layer.confirm('二级分类将会一并删除,是否删除？', {
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

        /**
         * 视频播放
         * @param url
         */
        function play_video(url) {
            layer.open({
                type: 2,
                title: false,
                area: ['630px', '360px'],
                shade: 0.8,
                closeBtn: 0,
                shadeClose: true,
                content: url
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
                $.post("{{ url('admin/goods/check') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/goods/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            },function () {
                var data = {
                    id:i,
                    checked: 2
                };
                $.post("{{ url('admin/goods/check') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/goods/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
    </script>
@endsection