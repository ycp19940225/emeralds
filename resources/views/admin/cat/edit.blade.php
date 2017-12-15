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
                        <form action="" class="form-horizontal form_need_validate" role="form" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">品类名</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ $data['cat_name'] or ''}}" placeholder="请输入分类名" required>
                                </div>
                            </div>

                            <div class="form-group" id="">
                                <label for="name" class="col-xs-4 control-label">
                                    <button type="button" class="btn btn-info" id="add_type">添加二级分类</button>
                                </label>
                                <div class="col-xs-4">
                                </div>
                            </div>
                            @if(Route::current()->getActionMethod() == 'add')
                            <div class="form-group " id="type_group">
                                <label for="name" class="col-xs-3 control-label">二级分类</label>
                                <div class="col-xs-4">
                                    {{  buildSelect($type_data,'','type_id[]','id','type_name',isset($data) ? $data['cat_id']:'') }}
                                </div>
                                <div class="col-xs-1">
                                    <button type="button" class="btn btn-sm btn-danger delete_type" id="">删除分类</button>
                                </div>
                            </div>
                                @else
                                @foreach($data->type as $type)
                                    @if($loop->index !=0)
                                        <div class="form-group " id="type_group_{{ $type->id }}">
                                            @else
                                                <div class="form-group " id="type_group">
                                                @endif
                                    <label for="name" class="col-xs-3 control-label">二级分类</label>
                                    <div class="col-xs-4">
                                        {{  buildSelect($type_data,'','type_id[]','id','type_name',isset($type['id']) ? $type['id']:'') }}
                                    </div>
                                    <div class="col-xs-1">
                                        <button type="button" class="btn btn-sm btn-danger delete_type" id="">删除分类</button>
                                    </div>
                                    </div>
                                    @endforeach
                            @endif
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
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/cat/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/cat/addOperate')}}';
                $("form").attr('action',url);
            }
            $("#add_type").click(function () {
                var add_id = Math.random() ;
                var that = $("[id^='type_group']").last();
                var html = that.clone(true).attr('id','type_group' + add_id);
                that.after(html);
            });
            $(".delete_type").click(function () {
                var type_group = $(this).parent().parent("[id^='type_group']");
                    if (type_group.attr('id') == 'type_group') {
                        layer.msg('请至少保留第一个分类!');
                        return false;
                    }
                type_group.remove();
            });
        });
    </script>
    @endsection