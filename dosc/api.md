<!DOCTYPE html><html><head><meta charset="utf-8"><title>API_DOSC</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #f2f2f2;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#428bca;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#f0f6fb;border-left:4px solid #428bca}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#428bca}.warning{color:black;background-color:#fbf1f0;border-left:4px solid #c9302c}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#c9302c}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #d9d9d9;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#f2f2f2;border-radius:10px;margin:-2px 0}.badge.get{color:#70bbe1;background-color:#d9edf7}.badge.head{color:#70bbe1;background-color:#d9edf7}.badge.options{color:#70bbe1;background-color:#d9edf7}.badge.put{color:#f0db70;background-color:#fcf8e3}.badge.patch{color:#f0db70;background-color:#fcf8e3}.badge.post{color:#93cd7c;background-color:#dff0d8}.badge.delete{color:#ce8383;background-color:#f2dede}.collapse-button{float:right}.collapse-button .close{display:none;color:#428bca;cursor:pointer}.collapse-button .open{color:#428bca;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#428bca}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e8ab8}.definition .method.head{color:#2e8ab8}.definition .method.options{color:#2e8ab8}.definition .method.post{color:#56b82e}.definition .method.put{color:#b8a22e}.definition .method.patch{color:#b8a22e}.definition .method.delete{color:#b82e2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#f2f2f2;text-decoration:none !important;border-top:1px solid #d9d9d9;border-left:1px solid #d9d9d9;border-right:1px solid #d9d9d9;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #d9d9d9;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#f2f2f2;border-bottom:1px solid #d9d9d9;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #d9d9d9}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#fff;background-color:#337ab7}.action h4.action-heading .method.head{color:#fff;background-color:#337ab7}.action h4.action-heading .method.options{color:#fff;background-color:#337ab7}.action h4.action-heading .method.put{color:#fff;background-color:#ed9c28}.action h4.action-heading .method.patch{color:#fff;background-color:#ed9c28}.action h4.action-heading .method.post{color:#fff;background-color:#5cb85c}.action h4.action-heading .method.delete{color:#fff;background-color:#d9534f}.action h4.action-heading code{color:#444;background-color:#f5f5f5;border-color:#cfcfcf;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#bce8f1}.action.get h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.head{border-color:#bce8f1}.action.head h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.options{border-color:#bce8f1}.action.options h4.action-heading{color:#337ab7;background:#d9edf7;border-bottom-color:#bce8f1}.action.post{border-color:#d6e9c6}.action.post h4.action-heading{color:#5cb85c;background:#dff0d8;border-bottom-color:#d6e9c6}.action.put{border-color:#faebcc}.action.put h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.patch{border-color:#faebcc}.action.patch h4.action-heading{color:#ed9c28;background:#fcf8e3;border-bottom-color:#faebcc}.action.delete{border-color:#ebccd1}.action.delete h4.action-heading{color:#d9534f;background:#f2dede;border-bottom-color:#ebccd1}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#管理员">管理员</a></div><div class="collapse-content"><ul><li><a href="#管理员-管理员登录-post"><span class="badge post"><i class="fa fa-plus"></i></span>管理员登录</a></li><li><a href="#管理员-管理员首页-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>管理员首页</a></li><li><a href="#管理员-刷新密钥-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>刷新密钥</a></li><li><a href="#管理员-修改管理员头像-post"><span class="badge post"><i class="fa fa-plus"></i></span>修改管理员头像</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#用户代理商">用户代理商</a></div><div class="collapse-content"><ul><li><a href="#用户代理商-用户注册-post"><span class="badge post"><i class="fa fa-plus"></i></span>用户注册</a></li><li><a href="#用户代理商-用户登录-post"><span class="badge post"><i class="fa fa-plus"></i></span>用户登录</a></li><li><a href="#用户代理商-用户首页-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>用户首页</a></li><li><a href="#用户代理商-刷新密钥-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>刷新密钥</a></li><li><a href="#用户代理商-完善用户信息-post"><span class="badge post"><i class="fa fa-plus"></i></span>完善用户信息</a></li><li><a href="#用户代理商-修改用户头像-post"><span class="badge post"><i class="fa fa-plus"></i></span>修改用户头像</a></li><li><a href="#用户代理商-上传供应商营业执照或者身份证-post"><span class="badge post"><i class="fa fa-plus"></i></span>上传供应商营业执照或者身份证</a></li><li><a href="#用户代理商-申请成为供应商-post"><span class="badge post"><i class="fa fa-plus"></i></span>申请成为供应商</a></li><li><a href="#用户代理商-获取代理商信息-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取代理商信息</a></li><li><a href="#用户代理商-获取代理商的商品-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取代理商的商品</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#商品">商品</a></div><div class="collapse-content"><ul><li><a href="#商品-获取所有商品-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有商品</a></li><li><a href="#商品-获取单个商品-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取单个商品</a></li><li><a href="#商品-上传商品封面-post"><span class="badge post"><i class="fa fa-plus"></i></span>上传商品封面</a></li><li><a href="#商品-上传商品相册-post"><span class="badge post"><i class="fa fa-plus"></i></span>上传商品相册</a></li><li><a href="#商品-上传商品视频-post"><span class="badge post"><i class="fa fa-plus"></i></span>上传商品视频</a></li><li><a href="#商品-上传商品-post"><span class="badge post"><i class="fa fa-plus"></i></span>上传商品</a></li><li><a href="#商品-首页商品搜索-post"><span class="badge post"><i class="fa fa-plus"></i></span>首页商品搜索</a></li><li><a href="#商品-编辑商品-post"><span class="badge post"><i class="fa fa-plus"></i></span>编辑商品</a></li><li><a href="#商品-商品上下架-post"><span class="badge post"><i class="fa fa-plus"></i></span>商品上下架</a></li><li><a href="#商品-商品删除-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>商品删除</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#搜索">搜索</a></div><div class="collapse-content"><ul><li><a href="#搜索-通过一级分类获取商品-post"><span class="badge post"><i class="fa fa-plus"></i></span>通过一级分类获取商品</a></li><li><a href="#搜索-通过分类获取商品-post"><span class="badge post"><i class="fa fa-plus"></i></span>通过分类获取商品</a></li><li><a href="#搜索-通过一级分类id获取推荐商品-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>通过一级分类ID获取推荐商品</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#分类">分类</a></div><div class="collapse-content"><ul><li><a href="#分类-获取所有品种-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有品种</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#文章">文章</a></div><div class="collapse-content"><ul><li><a href="#文章-获取所有文章-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有文章</a></li><li><a href="#文章-获取所有文章分类-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有文章分类</a></li><li><a href="#文章-获取分类文章（通过分类id）-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取分类文章（通过分类ID）</a></li><li><a href="#文章-获取文章详情（通过文章id）-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取文章详情（通过文章ID）</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#轮播图">轮播图</a></div><div class="collapse-content"><ul><li><a href="#轮播图-获取所有轮播图-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有轮播图</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#欢迎页">欢迎页</a></div><div class="collapse-content"><ul><li><a href="#欢迎页-获取所有欢迎页-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有欢迎页</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#名家">名家</a></div><div class="collapse-content"><ul><li><a href="#名家-获取所有名家-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取所有名家</a></li><li><a href="#名家-获取名家详情（通过名家id）-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取名家详情（通过名家ID）</a></li><li><a href="#名家-发布到名家（通过名家id）-post"><span class="badge post"><i class="fa fa-plus"></i></span>发布到名家（通过名家ID）</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#足迹">足迹</a></div><div class="collapse-content"><ul><li><a href="#足迹-获取用户足迹-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取用户足迹</a></li><li><a href="#足迹-记录浏览历史-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>记录浏览历史</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#收藏">收藏</a></div><div class="collapse-content"><ul><li><a href="#收藏-获取用户收藏-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>获取用户收藏</a></li><li><a href="#收藏-添加收藏-post"><span class="badge post"><i class="fa fa-plus"></i></span>添加收藏</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#订单">订单</a></div><div class="collapse-content"><ul><li><a href="#订单-管理员添加订单-post"><span class="badge post"><i class="fa fa-plus"></i></span>管理员添加订单</a></li><li><a href="#订单-管理员修改订单-post"><span class="badge post"><i class="fa fa-plus"></i></span>管理员修改订单</a></li><li><a href="#订单-管理员删除订单-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>管理员删除订单</a></li><li><a href="#订单-订单获取-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>订单获取</a></li><li><a href="#订单-管理员修改订单状态-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>管理员修改订单状态</a></li><li><a href="#订单-单个订单获取-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>单个订单获取</a></li></ul></div></div></nav><div class="content"><header><h1 id="top">API_DOSC</h1></header><section id="管理员" class="resource-group"><h2 class="group-heading">管理员 <a href="#管理员" class="permalink">&para;</a></h2><p>管理员</p>
<div id="管理员-管理员登录" class="resource"><h3 class="resource-heading">管理员登录 <a href="#管理员-管理员登录" class="permalink">&nbsp;&para;</a></h3><div id="管理员-管理员登录-post" class="action post"><h4 class="action-heading"><div class="name">管理员登录</div><a href="#管理员-管理员登录-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin/login</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/login</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>adminname</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>登录名</p>
</dd><dt>password</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密码</p>
</dd><dt>data</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>密钥</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983663382"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"1994okyang"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"登录成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxMzc3MDc0MiwiZXhwIjoxNTEzNzc0MzQyLCJuYmYiOjE1MTM3NzA3NDIsImp0aSI6InVYS1YyYkRXN1BiUHVuRWUiLCJzdWIiOjE1LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.sWuDl5AGS0NDzJpaJ2UkeJT0QJwBg2Xs8KYTZRSnNe8"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"登录失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="管理员-管理员首页" class="resource"><h3 class="resource-heading">管理员首页 <a href="#管理员-管理员首页" class="permalink">&nbsp;&para;</a></h3><div id="管理员-管理员首页-get" class="action get"><h4 class="action-heading"><div class="name">管理员首页</div><a href="#管理员-管理员首页-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin/index?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/index?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取管理员信息成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">adminname</span>": <span class="hljs-value"><span class="hljs-string">"ycp"</span></span>,
    "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514057062"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514057062"</span></span>,
    "<span class="hljs-attribute">input_id</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">deleted_at</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">role_id</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Token Signature could not be verified."</span></span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="管理员-刷新密钥" class="resource"><h3 class="resource-heading">刷新密钥 <a href="#管理员-刷新密钥" class="permalink">&nbsp;&para;</a></h3><div id="管理员-刷新密钥-get" class="action get"><h4 class="action-heading"><div class="name">刷新密钥</div><a href="#管理员-刷新密钥-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin/refreshToken?token=</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/refreshToken?token=</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"刷新成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTM4MzgwNDksImV4cCI6MTUxMzg0MjMxOSwibmJmIjoxNTEzODM4NzE5LCJqdGkiOiJSR0s3UDM5QU5vVEg1a2xHIiwic3ViIjoyMCwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.m6HkK9MbKi7g7oAvSHWAdY0TdYlpflIrdx-vihw59OQ"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="管理员-修改管理员头像" class="resource"><h3 class="resource-heading">修改管理员头像 <a href="#管理员-修改管理员头像" class="permalink">&nbsp;&para;</a></h3><div id="管理员-修改管理员头像-post" class="action post"><h4 class="action-heading"><div class="name">修改管理员头像</div><a href="#管理员-修改管理员头像-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin/logo?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/logo?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>logo</dt><dd><code>file</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>头像</p>
