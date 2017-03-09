<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp\www\person\public/../application/index\view\Bill\report.html";i:1489041103;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - Flot图表</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/main/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/main/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/main/css/animate.min.css" rel="stylesheet">
    <link href="/static/main/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>

<body class="gray-bg">
    <!-- <div class="wrapper wrapper-content animated fadeInRight"> -->
    <div id="container" style="height: 100%"></div>
    <!-- </div> -->
    <script src="/static/main/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/main/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/static/main/js/content.min.js?v=1.0.0"></script>
    <script src="/static/main/js/demo/flot-demo.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
    <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
    <script type="text/javascript">
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        title: {
            text: '财务报表',
            subtext: '2017消费情况',
            x: 'center'
        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: ['直接访问', '邮件营销', '联盟广告', '视频广告', '搜索引擎']
        },
        series: [{
            name: '访问来源',
            type: 'pie',
            radius: '55%',
            center: ['50%', '60%'],
            data: [{
                value: 335,
                name: '直接访问'
            }, {
                value: 310,
                name: '邮件营销'
            }, {
                value: 234,
                name: '联盟广告'
            }, {
                value: 135,
                name: '视频广告'
            }, {
                value: 1548,
                name: '搜索引擎'
            }],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    };
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
    </script>
</body>

</html>
