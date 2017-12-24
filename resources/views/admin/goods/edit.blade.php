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
                          <div class="form-group">
                                <label for="password" class="col-xs-4 control-label">封面图片</label>
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
                                        <input type="file" id="image-file" name="logo">
                                    </a>
                                </p>
                                <p id="file-info"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">价格</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $data['price'] or ''}}" placeholder="请输入价格" required>
                                </div>
                                <span class="help-block m-b-none"></span>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">库存</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" id="stock" name="stock" value="{{ $data['stock'] or 1}}" placeholder="请输入库存" required>
                                </div>
                                <span class="help-block m-b-none"></span>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">翡翠详细描述</label>
                                <div class="col-xs-4">
                                    <div id="goods_detail">

                                    </div>

                                    <button  class="btn btn-primary" onclick="goods_detail_save()" type="button">保存</button>
                                </div>
                                <span class="help-block m-b-none" style="color: red">请编辑翡翠介绍，完成后记得点击保存按钮</span>

                            </div>


                            <br>
                            <div class="form-group " >
                                <label for="name" class="col-xs-4 control-label">相册列表</label>
                            </div>
                            <div class="form-group " id="pic_group">
                                <div style="width: 100%;position: relative;">
                                    <div id="upBox">
                                        <div id="inputBox">
                                            <input type="file" title="请选择图片" id="file"  multiple=""  accept="image/png,image/jpg,image/gif,image/JPEG">点击选择图片</div>
                                        <div id="imgBox"></div>
                                        <button type="button" id="btn">上传</button>
                                        <span class="help-block m-b-none" style="color: red">请上传相册，完成后记得点击上传按钮</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-xs-4 control-label">视频</label>
                                <div class="col-xs-4">
                                    <div class="form-group " id="aetherupload-wrapper" ><!--组件最外部需要有一个名为aetherupload-wrapper的id，用以包装组件-->
                                        <div class="controls" >
                                            <input type="file" id="file"  onchange="aetherupload(this,'file').success(getVideoUrl).upload()"/><!--需要有一个名为file的id，用以标识上传的文件，video(file,group)中第二个参数为分组名，success方法可用于声名上传成功后的回调方法名-->
                                            <div class="progress " style="height: 6px;margin-bottom: 2px;margin-top: 10px;width: 200px;">
                                                <div id="progressbar" style="background:blue;height:6px;width:0;"></div><!--需要有一个名为progressbar的id，用以标识进度条-->
                                            </div>
                                            <span style="font-size:12px;color:#aaa;" id="output">等待上传</span><!--需要有一个名为output的id，用以标识提示信息-->
                                            <input type="hidden" name="video" id="savedpath" ><!--需要有一个名为savedpath的id，用以标识文件保存路径的表单字段，还需要一个任意名称的name-->
                                        </div>
                                    </div>
                                    <div id="result"></div>
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
    <div class="actbbul">
        【库　　存】仅此一件<br>【尺　　寸】高35.5mm，宽23.5mm，厚5.6mm<div>【颜　　色】略飘花<br>【透 明 度】二分之一透明<br>【必要说明】可见细小石纹，但瑕不掩瑜<br>【原石产地】缅甸北部密支那宝石级翡翠矿区<br>【鉴定证书】本品为天然缅甸A货翡翠，成交时出具权威检测证书，欢迎到任何权威珠宝检测机构复检<br>【随单配件】珠宝盒、权威机构A货检测证书、挂件另赠精美挂绳<br>【售后承诺】签收之时起7日内，不需任何理由均可自由退换，保证提供完美服务，并承担一切法律责任。<br>【配送时间】付款之时起72小时内发货，使用顺丰快递或EMS特快专递，三到五天即可到达，特殊情况适当顺延。<br>【编　　辑】黄氏辽<br>【摄 影 师】普永江<br>【摄影时间】17-12-23
        </div>
    </div>
@endsection
@section('admin.page.js')
    <script src="{{ loadStatic('admin/js/extend/upload.js') }}"></script>
    <script src="{{ loadStatic('admin/js/extend/uploadImg.js') }}"></script>
    {{--大文件上传组件--}}
    <script src="{{ URL::asset('js/spark-md5.min.js') }}"></script><!--需要引入spark-md5.min.js-->
    <script src="{{ URL::asset('js/aetherupload.js') }}"></script><!--需要引入aetherupload.js-->
    {{--文本编辑器--}}
    <script src="{{ loadStatic('admin/js/content.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/summernote/summernote-zh-CN.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });
            upload.init();
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
                $.post('{{ url('admin/cat/getType') }}',data,function (res) {
                    console.log(res['data']);
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
                                    '<option value="">请选择'+v['type_name']+'--</option>'+option+
                                    '</select>';
                            $("#attr_list").append(html);
                        });
                    }else{
                        layer.msg(res['msg'],{icon:5});
                    }
                });
            });
            /**
             * 相册
             */
            imgUpload({
                inputId:'file', //input框id
                imgBox:'imgBox', //图片容器id
                buttonId:'btn', //提交按钮id
                upUrl:'{{ url('admin/goods/uploadImg') }}',  //提交地址
                data:'goods_pic[]', //参数名
                maxCount:9,//最大上传数量
                fileFormat:[]//文件格式
            });

            /**
             * 文本编辑
             */
            $("#goods_detail").summernote({
                lang:"zh-CN",
                height:250,
                minHeight: 250,
                maxHeight: 250,
                focus:true,
                placeholder: '请填写翡翠详细信息...',
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        /**
         *翡翠详情保存
         */
        function goods_detail_save() {
            var markup = $('#goods_detail').code();
            var html = '<textarea style="display: none" name="goods_detail" value="'+markup+'" />';
            $("form").append(html);
            layer.msg('保存成功！',{icon: 6});
        }
        var getVideoUrl = function(){
            // Example
            $('#result').append(
                '<p>原文件名：<span >'+this.fileName+'</span> | 原文件大小：<span >'+parseFloat(this.fileSize / (1000 * 1000)).toFixed(2) + 'MB'+'</span> | 储存文件名：<span >'+this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1)+'</span></p>'
            );
            var html = '';
            var url = this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1);
            html = '<input type="hidden" name="video" value="'+url+'" />';
            $("form").append(html);
        }
    </script>
    @endsection