</dd><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>秘钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"头像修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"头像修改成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"admin/2017-12-24/agOAeSGPNL96bj1dCmX14ayu6p9OggCCCKExIUAP.jpeg"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="用户代理商" class="resource-group"><h2 class="group-heading">用户代理商 <a href="#用户代理商" class="permalink">&para;</a></h2><p>用户资源</p>
<div id="用户代理商-用户注册" class="resource"><h3 class="resource-heading">用户注册 <a href="#用户代理商-用户注册" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-用户注册-post" class="action post"><h4 class="action-heading"><div class="name">用户注册</div><a href="#用户代理商-用户注册-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/register</code></h4><p>手机号唯一，不能重复注册</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/register</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>telphone</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>手机号</p>
</dd><dt>password</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密码</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983663382"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"1994okyang"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"注册成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983663382"</span></span>,
    "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"447910ff7241c373129b8761cc312c78"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1513758784"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1513758784"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">7</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"手机号已被注册！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-用户登录" class="resource"><h3 class="resource-heading">用户登录 <a href="#用户代理商-用户登录" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-用户登录-post" class="action post"><h4 class="action-heading"><div class="name">用户登录</div><a href="#用户代理商-用户登录-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/login</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/login</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>telphone</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>手机号</p>
</dd><dt>password</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密码</p>
</dd><dt>data</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>token:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录,单位为秒</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983663382"</span></span>,
  "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"1994okyang"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"登录成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">ttl</span>": <span class="hljs-value"><span class="hljs-number">2592000</span></span>,
    "<span class="hljs-attribute">refresh_ttl</span>": <span class="hljs-value"><span class="hljs-number">1209600</span></span>,
    "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9sb2dpbiIsImlhdCI6MTUxNDQ1NTkzMSwiZXhwIjoxNTE3MDQ3OTMxLCJuYmYiOjE1MTQ0NTU5MzEsImp0aSI6IjhENjlMaE5uSU94Um53S04iLCJzdWIiOjE5LCJwcnYiOiI3MjM0OWFmZmRhMDQ0ZGMyYWQ3MGEzOWVmMTUxNjNlYTY3YTczMzEzIn0.r86fhFkmcZKayKrSomV0PrST4KLn7ok8Lg-3ljr9HtE"</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"登录失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-用户首页" class="resource"><h3 class="resource-heading">用户首页 <a href="#用户代理商-用户首页" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-用户首页-get" class="action get"><h4 class="action-heading"><div class="name">用户首页</div><a href="#用户代理商-用户首页-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/users/index?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/index?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取用户信息成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">20</span></span>,
    "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983663381"</span></span>,
    "<span class="hljs-attribute">nickname</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
    "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
    "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1513835481"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1513835481"</span></span>,
    "<span class="hljs-attribute">deleted_at</span>": <span class="hljs-value"><span class="hljs-number">0</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>401</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Token Signature could not be verified."</span></span>,
    "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-刷新密钥" class="resource"><h3 class="resource-heading">刷新密钥 <a href="#用户代理商-刷新密钥" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-刷新密钥-get" class="action get"><h4 class="action-heading"><div class="name">刷新密钥</div><a href="#用户代理商-刷新密钥-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/users/refreshToken?token=</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/refreshToken?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>data</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>tokne:密钥,ttl：秘钥过期时间，refresh_ttl：本次token可用于获取新的token的时间，过期需重新登录，单位为秒</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"刷新成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">ttl</span>": <span class="hljs-value"><span class="hljs-number">43200</span></span>,
    "<span class="hljs-attribute">refresh_ttl</span>": <span class="hljs-value"><span class="hljs-number">20160</span></span>,
    "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vd3d3LmVtZXJhbGQuY29tL2FwaS91c2Vycy9yZWZyZXNoVG9rZW4iLCJpYXQiOjE1MTQ0NTYzMzgsImV4cCI6MTUxNzA0ODUwNSwibmJmIjoxNTE0NDU2NTA1LCJqdGkiOiJ6eEtpdE5PYWhFQ2Y1aDQzIiwic3ViIjoxOSwicHJ2IjoiNzIzNDlhZmZkYTA0NGRjMmFkNzBhMzllZjE1MTYzZWE2N2E3MzMxMyJ9.s4Pei4VFF5tjnTyZh5SIjgAKJJMwv-HBc99LuPsVUBg"</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-完善用户信息" class="resource"><h3 class="resource-heading">完善用户信息 <a href="#用户代理商-完善用户信息" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-完善用户信息-post" class="action post"><h4 class="action-heading"><div class="name">完善用户信息</div><a href="#用户代理商-完善用户信息-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/edit?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/edit?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>nickname</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>别名</p>
