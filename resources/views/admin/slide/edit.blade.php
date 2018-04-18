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
                            <input type="hidden" name="id" value="{{ $data['id'] or '' }}">
                            <div class="form-group">
                                <label for="pic" class="col-xs-4 control-label">封面图片</label>
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
                                            <input type="file" id="image-file" name="pic" value="{{ $data['pic'] or '' }}">
                                        </a>
                                    </p>
                                    <p id="file-info"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">链接地址</label>
                                <div class="col-xs-4">
                                    {{  buildSelect($article_data,'','url','id','title',isset($data) ? $data['url']:'') }}
                                </div>
                                <span style="color: red"> * 如果链接每日秒杀请不要选择*</span>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">类型</label>
                                <?php if(isset($data['type']) && $data['type'] == 1){ $checked2 = 'checked';}else{$checked1 = 'checked';} ?>
                                <div class="col-xs-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="0"  name="type" {{ $checked1 or ''}}>轮播</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="1"  name="type" {{ $checked2 or ''}}>固定</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">是否连接到每日秒杀</label>
                                <?php if(isset($data['link_goods']) && $data['link_goods'] == 1){ $checked2 = 'checked';}else{$checked1 = 'checked';} ?>
                                <div class="col-xs-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="0"  name="link_goods" {{ $checked1 or ''}}>否</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="1"  name="link_goods" {{ $checked2 or ''}}>是</label>
                                    </div>
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
            upload.init();
            var method = "{{ Route::current()->getActionMethod() }}";
            var url ='';
            if(method === 'edit'){
                url = '{{url('admin/slide/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/slide/addOperate')}}';
                $("form").attr('action',url);
            }
        });
    </script>
    @endsection