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
                                <label for="name" class="col-xs-4 control-label">分类名</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ $data['cat_name'] or ''}}" placeholder="请输入分类名" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">二级分类</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="cat_name" name="child_name" value="{{ $data['cat_name'] or ''}}" placeholder="请输入二级分类名，以逗号隔开" required>
                                </div>
                            </div>
                           {{-- <div class="form-group">
                                <label for="password" class="col-xs-4 control-label">分类图片</label>
                                <div class="col-xs-4">
                                    @if(Route::current()->getActionMethod() == 'add')
                                <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                    <img id="img" src="" alt="" style="width:100px; height: 100px;">
                                </div>
                                        @else
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="{{ loadStaticImg($data['pic']) }}" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @endif
                                <p>
                                    <a href="javascript:;" class="file">
                                        <input type="file" id="image-file" name="pic">
                                    </a>
                                </p>
                                <p id="file-info"></p>
                                </div>
                            </div>
                            <br>
                            <div class="form-group" id="">
                                <label for="name" class="col-xs-4 control-label">
                                    <button type="button" class="btn btn-info" id="add_attr">添加属性</button>
                                </label>
                                <div class="col-xs-4">
                                </div>
                            </div>
                            <div class="form-group " id="attr_group">
                                <label for="name" class="col-xs-3 control-label">属性列表</label>
                                <div class="col-xs-1">
                                    属性名<input type="text" class="form-control" id="attr_name" name="attr[]['attr_name']" value="{{ $data['cat_name'] or ''}}" placeholder="请输入属性值" required>
                                </div>
                                <div class="col-xs-2">
                                    <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                        <img id="img" src="" alt="" style="width:100px; height: 100px;">
                                    </div>
                                    属性图标
                                    <a href="javascript:;" class="file">
                                        <input type="file" id="image-file" name="pic">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <span>属性值</span><input type="text" class="form-control" id="attr_val" name="attr[]['attr_val']" value="{{ $data['cat_name'] or ''}}" placeholder="请输入属性值" required>
                                </div>
                                <div class="col-xs-1">
                                    <button type="button" class="btn btn-sm btn-danger" id="delete_attr">删除属性</button>
                                </div>
                            </div>--}}
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
//            upload.init();
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/cat/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/cat/addOperate')}}';
                $("form").attr('action',url);
            }
            $("#add_attr").click(function () {
                var add_id = Math.random() ;
                var that = $("#attr_group");
                var html = that.clone(true).attr('id','attr_group' + add_id);
                that.after(html);
            });
        });
    </script>
    @endsection