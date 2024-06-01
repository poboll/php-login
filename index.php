<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            text-align: right;
        }
        table {
            width: 200px;
            border-collapse: collapse;
            text-align: left;
        }
        table, th, td {
            border: 1px solid #ccc;
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <?php
            session_start();
            if(isset($_SESSION["user"])){
                echo "欢迎".$_SESSION["user"]."登录<a href='exit.php'>退出</a>";
            } else {
                echo "未登录<a href='login.html'>登录</a>/<a href='sign.php'>注册</a>";
            }
        ?>
    </header>
    <h1>网站首页</h1>
    <table>
        <tr>
            <td>账号</td>
            <td>mdo</td>
        </tr>
        <tr>
            <td>密码</td>
            <td>123456</td>
        </tr>
    </table>
    <p>通过连接数据库验证用户名密码</p>
    <p>密码使用md5加密，同时加入了图片验证码</p>
</body>
</html>