</dd><dt>email</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>邮箱</p>
</dd><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>秘钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"编辑失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">nickname</span>": <span class="hljs-value"><span class="hljs-string">"杨春坪"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"820363773@qq.com"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"编辑成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-修改用户头像" class="resource"><h3 class="resource-heading">修改用户头像 <a href="#用户代理商-修改用户头像" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-修改用户头像-post" class="action post"><h4 class="action-heading"><div class="name">修改用户头像</div><a href="#用户代理商-修改用户头像-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/logo?token={token}</code></h4><p>手机号唯一，不能重复注册</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/logo?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>logo</dt><dd><code>file</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>头像</p>
</dd><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>秘钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"头像修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"头像修改成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-上传供应商营业执照或者身份证" class="resource"><h3 class="resource-heading">上传供应商营业执照或者身份证 <a href="#用户代理商-上传供应商营业执照或者身份证" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-上传供应商营业执照或者身份证-post" class="action post"><h4 class="action-heading"><div class="name">上传供应商营业执照或者身份证</div><a href="#用户代理商-上传供应商营业执照或者身份证-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/agent/upload?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/agent/upload?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>logo</dt><dd><code>file</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>头像</p>
</dd><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>秘钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"上传失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">pic</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"上传成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-申请成为供应商" class="resource"><h3 class="resource-heading">申请成为供应商 <a href="#用户代理商-申请成为供应商" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-申请成为供应商-post" class="action post"><h4 class="action-heading"><div class="name">申请成为供应商</div><a href="#用户代理商-申请成为供应商-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/agent/add?token=</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/agent/add?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>agent_name</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>姓名</p>
</dd><dt>booth_name</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>商铺名称</p>
</dd><dt>telphone</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>电话</p>
</dd><dt>wx</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>微信</p>
</dd><dt>agent_addr</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>商户地址</p>
</dd><dt>pm</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>主营项目</p>
</dd><dt>bank_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>银行持卡人</p>
</dd><dt>bank_type</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>开户行</p>
</dd><dt>bank_code</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>账号</p>
</dd><dt>bank_name_bck</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>银行持卡人2</p>
</dd><dt>bank_type_bck</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>开户行2</p>
</dd><dt>bank_code_bck</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>账号2</p>
</dd><dt>alipay_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>支付宝姓名</p>
</dd><dt>alipay_code</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>支付宝账户</p>
</dd><dt>alipay_name_back</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>支付宝账户2</p>
</dd><dt>alipay_code_back</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>支付宝姓名2</p>
</dd><dt>license</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>营业执照</p>
</dd><dt>card_front</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>身份证正面</p>
</dd><dt>card_back</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>身份证反面</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"申请失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">agent_name</span>": <span class="hljs-value"><span class="hljs-string">"翡翠代理商测2试2"</span></span>,
  "<span class="hljs-attribute">booth_name</span>": <span class="hljs-value"><span class="hljs-string">"云南翡翠店"</span></span>,
  "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983778843"</span></span>,
  "<span class="hljs-attribute">wx</span>": <span class="hljs-value"><span class="hljs-string">"ycp18989999"</span></span>,
  "<span class="hljs-attribute">agent_addr</span>": <span class="hljs-value"><span class="hljs-string">"云南沙柱县"</span></span>,
  "<span class="hljs-attribute">pm</span>": <span class="hljs-value"><span class="hljs-string">"翡翠，珠宝"</span></span>,
  "<span class="hljs-attribute">bank_name</span>": <span class="hljs-value"><span class="hljs-string">"持卡人1"</span></span>,
  "<span class="hljs-attribute">bank_type</span>": <span class="hljs-value"><span class="hljs-string">"农行"</span></span>,
  "<span class="hljs-attribute">bank_code</span>": <span class="hljs-value"><span class="hljs-string">"9898797987979777979"</span></span>,
  "<span class="hljs-attribute">bank_name_back</span>": <span class="hljs-value"><span class="hljs-string">"持卡人2"</span></span>,
  "<span class="hljs-attribute">bank_type_back</span>": <span class="hljs-value"><span class="hljs-string">"农行2"</span></span>,
  "<span class="hljs-attribute">bank_code_back</span>": <span class="hljs-value"><span class="hljs-string">"9898797987979777979"</span></span>,
  "<span class="hljs-attribute">alipay_name</span>": <span class="hljs-value"><span class="hljs-string">"执行宝"</span></span>,
  "<span class="hljs-attribute">alipay_code</span>": <span class="hljs-value"><span class="hljs-string">"9898797987ws979777979"</span></span>,
  "<span class="hljs-attribute">alipay_name_back</span>": <span class="hljs-value"><span class="hljs-string">"执行宝"</span></span>,
  "<span class="hljs-attribute">alipay_code_back</span>": <span class="hljs-value"><span class="hljs-string">"9898797987ws979777979"</span></span>,
  "<span class="hljs-attribute">license</span>": <span class="hljs-value"><span class="hljs-string">"agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"</span></span>,
  "<span class="hljs-attribute">card_front</span>": <span class="hljs-value"><span class="hljs-string">",agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"</span></span>,
  "<span class="hljs-attribute">card_back</span>": <span class="hljs-value"><span class="hljs-string">",agent/2017-12-22/HyrVX1u1kqO5Lopx9gduGtB2913eAKY7D776tmqm.jpeg"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"保存成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">agent_name</span>": <span class="hljs-value"><span class="hljs-string">"翡翠代理商测试"</span></span>,
    "<span class="hljs-attribute">telphone</span>": <span class="hljs-value"><span class="hljs-string">"18983667722"</span></span>,
    "<span class="hljs-attribute">booth_number</span>": <span class="hljs-value"><span class="hljs-string">"taiwei123456"</span></span>,
    "<span class="hljs-attribute">wx</span>": <span class="hljs-value"><span class="hljs-string">"ycp18989999"</span></span>,
    "<span class="hljs-attribute">pm</span>": <span class="hljs-value"><span class="hljs-string">"翡翠，珠宝"</span></span>,
    "<span class="hljs-attribute">bank_code</span>": <span class="hljs-value"><span class="hljs-string">"34353435435345"</span></span>,
    "<span class="hljs-attribute">alipay_code</span>": <span class="hljs-value"><span class="hljs-string">"ycpalipay2442"</span></span>,
    "<span class="hljs-attribute">user_id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
    "<span class="hljs-attribute">agent_code</span>": <span class="hljs-value"><span class="hljs-string">"LYFC15139227896"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1513922789"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1513922789"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">5</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-获取代理商信息" class="resource"><h3 class="resource-heading">获取代理商信息 <a href="#用户代理商-获取代理商信息" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-获取代理商信息-get" class="action get"><h4 class="action-heading"><div class="name">获取代理商信息</div><a href="#用户代理商-获取代理商信息-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/agent/info?token=</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/agent/info?token=</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"信息获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"未申请成为代理商！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="用户代理商-获取代理商的商品" class="resource"><h3 class="resource-heading">获取代理商的商品 <a href="#用户代理商-获取代理商的商品" class="permalink">&nbsp;&para;</a></h3><div id="用户代理商-获取代理商的商品-get" class="action get"><h4 class="action-heading"><div class="name">获取代理商的商品</div><a href="#用户代理商-获取代理商的商品-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/agent/goods</code></h4><p>[分页：<a href="http://temp.cqquality.com/api/agent/goods?page=%7Bnumber%7D">http://temp.cqquality.com/api/agent/goods?page={number}</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/agent/goods</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">first_page_url</span>": <span class="hljs-value"><span class="hljs-string">"http://www.emerald.com/api/goods?page=1"</span></span>,
  "<span class="hljs-attribute">from</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">next_page_url</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
  "<span class="hljs-attribute">path</span>": <span class="hljs-value"><span class="hljs-string">"http://www.emerald.com/api/goods"</span></span>,
  "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
  "<span class="hljs-attribute">prev_page_url</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
  "<span class="hljs-attribute">to</span>": <span class="hljs-value"><span class="hljs-number">2</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="商品" class="resource-group"><h2 class="group-heading">商品 <a href="#商品" class="permalink">&para;</a></h2><p>商品资源</p>
