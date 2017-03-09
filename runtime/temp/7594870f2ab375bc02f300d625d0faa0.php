<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp\www\person\public/../application/index\view\Admin\login.html";i:1489024225;}*/ ?>
<!DOCTYPE html >
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>代购登陆界面</title>
    <link rel="stylesheet" href="/static/login/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/static/login/css/loginmy.css" />
    <style>
    html,
    body {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="center">
            <form action="" id="formOne" method="post" onsubmit="return submitB()">
                <i class="fa fa-user Cone">  | </i>
                <input type="text" name="uer" id="user" placeholder="用户名" onblur="checkUser()" />
                <span id="user_pass"></span>
                <br/>
                <i class="fa fa-key Cone">  | </i>
                <input type="password" name="pwd" id="pwd" placeholder="密码" onblur="checkUser1()" />
                <span id="pwd_pass"></span>
                <br/>
                <!--<i class="fa fa-folder-open Cone">  | </i>-->
                <!--<input type="text" name="surePwd" id="surePwd" placeholder="验证码"onblur="checkUser2()"/>-->
                <!--<span id="surePwd_pass" ></span><br/>-->
                <input type="button" value="确认" id="submit" name="submit">
                <br/>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/static/login/js/loginmy.js"></script>
    <script type="text/javascript" src="/static/main/js/jquery.min.js"></script>
    <script type="text/javascript">
    // 登陆验证
    $("#submit").click(function() {
        var admin_name = $("#user").val();
        var admin_pwd = $("#pwd").val();
        if (admin_name == "" || admin_pwd == "") {
            alert("你还未输入信息");
            return false;
        } else {
            $.ajax({
                type: 'post',
                url: "<?php echo url('index/Admin/checkLogin'); ?>",
                data: {
                    admin_name: admin_name,
                    admin_pwd: admin_pwd
                },
                success: function(data) {
                    console.log(data);
                    if (data == 1) {
                        window.location.href = "<?php echo url('index/Index/index'); ?>";
                    } else {
                        alert(data);
                    }
                }
            });
        }
    });
    </script>
</body>

</html>
