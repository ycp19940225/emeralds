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
                        <form action="{{ url('admin/type/addBatchOperate') }}" class="form-horizontal form_need_validate" role="form" method="post" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">选择分类</label>
                                <div class="col-xs-3">
                                    {{  buildSelect($cat_data,'','cat_id','id','cat_name',isset($data) ? $data['cat_id']:'') }}
                                </div>
                            </div>
                            <br>
                            <div class="form-group " id="attr_group">
                                <label for="attr_name" class="col-xs-3 control-label"></label>
                                <label for="attr_val" class="col-xs-1 control-label">类型值</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="attr_val" name="type" value="" placeholder="请输入属性值" required>
                                    <span class="help-block m-b-none">请输入类型值，以逗号或者顿号隔开</span>
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
    <script src="{{ loadStatic('admin/js/extend/upload.js') }}"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
    @endsection