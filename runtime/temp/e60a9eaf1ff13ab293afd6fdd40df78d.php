<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\wamp\www\person\public/../application/index\view\Index\index_v2.html";i:1489022801;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 主页</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/main/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Morris -->
    <link href="/static/main/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="/static/main/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="/static/main/css/animate.min.css" rel="stylesheet">
    <link href="/static/main/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>最新动态</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="index.html#">选项1</a>
                                </li>
                                <li><a href="index.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p><a class="text-info" href="index.html#">#感谢有你#</a> 感谢你们一路的相伴，未来也请让我为你们撑腰，我们会更好</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="index.html#">@颜文字君</a> 女生身高×1.09后，就是最适合你的男生身高；相反，男生是÷1.09就可以了..小伙伴们可以试着算下..【图是我的..(*/ω＼*)</p>
                                <div class="text-center m">
                                    <span id="sparkline8"></span>
                                </div>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2小时前</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="index.html#">#发型师#</a> 刚才剪发，顾客在看这个视频，妈蛋，这舞姿太销魂了，笑得手颤抖。。。</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                            </li>
                            <li class="list-group-item">
                                <p><a class="text-info" href="index.html#">#一年级#</a> ——#陈氏父子# cut：“他是我的陈爸爸”[心]“我叫陈思成，陈老师的陈” [心]“不再见就是，你也好，爸爸也好，妈妈也好，都永远不要说再见</p>
                                <small class="block text-muted"><i class="fa fa-clock-o"></i> 2分钟前</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/main/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/main/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/static/main/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="/static/main/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/static/main/js/demo/peity-demo.min.js"></script>
    <script src="/static/main/js/content.min.js?v=1.0.0"></script>
    <script src="/static/main/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/static/main/js/plugins/gritter/jquery.gritter.min.js"></script>
    <script src="/static/main/js/plugins/easypiechart/jquery.easypiechart.js"></script>
    <script src="/static/main/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/static/main/js/demo/sparkline-demo.min.js"></script>
    <!-- <script>
    $(document).ready(function() {
        WinMove();
        setTimeout(function() {
            $.gritter.add({
                title: "您有2条未读信息",
                text: '请前往<a href="mailbox.html" class="text-warning">收件箱</a>查看今日任务',
                time: 10000
            })
        }, 2000);
        $(".chart").easyPieChart({
            barColor: "#f8ac59",
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });
        $(".chart2").easyPieChart({
            barColor: "#1c84c6",
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });
        var data1 = [
            [0, 4],
            [1, 8],
            [2, 5],
            [3, 10],
            [4, 4],
            [5, 16],
            [6, 5],
            [7, 11],
            [8, 6],
            [9, 11],
            [10, 30],
            [11, 10],
            [12, 13],
            [13, 4],
            [14, 3],
            [15, 3],
            [16, 6]
        ];
        var data2 = [
            [0, 1],
            [1, 0],
            [2, 2],
            [3, 0],
            [4, 1],
            [5, 3],
            [6, 1],
            [7, 5],
            [8, 2],
            [9, 3],
            [10, 2],
            [11, 1],
            [12, 0],
            [13, 2],
            [14, 8],
            [15, 0],
            [16, 0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [data1, data2], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: "#d5d5d5"
            },
            colors: ["#1ab394", "#464f88"],
            xaxis: {},
            yaxis: {
                ticks: 4
            },
            tooltip: false
        })
    });
    </script> -->
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>
