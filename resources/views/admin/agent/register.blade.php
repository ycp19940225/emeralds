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
    <div class="col-sm-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>带验证的表单向导</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="form_wizard.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="form_wizard.html#">选项1</a>
                        </li>
                        <li><a href="form_wizard.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <h2>
                    带验证的表单向导
                </h2>
                <p>
                    下面这个示例展示了如何在表单向导中使用 jQuery Validation 插件
                </p>

                <form id="form" action="http://www.zi-han.net/theme/hplus/form_wizard.html#" class="wizard-big">
                    <h1>账户</h1>
                    <fieldset>
                        <h2>账户信息</h2>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>用户名 *</label>
                                    <input id="userName" name="userName" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>密码 *</label>
                                    <input id="password" name="password" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>确认密码 *</label>
                                    <input id="confirm" name="confirm" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center">
                                    <div style="margin-top: 20px">
                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>个人资料</h1>
                    <fieldset>
                        <h2>个人资料信息</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>姓名 *</label>
                                    <input id="name" name="name" type="text" class="form-control required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input id="email" name="email" type="text" class="form-control required email">
                                </div>
                                <div class="form-group">
                                    <label>地址 *</label>
                                    <input id="address" name="address" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>警告</h1>
                    <fieldset>
                        <div class="text-center" style="margin-top: 120px">
                            <h2>你是火星人 :-)</h2>
                        </div>
                    </fieldset>

                    <h1>完成</h1>
                    <fieldset>
                        <h2>条款</h2>
                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                        <label for="acceptTerms">我同意注册条款</label>
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
            }, onStepChanged: function (event, currentIndex, priorIndex) {
                if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                    $(this).steps("next")
                }
                if (currentIndex === 2 && priorIndex === 3) {
                    $(this).steps("previous")
                }
            }, onFinishing: function (event, currentIndex) {
                var form = $(this);
                form.validate().settings.ignore = ":disabled";
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
