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
            <button class="btn btn-primary pull-right m-l-20" slide="button" onclick=" window.location.href='/admin/famous/add' ">添加名家</button>
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
                                <th>名家名称</th>
                                <th>封面图</th>
                                <th>简介</th>
                                <th>创建时间</th>
                                <th>修改时间</th>
                                <th width="10%">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $k=>$v)
                            <tr>
                                <td>{{ $v['id'] }}</td>
                                <td>{{ $v['name'] }}</td>
                                <td><img width="40px" height="40px" src="{{ loadStaticImg($v['logo']) }}" alt=""></td>
                                <td>{{ $v['intro'] }}</td>
                                <td>{{ $v['created_at'] }}</td>
                                <td>{{ $v['updated_at'] }}</td>
                                <td>
                                    <a class="btn btn-success btn-xs m-2 detail" href="{{ url('admin/famous/edit',['id'=>$v['id']]) }}" >编辑</a>
                                    <!-- Button trigger modal -->
                                    <a href="JavaScript:void(0)" onclick="del({{ $v['id'] }})" class="btn btn-danger btn-xs m-2 delete" >删除</a>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#points_manage_div" data-id="{{ $v['id'] }}" data-name="{{  $v['goods_name'] }}">
                                        商品列表
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
                    <h4 class="modal-title">商品列表</h4>
                </div>
                <div class="modal-body">
                    <table id="data-table" class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>翡翠名</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody id="goodsList">

                        </tbody>
                    </table>
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
                $("#goodsList").empty();
                // 这里的btn就是触发元素，即你点击的删除按钮
                var btn = $(e.relatedTarget),
                    id = btn.data("id");
                $("#id").val(id);
                var data = {
                    'id': id
                };
                $.post("{{ url('admin/famous/getFamousGoods') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        var html = "";
                        $.each(res['data'],function (k,v) {
                            html += "<tr>\n" +
                                "                            <th>"+v.id+"</th>\n" +
                                "                            <th>"+v.goods_name+"</th>\n" +
                                "                            <th><a href='JavaScript:void(0)' onclick='del_famous_goods("+v.id+")'>删除</a></th>\n" +
                                "                        </tr>"
                        });
                        $("#goodsList").append(html);
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
                $.post("{{ url('admin/famous/delete') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href="{{ url('admin/famous/index') }}"',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }
        /**
         * 删除商品
         * @param i
         */
        function del_famous_goods(i) {
            //询问框
            layer.confirm('是否删除？', {
                title:'确认操作',
                btn: ['是','否'] //按钮
            }, function(){
                var _token =  "{{ csrf_token() }}";
                var data = {
                    "id":i,
                    "famous_id":0,
                    "type":0
                };
                $.post("{{ url('admin/famous/deleteFamousGoods') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href=location.href',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        }

    </script>
    @endsection