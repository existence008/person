<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp\www\person\public/../application/index\view\Photoes\index.html";i:1489032878;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - Blueimp相册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/main/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/main/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/main/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">

    <link href="/static/main/css/animate.min.css" rel="stylesheet">
    <link href="/static/main/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">
    <link rel="stylesheet" href="/static/img/css/reset.css">
    <link rel="stylesheet" href="/static/img/css/style.css" media="screen" type="text/css" />

    <style>
        .lightBoxGallery img {
            margin: 5px;
            width: 160px;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <h2>相册插件</h2>
                        <p>
                            <strong>blueimp Gallery</strong>主要为移动设备而设计，同时也支持桌面浏览器。可定制视频和相片，支持触摸操作，支持全屏播放等。项目地址： <a href="https://github.com/blueimp/Gallery" target="_blank">https://github.com/blueimp/Gallery</a>
                        </p>

                        <div class="lightBoxGallery">
                            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?>
                            <a href="<?php echo $ad['pp_img']; ?>" title="图片" data-gallery=""><img src="<?php echo $ad['pp_img']; ?>"></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/main/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/main/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/static/main/js/content.min.js?v=1.0.0"></script>
    <script src='/static/img/js/jquery.js'></script>
    <script src="/static/img/js/index.js"></script>
    <script src="/static/main/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
    <!--<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>-->
</body>

</html>