<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body> 
		<div id="googs">
			<?php 
				header('content-type:text/html;charset=utf-8');

			// 连接数据库
				$link = mysqli_connect('localhost','root','123456');
			// 判断数据库连接是否成功，如果不成功则显示错误信息并终止脚本继续执行
				if (!$link) {
 			   exit('连接数据库失败！' . mysqli_connect_error());
				}
			// 设置字符集，选择数据库
			mysqli_set_charset($link, 'utf8');
			mysqli_select_db($link, 'bighomework');
				$sql="select * from goods";
				$res = mysqli_query($link, $sql);
				if (!$res) {
  				  exit(mysqli_error($link));
				}
				$goods = array();
				// 遍历结果集，获取每位员工的详细数据
				while ($row = mysqli_fetch_assoc($res)) {
   				 $goods[] = $row;
				}
				?>
			<?php  if(!empty($goods)) { ?>
			 <?php foreach($goods as $row) {    ?>
			<div class="good">
				<img style="width: 165px;height: 165px;" src="<?php echo $row['img_src'];?>" alt="" />
				<?php echo $row['price'];?>
				<?php echo $row['name'];?>
			</div>
			<?php  }} ?>
		</div>
		
		
	</body>
	<style type="text/css">
	#lunbo .img1{
		width: 800px;
		height: 380px;
		position: absolute;
		top: 35px;
		left:275px;
		display: none;
	}
	#googs{
		width: 800px;
		height: 970px;
		border:  solid 1px red;
		margin: 380px auto;
	}
	#googs .good{
		width: 200px;
		height: 200px;
		border:  solid 1px red;
		margin-top: 30px;
		margin-left: 48px;
		float: left;
	}

</html>
