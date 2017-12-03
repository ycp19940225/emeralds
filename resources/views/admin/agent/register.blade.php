<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>莲叶翡翠代理商注册</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ loadStatic('admin/css/bootstrap.min14ed.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ loadStatic('admin/css/style.min.css') }}" rel="stylesheet" />

    <!-- Data Tables -->
    <link href="{{ loadStatic('admin/css/plugins/steps/jquery.steps.css') }}" rel="stylesheet" />



</head>

<body class="fixed-sidebar full-height-layout gray-bg" >

<div class="row">
    <div class="col-sm-12" >
        <div class="ibox" >
            <div class="ibox-title">
                <h5>代理商注册</h5>
            </div>
            <div class="ibox-content" style="height: 800px">
                <h2>
                    请填写基本信息
                </h2>
                <p>
                    以下选项为账户为必填信息，其他请尽量完善
                </p>

                <form id="form" action="{{url('agent/doRegister')}}" class="wizard-big" method="post">
                    <h1>账户</h1>
                    <fieldset class="" >
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="col-sm-6" style="height: 800px">
                                <div class="form-group">
                                    <label>姓名 *</label>
                                    <input id="agent_name" name="agent_name" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>手机号 *</label>
                                    <input id="telphone" name="telphone" type="number" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>摊位号 *</label>
                                    <input id="booth_number" name="booth_number" type="text" class="form-control required">
                                </div>
                                 <div class="form-group">
                                    <label>微信号 *</label>
                                    <input id="wx" name="wx" type="text" class="form-control required">
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>完善个人资料</h1>
                    <fieldset>
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>主营项目</label>
                                    <input id="pm" name="pm" type="text" class="form-control ">
                                </div>
                                <div class="form-group">
                                    <label>银行账号</label>
                                    <input id="bank_code" name="bank_code" type="number" class="form-control">
                                </div>
                             <div class="form-group">
                                    <label>支付宝账号</label>
                                    <input id="alipay_code" name="alipay_code" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>qq号码</label>
                                    <input id="qq_code" name="qq_code" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>营业执照号</label>
                                    <input id="license_number" name="license_number" type="number" class="form-control">
                                </div>
                            </div>

                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>

    <script src="{{ loadStatic('admin/js/jquery.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/layer/layer.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/hplus.min.js') }}"></script>
    <script type="text/javascript" src="{{ loadStatic('admin/js/contabs.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/validate/jquery.validate.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/validate/messages_zh.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/layer/layer.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/staps/jquery.steps.min.js') }}"></script>


<script>
    $(document).ready(function () {
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset", onStepChanging: function (event, currentIndex, newIndex) {
                if (currentIndex > newIndex) {
                    return true
                }
                if (newIndex === 3 && Number($("#age").val()) < 18) {
                    return false
                }
                var form = $(this);
                if (currentIndex < newIndex) {
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error")
                }
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid()
            }, onFinished: function (event, currentIndex) {
                var form = $(this);
                form.submit()
            }
        }).validate({
            errorPlacement: function (error, element) {
                element.before(error)
            }, rules: {confirm: {equalTo: "#password"}}
        })
    });

</script>


    <script>
    </script>
</body>


</html>
