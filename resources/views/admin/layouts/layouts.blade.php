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

    <!-- Data Tables -->
    <link href="{{ loadStatic('admin/css/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />


    @yield('admin.page.css')

</head>

<body class="fixed-sidebar full-height-layout gray-bg" >
    @yield('admin.page.content')
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



    {{--dataTables--}}
    <script src="{{ loadStatic('admin/js/plugins/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ loadStatic('admin/js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>


    <script>
        $(document).ready(function(){
            $("#data-table").dataTable({
                "language": {
                    "sProcessing": "读取中...",
                    "sLengthMenu": "显示 _MENU_ 项结果",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上页",
                        "sNext": "下页",
                        "sLast": "末页"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            });
        });
    </script>
    @yield('admin.page.js')
</body>


</html>
