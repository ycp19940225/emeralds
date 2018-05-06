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
                                <th>申请时间</th>
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
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#points_manage_div" data-id="{{ $v['id'] }}" data-name="{{  $v['goods_name'] }}">
                                            分配名家
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
                    <h4 class="modal-title">选择名家</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" id="points">
                        <input name="id" id="id" value="" style="display:none">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">当前商品</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control input-sm" id="nickName" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">选择名家</label>
                            <div class="col-lg-6">
                                <select class="form-control input-md" name="famous_id" id="pointsType">
                                    @foreach($famousData as $k=>$v)
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                        @endforeach
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
                    id = btn.data("id"),
                    nickname = btn.data("name");
                    $("#id").val(id);
                    $("#nickName").val(nickname);
            });

            $("#pointsManageBtn").click(function () {
                var data = $("#points").serialize();
                $.post("{{ url('admin/famous/goodsToFamous') }}",data,function (res) {
                    if(res['code'] === 'success'){
                        layer.msg(res['msg'],{icon: 6});
                        setTimeout('location.href=location.href',1000);
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                },"json");
            });
        })
    </script>
@endsection