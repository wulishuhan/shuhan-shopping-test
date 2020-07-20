<?php
require './connect.php';
//补充完整代码
$where='';
if(isset($_POST['keyword'])){
	
	$keyword=$_POST['keyword'];
	$keyword=mysqli_real_escape_string($link,$keyword);
	$where="where uid like '%$keyword%'";
	
}
$sql="select * from ord $where";



// 执行SQL语句，获取结果集
$res = mysqli_query($link, $sql);
if (!$res) {
    exit(mysqli_error($link));
}

// 定义员工数组，用以保存员工信息
$emp_info = array();
// 遍历结果集，获取每位员工的详细数据
while ($row = mysqli_fetch_assoc($res)) {
    $emp_info[] = $row;
}
// 设置常量，用以判断视图页面是否由此页面加载
// 加载视图页面，显示数据
//define('APP', 'bighomework');

?>
