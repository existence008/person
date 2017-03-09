<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\wamp\www\person\public/../application/index\view\Bill\add.html";i:1489023434;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 基本表单</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/main/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/main/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/main/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/main/css/animate.min.css" rel="stylesheet">
    <link href="/static/main/css/style.min.css?v=4.0.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/static/main/css/plugins/markdown/bootstrap-markdown.min.css" />
    <script language="javascript" src="/static/main/js/YMDClass.js"></script>
    <base target="_blank">
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>添加 <small>添加账单具体信息</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <!--  <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                               <i class="fa fa-wrench"></i>
                           </a> -->
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">消费名称</label>
                                <div class="col-sm-10">
                                    <input type="text" id="bill_title" placeholder="填写消费的名称" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">消费类型</label>
                                <div class="col-sm-10">
                                    <select data-placeholder="请选择消费类型" id="type_id" class="chosen-select form-control col-sm-10" tabindex="2">
                                        <option value="">请选择類型</option>
                                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $ad['type_id']; ?>" hassubinfo="true"><?php echo $ad['type_name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">消费时间</label>
                                <div class="col-sm-10">
                                    <span class="form-control">
                                        <select name="year1" id="year" style="width: 33%;"></select>
                                        <select name="month1" id="month" style="width: 30%;"></select>
                                        <select name="day1" id="day" style="width: 30%;"></select>
                                </span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">消费金额</label>
                                <div class="col-sm-10">
                                    <input type="text" id="bill_money" placeholder="直接填入消费的金额数目(如23.32,23.00)" class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">消费描述</label>
                                <div class="col-sm-10">
                                    <div class="ibox-content">
                                        <textarea name="content" id="bill_desc" data-provide="markdown" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="button" id="addbtn">保存内容</button>
                                    <button class="btn btn-white" type="reset">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">登录</h3>
                            <p>欢迎登录本站(⊙o⊙)</p>
                            <form role="form">
                                <div class="form-group">
                                    <label>用户名：</label>
                                    <input type="email" placeholder="请输入用户名" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>密码：</label>
                                    <input type="password" placeholder="请输入密码" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>登录</strong>
                                    </button>
                                    <label>
                                        <input type="checkbox" class="i-checks">自动登录</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>还不是会员？</h4>
                            <p>您可以注册一个账户</p>
                            <p class="text-center">
                                <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/main/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/main/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/static/main/js/content.min.js?v=1.0.0"></script>
    <script src="/static/main/js/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="/static/main/js/plugins/markdown/markdown.js"></script>
    <script type="text/javascript" src="/static/main/js/plugins/markdown/to-markdown.js"></script>
    <script type="text/javascript" src="/static/main/js/plugins/markdown/bootstrap-markdown.js"></script>
    <script type="text/javascript" src="/static/main/js/plugins/markdown/bootstrap-markdown.zh.js"></script>
    <script>
    new YMDselect('year1', 'month1', 'day1');
    </script>
    <script>
    $(document).ready(function() {
        $(".i-checks").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green",
        })
    });

    //添加消费信息
    $("#addbtn").click(function() {
        var bill_title = $("#bill_title").val();
        var type_id = $("#type_id option:selected").val();
        var year = $("#year option:selected").val();
        var month = $("#month option:selected").val();
        var day = $("#day option:selected").val();
        var bill_desc = $("#bill_desc").val();
        var bill_money = $("#bill_money").val();
        var data = new Date();
        if (bill_title == "" || type_id == "" || year == "" || month == "" || day == "" || bill_money == "") {
            alert("请输入完整内容");
            return false;
        } else if (year == 0 || month == 0 || day == 0) {
            alert("时间不能为空");
            return false;
        } else if (!(/^[0-9]{1,10}[.][0-9]{2}$/).test(bill_money)) {
            alert("填写的消费金额不正确!");
        } else if (data.getFullYear() < year) {
            alert("消费时间超过系统当前时间，请重新选择!");
            return false;
        } else if (data.getFullYear() == year && data.getMonth() + 1 < month) {
            alert("消费时间超过系统当前时间，请重新选择!");
            return false;
        } else if (data.getFullYear() == year && data.getMonth() + 1 == month && data.getDate() < day) {
            alert("消费时间超过系统当前时间，请重新选择!");
            return false;
        } else {
            $.ajax({
                type: "post",
                url: "<?php echo url('index/Bill/addBill'); ?>",
                data: {
                    bill_title: bill_title,
                    bill_desc: bill_desc,
                    year: year,
                    month: month,
                    day: day,
                    type_id: type_id,
                    bill_money: bill_money

                },
                dataType: 'json',
                success: function(data) {
                    if (data.result == 1) {
                        alert("success");
                        window.location.reload();
                    }
                }
            })
        }

    })
    </script>
</body>

</html>
