<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>商城后台管理</title>

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

    @yield('admin.page.css')

</head>

<body class="fixed-sidebar full-height-layout gray-bg">
    @yield('admin.page.content')
    <script src="{{ loadStatic('admin/js/jquery.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/layer/layer.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/hplus.min.js') }}"></script>
    <script type="text/javascript" src="{{ loadStatic('admin/js/contabs.min.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/pace/pace.min.js') }}"></script>

    @yield('admin.page.js')
</body>


</html>
