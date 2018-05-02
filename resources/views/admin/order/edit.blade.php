@extends('admin.layouts.layouts')
@section('admin.page.css')
    <link href="{{ loadStatic('admin/css/upload_img/img.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/plugins/summernote/summernote.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet" />
    @endsection
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
                        <form action="" class="form-horizontal form_need_validate" role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">快递公司名</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="express_name" name="express_name" value="{{ $data['express_name'] or ''}}" placeholder="请输入快递公司名" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">快递单号</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="express_code" name="express_code" value="{{ $data['express_code'] or ''}}" placeholder="请输入快递单号" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">选择代理商</label>
                                <div class="col-xs-3">
                                    {{  buildSelect($agent_data,'','agent_id','id','agent_name',isset($data) ? $data['agent_id']:'') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">选择用户</label>
                                <div class="col-xs-3">
                                    {{  buildSelect($user_data,'','user_id','id','telphone',isset($data) ? $data['user_id']:'') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">选择商品</label>
                                <div class="col-xs-3">
                                    {{  buildSelectMore($goods_data,'','goods_id[]','id','goods_name',isset($data) ? $data->goods->toArray():[]) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">备注</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="commit" name="commit" value="{{ $data['commit'] or ''}}" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-offset-5" >
                                <button type="submit" class="btn btn-success m-2" id="submit" name="repass">保存</button>
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
        $(document).ready(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/order/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/order/addOperate')}}';
                $("form").attr('action',url);
            }
        });
    </script>
    @endsection