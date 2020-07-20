<?php
//	require './connect.php';
mysql_connect('localhost','root','123456') or die('数据库连接失败！');
mysql_query('set names utf8');
mysql_query('use `bighomework`') or die('bighomework数据库不存在！');
if (!empty($_POST)) {
	$uid=$_POST['uid'];
	$gid=$_POST['gid'];
//	$img_src=$_POST['img_src'];
//	$price=$_POST['price'];
//	$name=$_POST['name'];
//	echo $id;
//	echo $img_src;
//	echo $price;
//	echo $name;
	$sql="delete from ord where uid=$uid and gid=$gid";
	$rst = mysql_query($sql);
	echo "SQL语句：$sql<br>";
if($rst){
	echo "<script>alert('删除成功')</script>";
	echo '执行成功';
}else{
	echo '执行失败：'.mysql_error();
}
	
}
require './ord_del_html.php';
?>