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
                                <label for="name" class="col-xs-4 control-label">分类</label>
                                <div class="col-xs-3">
                                    {{  buildSelect($cat_data,'cat_list','','id','cat_name',isset($cat_id) ? $cat_id:'') }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">类型</label>
                                <div class="col-xs-3" id="type_list">
                                    @if(Route::current()->getActionMethod() == 'edit')
                                        {{ buildSelect($all_type,'','type_id','id','type_name',isset($data) ? $data['type_id']:'') }}
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                                <label for="name" class="col-xs-4 control-label">属性名</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" id="attr_name" name="attr_name" value="{{ $data['attr_name'] or ''}}" placeholder="请输入属性名" required>
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
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/attr/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/attr/addOperate')}}';
                $("form").attr('action',url);
            }
        });
        $("#cat_list").change(function () {
            $("#type_list").empty();
            var that = $(this);
            var cat_id = that.val();
            var data = {
                'cat_id':cat_id,
                _token:'{{ csrf_token() }}'
            };
            $.post('{{ url('admin/cat/getType') }}',data,function (res) {
                if(res['code'] === 'success'){
                    var html = '';
                    var option = '';
                    var num=0;
                    var type = res['data'];
                        for(num;num<type.length;num++){
                            option +='<option value="'+type[num]['id']+'">'+type[num]['type_name']+'</option>';
                        }
                    html = ' <select name="type_id" class="form-control" id="type">'+
                        '<option value="">请选择&nbsp;--</option>'+option+
                        '</select>';
                    $("#type_list").append(html);

                }else{
                    layer.msg(res['msg'],{icon:5});
                }
            });
        });
    </script>
    @endsection