<div id="商品-获取所有商品" class="resource"><h3 class="resource-heading">获取所有商品 <a href="#商品-获取所有商品" class="permalink">&nbsp;&para;</a></h3><div id="商品-获取所有商品-get" class="action get"><h4 class="action-heading"><div class="name">获取所有商品</div><a href="#商品-获取所有商品-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/goods</code></h4><p>[分页：<a href="http://temp.cqquality.com/api/goods?page=%7Bnumber%7D">http://temp.cqquality.com/api/goods?page={number}</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]</span>,
  "<span class="hljs-attribute">first_page_url</span>": <span class="hljs-value"><span class="hljs-string">"http://www.emerald.com/api/goods?page=1"</span></span>,
  "<span class="hljs-attribute">from</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
  "<span class="hljs-attribute">next_page_url</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
  "<span class="hljs-attribute">path</span>": <span class="hljs-value"><span class="hljs-string">"http://www.emerald.com/api/goods"</span></span>,
  "<span class="hljs-attribute">per_page</span>": <span class="hljs-value"><span class="hljs-number">10</span></span>,
  "<span class="hljs-attribute">prev_page_url</span>": <span class="hljs-value"><span class="hljs-literal">null</span></span>,
  "<span class="hljs-attribute">to</span>": <span class="hljs-value"><span class="hljs-number">2</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-获取单个商品" class="resource"><h3 class="resource-heading">获取单个商品 <a href="#商品-获取单个商品" class="permalink">&nbsp;&para;</a></h3><div id="商品-获取单个商品-get" class="action get"><h4 class="action-heading"><div class="name">获取单个商品</div><a href="#商品-获取单个商品-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/goods/id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods/id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品详情成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">[]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取商品详情失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-上传商品封面" class="resource"><h3 class="resource-heading">上传商品封面 <a href="#商品-上传商品封面" class="permalink">&nbsp;&para;</a></h3><div id="商品-上传商品封面-post" class="action post"><h4 class="action-heading"><div class="name">上传商品封面</div><a href="#商品-上传商品封面-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/logo?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/logo,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/logo,为管理员上传路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/logo,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/logo,为代理商上传路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/logo?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>logo</dt><dd><code>file</code>&nbsp;<span>(optional)</span>&nbsp;<p>图片</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"上传成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"goods_logo/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"参数错误或者上传失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-上传商品相册" class="resource"><h3 class="resource-heading">上传商品相册 <a href="#商品-上传商品相册" class="permalink">&nbsp;&para;</a></h3><div id="商品-上传商品相册-post" class="action post"><h4 class="action-heading"><div class="name">上传商品相册</div><a href="#商品-上传商品相册-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/logo?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/pic,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/pic,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/logo?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>pic</dt><dd><code>file</code>&nbsp;<span>(optional)</span>&nbsp;<p>图片</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">pic</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"上传成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpeg"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"参数错误或者上传失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-上传商品视频" class="resource"><h3 class="resource-heading">上传商品视频 <a href="#商品-上传商品视频" class="permalink">&nbsp;&para;</a></h3><div id="商品-上传商品视频-post" class="action post"><h4 class="action-heading"><div class="name">上传商品视频</div><a href="#商品-上传商品视频-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/video?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/pic,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/pic,为管理员上传路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/pic,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/pic,为代理商上传路径</a>]</p>
