<?php
//	require './connect.php';
mysql_connect('localhost','root','123456') or die('数据库连接失败！');
mysql_query('set names utf8');
mysql_query('use `bighomework`') or die('bighomework数据库不存在！');
if (!empty($_POST)) {
	$gid=$_POST['gid'];
	$uid=$_POST['uid'];
	$price=$_POST['price'];
	$name=$_POST['name'];
//	echo $id;
//	echo $img_src;
//	echo $price;
//	echo $name;
	$sql="update goods set gid=$gid,uid='$uid',price=$price,name='$name' where id=$id";
	$rst = mysql_query($sql);
	echo "SQL语句：$sql<br>";
if($rst){
	echo "<script>alert('修改成功')</script>";
	echo '执行成功';
}else{
	echo '执行失败：'.mysql_error();
}
	
}
require './ora_update_html.php';
?>