<?php
	header('content-type:text/html;charset=utf-8');
	mysql_connect('localhost','root','123456') or die('数据库连接失败！');
	mysql_query('set names utf8');
	mysql_query('use `bighomework`') or die('bighomework数据库不存在！');
if(isset($_GET)){
	$gid=$_GET['gid'];
	$uid=$_GET['uid'];
	$sql="delete from ord where uid=$uid and gid=$gid limit 1";
	$rst = mysql_query($sql);
	if($rst){
	echo '执行成功';
}	else{
	echo '执行失败：'.mysql_error();
}
	require 'jiesuan_html.php';
	header('reflash:5','Location: jiesuan_html.php?uid='.$uid);
}
else{
	
	die('shibai');
}


?>