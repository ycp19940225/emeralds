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
                                <label for="name" class="col-xs-4 control-label">翡翠名</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="goods_name" name="goods_name" value="{{ $data['goods_name'] or ''}}" placeholder="请输入翡翠名" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">分类</label>
                                <div class="col-xs-3">
                                    <select name="cat_id" id="cat" class="form-control">
                                        <option value=''>请选择分类--</option>
                                        @foreach($cat_data as $cat)
                                            @if($cat['parent_id'] == 0)
                                            <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">选择属性值</label>
                                <div class="col-xs-3 " id="attr_list">

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
                url = '{{url('admin/goods/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/goods/addOperate')}}';
                $("form").attr('action',url);
            }
            $("#cat").change(function () {
                $("#attr_list").empty();
                var that = $(this);
                var cat_id = that.val();
                var data = {
                  'cat_id':cat_id,
                   _token:'{{ csrf_token() }}'
                };
                $.post('{{ url('admin/cat/getChild') }}',data,function (res) {
                    if(res['code'] === 'success'){
                        $.each(res['data'],function (i,v) {
                            var html = '';
                            var option = '';
                            var num=0;
                            var attr = v['attr'];
                            for(num;num<attr.length;num++){
                                option +='<option value="'+attr[num]['id']+'">'+attr[num]['attr_name']+'</option>';
                            }
                            html = ' <select name="goods_attr[]" class="form-control" id="cat_child_'+v['id']+'">'+
                                    '<option value="">请选择'+v['cat_name']+'--</option>'+option+
                                    '</select>';
                            $("#attr_list").append(html);
                        });
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                });
            });
        });
    </script>
    @endsection