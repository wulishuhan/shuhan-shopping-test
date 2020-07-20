<?php
header('Content-Type:text/html;charset=utf-8');

$error = array();    //保存错误信息

// 当有表单提交时
if (!empty($_POST)) {
    
    // 接收用户登录表单
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

        // 连接数据库，设置字符集，选择数据库
        $link = mysqli_connect('localhost', 'root', '123456') or exit('数据库连接失败！');
        mysqli_set_charset($link, 'utf8');
        mysqli_select_db($link, 'bighomework') or exit('bighomework数据库不存在！');
    
        // SQL转义
        $username = mysqli_real_escape_string($link, $username);

        // 根据用户名取出用户信息
        $sql = "select * from `admin` where `username`='$username'";
        if ($rst = mysqli_query($link, $sql)) {   // 执行SQL，获得结果集
            $row = mysqli_fetch_assoc($rst);      // 处理结果集


            // 判断密码是否正确
            if ($password == $row['password']&&$row['password']!='') {
                


                // 登录成功，跳转到管理中心
                header('Location: index_html.php');

                // 终止脚本继续执行
                exit;
            }
            else{
            	echo "<script>alert('用户名或密码错误')</script>";
            	 header("refresh:0;url=./login_html.php");
            }
        }
    
}

// 加载HTML模板文件

require 'login_html.php';