<p>视频限制大小为8M</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/video?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>video</dt><dd><code>file</code>&nbsp;<span>(optional)</span>&nbsp;<p>视频</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">video</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"上传成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"参数错误或者上传失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-上传商品" class="resource"><h3 class="resource-heading">上传商品 <a href="#商品-上传商品" class="permalink">&nbsp;&para;</a></h3><div id="商品-上传商品-post" class="action post"><h4 class="action-heading"><div class="name">上传商品</div><a href="#商品-上传商品-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/add?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/add,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/add,为管理员上传路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/add,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E4%B8%8A%E4%BC%A0%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/add,为代理商上传路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/add?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>logo</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>图片url</p>
</dd><dt>goods_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠名</p>
</dd><dt>goods_code</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>编号</p>
</dd><dt>pic</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠相册，每张图片以逗号隔开</p>
</dd><dt>video</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>视频地址</p>
</dd><dt>format</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>规格</p>
</dd><dt>weight</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>重量</p>
</dd><dt>goods_detail</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠详情</p>
</dd><dt>price</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠价格</p>
</dd><dt>stock</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>库存</p>
</dd><dt>cat_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>品种</p>
</dd><dt>type</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>二级分类及三级明细，格式参考示例请求</p>
</dd><dt>status</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>状态，1为上架，0下架，2仓库</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">goods_name</span>": <span class="hljs-value"><span class="hljs-string">"测试翡翠"</span></span>,
  "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">"goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg"</span></span>,
  "<span class="hljs-attribute">pic</span>": <span class="hljs-value"><span class="hljs-string">"goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe"</span></span>,
  "<span class="hljs-attribute">video</span>": <span class="hljs-value"><span class="hljs-string">"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"</span></span>,
  "<span class="hljs-attribute">goods_detail</span>": <span class="hljs-value"><span class="hljs-string">"库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜"</span></span>,
  "<span class="hljs-attribute">price</span>": <span class="hljs-value"><span class="hljs-string">"20000"</span></span>,
  "<span class="hljs-attribute">stock</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
  "<span class="hljs-attribute">cat_id</span>": <span class="hljs-value"><span class="hljs-string">"114"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">135</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"观音"</span>
    </span>}</span>,
    "<span class="hljs-attribute">136</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"玻璃种"</span>
    </span>}</span>,
    "<span class="hljs-attribute">137</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"飘绿"</span>
    </span>}</span>,
    "<span class="hljs-attribute">138</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"1.5-3万"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"添加成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">goods_name</span>": <span class="hljs-value"><span class="hljs-string">"测试翡翠"</span></span>,
    "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">"goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg"</span></span>,
    "<span class="hljs-attribute">pic</span>": <span class="hljs-value"><span class="hljs-string">"goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe"</span></span>,
    "<span class="hljs-attribute">video</span>": <span class="hljs-value"><span class="hljs-string">"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"</span></span>,
    "<span class="hljs-attribute">goods_detail</span>": <span class="hljs-value"><span class="hljs-string">"库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜"</span></span>,
    "<span class="hljs-attribute">price</span>": <span class="hljs-value"><span class="hljs-string">"20000"</span></span>,
    "<span class="hljs-attribute">stock</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
    "<span class="hljs-attribute">cat_id</span>": <span class="hljs-value"><span class="hljs-string">"114"</span></span>,
    "<span class="hljs-attribute">goods_code</span>": <span class="hljs-value"><span class="hljs-string">"LYFC15141200105"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514120010"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514120010"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">39</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"添加失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-首页商品搜索" class="resource"><h3 class="resource-heading">首页商品搜索 <a href="#商品-首页商品搜索" class="permalink">&nbsp;&para;</a></h3><div id="商品-首页商品搜索-post" class="action post"><h4 class="action-heading"><div class="name">首页商品搜索</div><a href="#商品-首页商品搜索-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/goods/search</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods/search</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>input</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>用户输入</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">input</span>": <span class="hljs-value"><span class="hljs-string">"翡翠"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">200</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"参数错误或者获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-编辑商品" class="resource"><h3 class="resource-heading">编辑商品 <a href="#商品-编辑商品" class="permalink">&nbsp;&para;</a></h3><div id="商品-编辑商品-post" class="action post"><h4 class="action-heading"><div class="name">编辑商品</div><a href="#商品-编辑商品-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/add?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/add,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/add,为管理员编辑路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/add,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/add,为代理商编辑路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/add?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd><dt>logo</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>图片url</p>
