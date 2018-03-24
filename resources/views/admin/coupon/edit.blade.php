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
                                <label for="name" class="col-xs-4 control-label">优惠券名称</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] or ''}}" placeholder="请输入名称" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">优惠时间</label>
                                <div class="col-xs-4">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start_time" value="{{ $data['start_time'] or ''}}">
                                    <span class="input-group-addon">到</span>
                                    <input type="text" class="input-sm form-control" name="end_time" value="{{ $data['end_time'] or ''}}">
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">优惠价格</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $data['price'] or ''}}" placeholder="请输入价格" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">优惠条件</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="limit" name="limit" value="{{ $data['limit'] or ''}}" placeholder="请输入条件" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-xs-4 control-label">封面图片</label>
                                <div class="col-xs-4">
                                    @if(Route::current()->getActionMethod() == 'add')
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @else
                                        <div id="image-preview" style="border: 1px solid #ccc; width:100px; height: 100px; background: rgb(222, 222, 222)">
                                            <img id="img" src="{{ loadStaticImg($data['logo']) }}" alt="" style="width:100px; height: 100px;">
                                        </div>
                                    @endif
                                    <p>
                                        <a href="javascript:;" class="file">
                                            <input type="file" id="image-file" name="logo" value="{{ $data['logo'] or '' }}">
                                        </a>
                                    </p>
                                    <p id="file-info"></p>
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
                url = '{{url('admin/coupon/editOperate')}}';
                $("form").attr('action',url)
            }else{
                url = '{{url('admin/coupon/addOperate')}}';
                $("form").attr('action',url);
            }
            $("#datepicker").datepicker({
            });
        });
    </script>
    @endsection