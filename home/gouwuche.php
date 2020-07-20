<?php
		header('content-type:text/html;charset=utf-8');
		mysql_connect('localhost','root','123456') or die('数据库连接失败！');
		mysql_query('set names utf8');
		mysql_query('use `bighomework`') or die('bighomework数据库不存在！');
if($_GET){
		$gid=$_GET['gid'];
		$uid=$_GET['uid'];
		$price=$_GET['price'];
		$name=$_GET['name'];
		$sql="insert into ord values($gid,$uid,$price,'$name')";
		$rst = mysql_query($sql);
		if($rst){
			
			//echo '<div style="position:absolute;lefe:0px;top:300px;">添加购物车成功</div>';
		}else{
			echo "<script>alert('添加失败')</script>";
			echo '添加失败：'.mysql_error();
}
}
require './index.php'
?>