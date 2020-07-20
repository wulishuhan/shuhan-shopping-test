<?php if(!defined('APP')) die('error!'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>欢迎登录</title>
<style>
body{background-color:#eee;margin:0;padding:0;}
.reg{width:400px;margin:15px;padding:20px;border:1px solid #ccc;background-color:#fff;}
.reg .title{text-align:center;padding-bottom:10px;}
.reg th{font-weight:normal;text-align:right;}
.reg input{width:180px;border:1px solid #ccc;height:20px;padding-left:4px;}
.reg .td-auto-login{font-size:14px;text-align:left;padding-left:90px;padding-top:5px;}
.reg .checkbox{width:auto;vertical-align:middle;}
.reg label{vertical-align:middle;}
.reg .button{background-color:#0099ff;border:1px solid #0099ff;color:#fff;width:80px;height:25px;margin:0 5px;cursor:pointer;}
.reg .td-btn{text-align:center;padding-top:5px;}
.error-box{width:378px;margin:15px;padding:10px;background:#FFF0F2;border:1px dotted #ff0099;font-size:14px;color:#ff0000;}
.error-box ul{margin:10px;padding-left:25px;}
</style>
</head>
<body style="background: url(../img/07.jpeg);">
<form method="post">
<table class="reg" style="margin: 150px auto; background: none; border: solid 1px white; color: white;border-radius: 20px;opacity: 0.7;">
	<tr><td class="title" colspan="2">欢迎登录</td></tr>
	<tr><th>用户名：</th><td><input type="text" name="username" style="background: none;"/></td></tr>
	<tr><th>密码：</th><td><input type="password" name="password" style="background: none;"/></td></tr>
	<tr><td colspan="2" class="td-auto-login">
		<input type="checkbox" class="checkbox" id="auto_login" name="auto_login" value="on" /><label for="auto_login">下次自动登录</label>
	</td></tr>
	<tr><td colspan="2" class="td-btn">
	<input type="submit" value="登录" class="button" style="background: none;border: solid 1px white;"/>
	<input type="button" value="立即注册" class="button" onclick="location.href='register.php'" style="background: none;border: solid 1px white;"/>
	</td></tr>
</table>
</form>
<?php if(!empty($error)): ?>
	<div class="error-box">登录失败，错误信息如下：
		<ul><?php foreach($error as $v) echo "<li>$v</li>"; ?></ul>
	</div>
<?php endIf; ?>
</body>
</html>