</dd><dt>goods_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠名</p>
</dd><dt>pic</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠相册，每张图片以逗号隔开</p>
</dd><dt>video</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>视频地址</p>
</dd><dt>goods_detail</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠详情</p>
</dd><dt>price</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>翡翠价格</p>
</dd><dt>stock</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>库存</p>
</dd><dt>cat_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>品种</p>
</dd><dt>type</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>二级分类及三级明细，格式参考示例请求</p>
</dd><dt>input_type</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>录入者类型，1为代理商，2为管理员</p>
</dd><dt>input_id: (int, optional) - 录入者Id，结合input_type</dt><dd><code>string</code>&nbsp;<span class="required">(required)</span>&nbsp;</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"42"</span></span>,
  "<span class="hljs-attribute">goods_name</span>": <span class="hljs-value"><span class="hljs-string">"测试翡翠"</span></span>,
  "<span class="hljs-attribute">logo</span>": <span class="hljs-value"><span class="hljs-string">"goods_logo/2017-12-24/Y2rlFNKjVlv9xDTWjWG7FYsCoSe2SDDf5HHfrGFW.jpeg"</span></span>,
  "<span class="hljs-attribute">pic</span>": <span class="hljs-value"><span class="hljs-string">"goods_pic/2017-12-24/Zz7G0UBLUISswZPggrQ86UteBOr096hNw5JYmtfZ.jpeg,goods_pic/2017-12-24/naxS3VYvCkPEcrCwsuua1IPTwmtFh80c3BIjCGPy.jpe"</span></span>,
  "<span class="hljs-attribute">video</span>": <span class="hljs-value"><span class="hljs-string">"goods_video/2017-12-24/792190e9187897d3b67dc833f77f7da4.mp4"</span></span>,
  "<span class="hljs-attribute">goods_detail</span>": <span class="hljs-value"><span class="hljs-string">"库存仅此一件【尺寸】高35.5mm，宽23.5mm，厚5.6mm【颜　　色】略飘花【透明度】二分之一透明【必要说明】可见细小石纹，但瑕不掩瑜"</span></span>,
  "<span class="hljs-attribute">price</span>": <span class="hljs-value"><span class="hljs-string">"33000"</span></span>,
  "<span class="hljs-attribute">stock</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
  "<span class="hljs-attribute">cat_id</span>": <span class="hljs-value"><span class="hljs-string">"114"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">135</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"观音"</span>
    </span>}</span>,
    "<span class="hljs-attribute">136</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"玻璃种"</span>
    </span>}</span>,
    "<span class="hljs-attribute">137</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"飘绿"</span>
    </span>}</span>,
    "<span class="hljs-attribute">138</span>": <span class="hljs-value">{
      "<span class="hljs-attribute">type_val</span>": <span class="hljs-value"><span class="hljs-string">"8千-1.5万"</span>
    </span>}
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">true</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-商品上下架" class="resource"><h3 class="resource-heading">商品上下架 <a href="#商品-商品上下架" class="permalink">&nbsp;&para;</a></h3><div id="商品-商品上下架-post" class="action post"><h4 class="action-heading"><div class="name">商品上下架</div><a href="#商品-商品上下架-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin(agent)/goods/status?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/status,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/status,为管理员编辑路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/status,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/status,为代理商编辑路径</a>]</p>
<p>[代理商上架的商品必须先通过审核，管理员不需要]</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin(agent)/goods/status?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd><dt>status</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品状态，1上架。0下架</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"42"</span></span>,
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"0"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="商品-商品删除" class="resource"><h3 class="resource-heading">商品删除 <a href="#商品-商品删除" class="permalink">&nbsp;&para;</a></h3><div id="商品-商品删除-get" class="action get"><h4 class="action-heading"><div class="name">商品删除</div><a href="#商品-商品删除-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/agent/goods/delete/{id}?token=</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/goods/delete,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/goods/delete,为管理员编辑路径</a>]
[<a href="http://temp.cqquality.com/api/agent/goods/delete,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E7%BC%96%E8%BE%91%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/goods/delete,为代理商编辑路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/agent/goods/delete/<span class="hljs-attribute" title="id">id</span>?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="搜索" class="resource-group"><h2 class="group-heading">搜索 <a href="#搜索" class="permalink">&para;</a></h2><p>搜索</p>
<div id="搜索-通过一级分类获取商品" class="resource"><h3 class="resource-heading">通过一级分类获取商品 <a href="#搜索-通过一级分类获取商品" class="permalink">&nbsp;&para;</a></h3><div id="搜索-通过一级分类获取商品-post" class="action post"><h4 class="action-heading"><div class="name">通过一级分类获取商品</div><a href="#搜索-通过一级分类获取商品-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/goods/search/cat</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods/search/cat</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>cat_name</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>分类名</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取该分类商品成功！"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="搜索-通过分类获取商品" class="resource"><h3 class="resource-heading">通过分类获取商品 <a href="#搜索-通过分类获取商品" class="permalink">&nbsp;&para;</a></h3><div id="搜索-通过分类获取商品-post" class="action post"><h4 class="action-heading"><div class="name">通过分类获取商品</div><a href="#搜索-通过分类获取商品-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/goods/search/type</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods/search/type</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>cat_id</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>一级品种ID</p>
</dd><dt>type_id</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>二级分类ID</p>
</dd><dt>type_value</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>三级级明细</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">cat_id</span>": <span class="hljs-value"><span class="hljs-string">"114"</span></span>,
  "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"数组"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="搜索-通过一级分类id获取推荐商品" class="resource"><h3 class="resource-heading">通过一级分类ID获取推荐商品 <a href="#搜索-通过一级分类id获取推荐商品" class="permalink">&nbsp;&para;</a></h3><div id="搜索-通过一级分类id获取推荐商品-get" class="action get"><h4 class="action-heading"><div class="name">通过一级分类ID获取推荐商品</div><a href="#搜索-通过一级分类id获取推荐商品-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/goods/search/cat?cat_id=&amp;&amp;goods_id=</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/goods/search/cat?cat_id=&&goods_id=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>cat_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>分类ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取该分类商品成功！"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="分类" class="resource-group"><h2 class="group-heading">分类 <a href="#分类" class="permalink">&para;</a></h2><p>翡翠品种</p>
<div id="分类-获取所有品种" class="resource"><h3 class="resource-heading">获取所有品种 <a href="#分类-获取所有品种" class="permalink">&nbsp;&para;</a></h3><div id="分类-获取所有品种-get" class="action get"><h4 class="action-heading"><div class="name">获取所有品种</div><a href="#分类-获取所有品种-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/cats</code></h4><p>[获取所有品种,以及二级分类，三级明细]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/cats</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>data</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>品种</p>
</dd><dt>type</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>二级分类</p>
</dd><dt>type_val</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>三级明细，每个值逗号隔开</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取品种成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取品种失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="文章" class="resource-group"><h2 class="group-heading">文章 <a href="#文章" class="permalink">&para;</a></h2><p>文章</p>
<div id="文章-获取所有文章" class="resource"><h3 class="resource-heading">获取所有文章 <a href="#文章-获取所有文章" class="permalink">&nbsp;&para;</a></h3><div id="文章-获取所有文章-get" class="action get"><h4 class="action-heading"><div class="name">获取所有文章</div><a href="#文章-获取所有文章-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/articles</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/articles</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>cat</dt><dd><code>json</code>&nbsp;<span>(optional)</span>&nbsp;<p>文章所属分类</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取所有文章成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="文章-获取所有文章分类" class="resource"><h3 class="resource-heading">获取所有文章分类 <a href="#文章-获取所有文章分类" class="permalink">&nbsp;&para;</a></h3><div id="文章-获取所有文章分类-get" class="action get"><h4 class="action-heading"><div class="name">获取所有文章分类</div><a href="#文章-获取所有文章分类-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/articles/cats</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/articles/cats</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取所有文章分类成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章分类失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="文章-获取分类文章（通过分类id）" class="resource"><h3 class="resource-heading">获取分类文章（通过分类ID） <a href="#文章-获取分类文章（通过分类id）" class="permalink">&nbsp;&para;</a></h3><div id="文章-获取分类文章（通过分类id）-get" class="action get"><h4 class="action-heading"><div class="name">获取分类文章（通过分类ID）</div><a href="#文章-获取分类文章（通过分类id）-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/article/cat/id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/article/cat/id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>分类ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取分类文章成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span></span>,
    "<span class="hljs-attribute">cat_name</span>": <span class="hljs-value"><span class="hljs-string">"企业动向"</span></span>,
    "<span class="hljs-attribute">intro</span>": <span class="hljs-value"><span class="hljs-string">"收集最新企业动向"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1513398620"</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1513398647"</span></span>,
    "<span class="hljs-attribute">deleted_at</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">article</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取分类文章失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="文章-获取文章详情（通过文章id）" class="resource"><h3 class="resource-heading">获取文章详情（通过文章ID） <a href="#文章-获取文章详情（通过文章id）" class="permalink">&nbsp;&para;</a></h3><div id="文章-获取文章详情（通过文章id）-get" class="action get"><h4 class="action-heading"><div class="name">获取文章详情（通过文章ID）</div><a href="#文章-获取文章详情（通过文章id）-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/article/id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/article/id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>文章ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="轮播图" class="resource-group"><h2 class="group-heading">轮播图 <a href="#轮播图" class="permalink">&para;</a></h2><p>轮播图</p>
<div id="轮播图-获取所有轮播图" class="resource"><h3 class="resource-heading">获取所有轮播图 <a href="#轮播图-获取所有轮播图" class="permalink">&nbsp;&para;</a></h3><div id="轮播图-获取所有轮播图-get" class="action get"><h4 class="action-heading"><div class="name">获取所有轮播图</div><a href="#轮播图-获取所有轮播图-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/slides</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/slides</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="欢迎页" class="resource-group"><h2 class="group-heading">欢迎页 <a href="#欢迎页" class="permalink">&para;</a></h2><p>欢迎页</p>
<div id="欢迎页-获取所有欢迎页" class="resource"><h3 class="resource-heading">获取所有欢迎页 <a href="#欢迎页-获取所有欢迎页" class="permalink">&nbsp;&para;</a></h3><div id="欢迎页-获取所有欢迎页-get" class="action get"><h4 class="action-heading"><div class="name">获取所有欢迎页</div><a href="#欢迎页-获取所有欢迎页-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/pages</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/pages</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="名家" class="resource-group"><h2 class="group-heading">名家 <a href="#名家" class="permalink">&para;</a></h2><p>名家</p>
<div id="名家-获取所有名家" class="resource"><h3 class="resource-heading">获取所有名家 <a href="#名家-获取所有名家" class="permalink">&nbsp;&para;</a></h3><div id="名家-获取所有名家-get" class="action get"><h4 class="action-heading"><div class="name">获取所有名家</div><a href="#名家-获取所有名家-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/famous</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/famous</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取所有文章成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="名家-获取名家详情（通过名家id）" class="resource"><h3 class="resource-heading">获取名家详情（通过名家ID） <a href="#名家-获取名家详情（通过名家id）" class="permalink">&nbsp;&para;</a></h3><div id="名家-获取名家详情（通过名家id）-get" class="action get"><h4 class="action-heading"><div class="name">获取名家详情（通过名家ID）</div><a href="#名家-获取名家详情（通过名家id）-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/famous/id</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/famous/id</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>文章ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取文章失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="名家-发布到名家（通过名家id）" class="resource"><h3 class="resource-heading">发布到名家（通过名家ID） <a href="#名家-发布到名家（通过名家id）" class="permalink">&nbsp;&para;</a></h3><div id="名家-发布到名家（通过名家id）-post" class="action post"><h4 class="action-heading"><div class="name">发布到名家（通过名家ID）</div><a href="#名家-发布到名家（通过名家id）-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/famous/release</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/famous/release</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>goods_id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd><dt>famous_id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>名家ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"发布成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"发布失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="足迹" class="resource-group"><h2 class="group-heading">足迹 <a href="#足迹" class="permalink">&para;</a></h2><p>足迹</p>
<div id="足迹-获取用户足迹" class="resource"><h3 class="resource-heading">获取用户足迹 <a href="#足迹-获取用户足迹" class="permalink">&nbsp;&para;</a></h3><div id="足迹-获取用户足迹-get" class="action get"><h4 class="action-heading"><div class="name">获取用户足迹</div><a href="#足迹-获取用户足迹-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/users/history?token={token}</code></h4><p>[获取数据为数组，goods为浏览的商品信息，articles为浏览的文章信息。如果goods为null,这条足迹应该归档于文章]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/history?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="足迹-记录浏览历史" class="resource"><h3 class="resource-heading">记录浏览历史 <a href="#足迹-记录浏览历史" class="permalink">&nbsp;&para;</a></h3><div id="足迹-记录浏览历史-get" class="action get"><h4 class="action-heading"><div class="name">记录浏览历史</div><a href="#足迹-记录浏览历史-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/users/history/add?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/history/add?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd><dt>goods_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>商品ID</p>
</dd><dt>article_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>文章ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">goods_id</span>": <span class="hljs-value"><span class="hljs-string">"41"</span></span>,
    "<span class="hljs-attribute">user_id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">article_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
    "<span class="hljs-attribute">user_id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="收藏" class="resource-group"><h2 class="group-heading">收藏 <a href="#收藏" class="permalink">&para;</a></h2><p>收藏</p>
<div id="收藏-获取用户收藏" class="resource"><h3 class="resource-heading">获取用户收藏 <a href="#收藏-获取用户收藏" class="permalink">&nbsp;&para;</a></h3><div id="收藏-获取用户收藏-get" class="action get"><h4 class="action-heading"><div class="name">获取用户收藏</div><a href="#收藏-获取用户收藏-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/users/collect?token={token}</code></h4><p>[获取数据为数组，goods为浏览的商品信息，articles为浏览的文章信息。如果goods为null,这条收藏应该归档于文章]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/collect?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="收藏-添加收藏" class="resource"><h3 class="resource-heading">添加收藏 <a href="#收藏-添加收藏" class="permalink">&nbsp;&para;</a></h3><div id="收藏-添加收藏-post" class="action post"><h4 class="action-heading"><div class="name">添加收藏</div><a href="#收藏-添加收藏-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/users/collect/add?token={token}</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/users/collect/add?token=<span class="hljs-attribute" title="token">token</span></span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>token</dt><dd><code>varchar</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>密钥</p>
</dd><dt>goods_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>商品ID</p>
</dd><dt>article_id</dt><dd><code>int</code>&nbsp;<span class="required">(required)</span>&nbsp;<p>文章ID</p>
</dd></dl></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">goods_id</span>": <span class="hljs-value"><span class="hljs-string">"41"</span></span>,
    "<span class="hljs-attribute">user_id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">article_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
    "<span class="hljs-attribute">user_id</span>": <span class="hljs-value"><span class="hljs-number">18</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1514470122"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">2</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="订单" class="resource-group"><h2 class="group-heading">订单 <a href="#订单" class="permalink">&para;</a></h2><p>订单</p>
<div id="订单-管理员添加订单" class="resource"><h3 class="resource-heading">管理员添加订单 <a href="#订单-管理员添加订单" class="permalink">&nbsp;&para;</a></h3><div id="订单-管理员添加订单-post" class="action post"><h4 class="action-heading"><div class="name">管理员添加订单</div><a href="#订单-管理员添加订单-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin/order/add?token=</code></h4><p>【商品ID,形式[{“goods_id”:41},{“goods_id”:43}]】</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/order/add?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>express_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>快递公司名称</p>
</dd><dt>express_code</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>快递单号</p>
</dd><dt>goods_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;</dd><dt>agent_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>代理商ID</p>
</dd><dt>user_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>用户ID</p>
</dd><dt>status</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>状态，0为在路上，1已结缘，2已退回</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">express_name</span>": <span class="hljs-value"><span class="hljs-string">"圆通速递"</span></span>,
  "<span class="hljs-attribute">express_code</span>": <span class="hljs-value"><span class="hljs-string">"8908908809898"</span></span>,
  "<span class="hljs-attribute">goods_id</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
  "<span class="hljs-attribute">agent_id</span>": <span class="hljs-value"><span class="hljs-number">7</span></span>,
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-number">0</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"添加成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">express_name</span>": <span class="hljs-value"><span class="hljs-string">"圆通速递"</span></span>,
    "<span class="hljs-attribute">express_code</span>": <span class="hljs-value"><span class="hljs-string">"8908908809898"</span></span>,
    "<span class="hljs-attribute">goods_id</span>": <span class="hljs-value"><span class="hljs-string">"41"</span></span>,
    "<span class="hljs-attribute">agent_id</span>": <span class="hljs-value"><span class="hljs-number">7</span></span>,
    "<span class="hljs-attribute">admin_id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-number">0</span></span>,
    "<span class="hljs-attribute">updated_at</span>": <span class="hljs-value"><span class="hljs-string">"1518337266"</span></span>,
    "<span class="hljs-attribute">created_at</span>": <span class="hljs-value"><span class="hljs-string">"1518337266"</span></span>,
    "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"添加失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="订单-管理员修改订单" class="resource"><h3 class="resource-heading">管理员修改订单 <a href="#订单-管理员修改订单" class="permalink">&nbsp;&para;</a></h3><div id="订单-管理员修改订单-post" class="action post"><h4 class="action-heading"><div class="name">管理员修改订单</div><a href="#订单-管理员修改订单-post" class="method post">POST</a><code class="uri">/http:/temp.cqquality.com/api/admin/order/edit?token=</code></h4><p>【商品ID,形式[{“goods_id”:41},{“goods_id”:43}]】</p>
<h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/order/edit?token=</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>订单ID</p>
</dd><dt>express_name</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>快递公司名称</p>
</dd><dt>express_code</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>快递单号</p>
</dd><dt>goods_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品ID</p>
</dd><dt>agent_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>代理商ID</p>
</dd><dt>user_id</dt><dd><code>varchar</code>&nbsp;<span>(optional)</span>&nbsp;<p>用户ID</p>
</dd><dt>status</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>状态，0为在路上，1已结缘，2已退回</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"29"</span></span>,
  "<span class="hljs-attribute">express_name</span>": <span class="hljs-value"><span class="hljs-string">"圆通速递"</span></span>,
  "<span class="hljs-attribute">express_code</span>": <span class="hljs-value"><span class="hljs-string">"8908908809898"</span></span>,
  "<span class="hljs-attribute">goods_id</span>": <span class="hljs-value"><span class="hljs-string">""</span></span>,
  "<span class="hljs-attribute">agent_id</span>": <span class="hljs-value"><span class="hljs-number">7</span></span>,
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-number">0</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"false"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-number">500</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-string">""</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="订单-管理员删除订单" class="resource"><h3 class="resource-heading">管理员删除订单 <a href="#订单-管理员删除订单" class="permalink">&nbsp;&para;</a></h3><div id="订单-管理员删除订单-get" class="action get"><h4 class="action-heading"><div class="name">管理员删除订单</div><a href="#订单-管理员删除订单-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin/order/delete/?token==</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/order/delete/?token==</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"删除成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"删除失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="订单-订单获取" class="resource"><h3 class="resource-heading">订单获取 <a href="#订单-订单获取" class="permalink">&nbsp;&para;</a></h3><div id="订单-订单获取-get" class="action get"><h4 class="action-heading"><div class="name">订单获取</div><a href="#订单-订单获取-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin（agent）/order/all?token==</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/order/all,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/order/all,为管理员路径</a>]
[<a href="http://temp.cqquality.com/api/agent/order/all,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E6%88%96%E8%80%85%E7%94%A8%E6%88%B7%E8%8E%B7%E5%8F%96%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/order/all,为代理商或者用户获取路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin（agent）/order/all?token==</span></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="订单-管理员修改订单状态" class="resource"><h3 class="resource-heading">管理员修改订单状态 <a href="#订单-管理员修改订单状态" class="permalink">&nbsp;&para;</a></h3><div id="订单-管理员修改订单状态-get" class="action get"><h4 class="action-heading"><div class="name">管理员修改订单状态</div><a href="#订单-管理员修改订单状态-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin/order/status?token==</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin/order/status?token==</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>id</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>订单ID</p>
</dd><dt>status</dt><dd><code>int</code>&nbsp;<span>(optional)</span>&nbsp;<p>状态，0为在路上，1已结缘，2已退回</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"操作成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"修改失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="订单-单个订单获取" class="resource"><h3 class="resource-heading">单个订单获取 <a href="#订单-单个订单获取" class="permalink">&nbsp;&para;</a></h3><div id="订单-单个订单获取-get" class="action get"><h4 class="action-heading"><div class="name">单个订单获取</div><a href="#订单-单个订单获取-get" class="method get">GET</a><code class="uri">/http:/temp.cqquality.com/api/admin（agent）/order/?token==</code></h4><p>[<a href="http://temp.cqquality.com/api/admin/order/%7Bid%7D,%E4%B8%BA%E7%AE%A1%E7%90%86%E5%91%98%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/admin/order/{id},为管理员路径</a>]
[<a href="http://temp.cqquality.com/api/agent/order/%7Bid%7D,%E4%B8%BA%E4%BB%A3%E7%90%86%E5%95%86%E6%88%96%E8%80%85%E7%94%A8%E6%88%B7%E8%8E%B7%E5%8F%96%E8%B7%AF%E5%BE%84">http://temp.cqquality.com/api/agent/order/{id},为代理商或者用户获取路径</a>]</p>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/http:/temp.cqquality.com/api/admin（agent）/order/?token==</span></div><div class="title"><strong>URI Parameters</strong><div class="collapse-button show"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><dl class="inner"><dt>goods</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<p>商品信息</p>
</dd><dt>agent</dt><dd><code>array</code>&nbsp;<span>(optional)</span>&nbsp;<p>代理商信息</p>
</dd></dl></div><div class="title"><strong>Request</strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[]</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
  "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
  "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取成功！"</span></span>,
  "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-number">1</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>500</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">error</span>": <span class="hljs-value">{
    "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"true"</span></span>,
    "<span class="hljs-attribute">code</span>": <span class="hljs-value"><span class="hljs-string">"200"</span></span>,
    "<span class="hljs-attribute">msg</span>": <span class="hljs-value"><span class="hljs-string">"获取失败！"</span></span>,
    "<span class="hljs-attribute">data</span>": <span class="hljs-value"><span class="hljs-literal">false</span>
  </span>}
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 21 Mar 2018</p><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>