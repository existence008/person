<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp\www\person\public/../application/index\view\Bill\index.html";i:1489022801;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - 数据表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/main/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/main/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <!-- Data Tables -->
    <link href="/static/main/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/static/main/css/animate.min.css" rel="stylesheet">
    <link href="/static/main/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">
</head>
<style type="text/css">
</style>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> 账单信息 <small>查找</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a><!-- 
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                                <i class="fa fa-wrench"></i>
                            </a> -->
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_data_tables.html#">选项1</a>
                                </li>
                                <li><a href="table_data_tables.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>账单编号</th>
                                    <th>账单标题</th>
                                    <th>消费金额</th>
                                    <th>账单描述</th>
                                    <th>消费时间</th>
                                    <th>添加时间</th>
                                    <th>消费类型</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?>
                                <tr class="gradeX">
                                    <td><?php echo $ad['bill_id']; ?></td>
                                    <td><?php echo $ad['bill_title']; ?></td>
                                    <td><?php echo $ad['bill_money']; ?>元</td>
                                    <td class="center centers"  title="<?php echo $ad['bill_desc']; ?>"><?php echo $ad['bill_desc']; ?></td>
                                    <td class="center"><?php echo $ad['bill_addtime']; ?></td>
                                    <td><?php echo $ad['bill_creatime']; ?></td>
                                    <td class="center">sdaf</td>
                                    <td class="center">
                                        <button class="btn btn-primary edit" type="button" data-toggle="modal" value="<?php echo $ad['bill_id']; ?>" data-target="#myModal">修改</button>
                                        <button class="btn btn-primary del" type="button" value="<?php echo $ad['bill_id']; ?>" style="background: #f8ac59;" data-toggle="modal" data-target="#delModal">删除</button>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- 修改弹窗 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">修改类型数据</h4>
                    </div>
                    <div class="modal-body">
                        <div class="ibox-content">
                            <form class="form-horizontal m-t" id="signupForm">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">姓氏：</label>
                                    <div class="col-sm-8">
                                        <input id="firstname" name="firstname" class="form-control" type="text">
                                        <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>输入类型名称(只能为中文)</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">状态：</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="checkbox" id="agree" name="agree"><span>显示</span>
                                                <input type="hidden" id="editshow" name="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" id="editbtn">提交</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 删除弹窗 -->
        <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">删除数据弹窗提示</h4>
                    </div>
                    <div class="modal-body">
                        <div class="ibox-content">
                            <form class="form-horizontal m-t" id="signupForm">
                                <div class="form-group">
                                    是否确认删除该数据?
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary" id="delbtn">确定</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/main/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/main/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/static/main/js/plugins/jeditable/jquery.jeditable.js"></script>
    <script src="/static/main/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/static/main/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/static/main/js/content.min.js?v=1.0.0"></script>
    <script>
    $(document).ready(function() {
        $(".dataTables-example").dataTable();
        var oTable = $("#editable").dataTable();
        oTable.$("td").editable("../example_ajax.php", {
            "callback": function(sValue, y) {
                var aPos = oTable.fnGetPosition(this);
                oTable.fnUpdate(sValue, aPos[0], aPos[1])
            },
            "submitdata": function(value, settings) {
                return {
                    "row_id": this.parentNode.getAttribute("id"),
                    "column": oTable.fnGetPosition(this)[2]
                }
            },
            "width": "90%",
            "height": "100%"
        })
    });

    function fnClickAddRow() {
        $("#editable").dataTable().fnAddData(["Custom row", "New row", "New row", "New row", "New row"])
    };
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>
