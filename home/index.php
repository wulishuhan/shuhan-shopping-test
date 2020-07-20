<?php
	if($_GET){
		$uid=$_GET['uid'];
	}
	
	
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body style="background: #E0E0E0;">
		<div id="lunbo">
			<img class="img1" src="../img/02.jpg" alt="" />
			<img class="img1" src="../img/03.jpg" alt="" />
			<img class="img1" src="../img/01.jpg" alt="" />
		</div>
		<a href="jiesuan_html.php?uid=<?php echo $uid;?>" style="text-decoration: none;color: black;"><div id="see_shopingcar">
			进入购物车查看
		</div></a>
		
		
					<div id="googs" style="background: 	#E0E0E0;">
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
			 <?php foreach($goods as $row) {  $gid=$row['id'];$price=$row['price'];$name=$row['name'];  ?>
			<div class="good">
				<img style="width: 165px;height: 165px;margin-left:18px;" src="<?php echo $row['img_src'];?>" alt="" />
				<div id="gg" style="">
					价格：<?php echo $row['price'];?>
				</div>
				<div id="gg" style="">
					商品名称:<?php echo $row['name']; ?>
						<!--<form action="gouwuche.php" method="get" style="float: right;">
							<input type="hidden" name="gid" id="gid" value="<?php echo $gid;?>" />
							<input type="hidden" name="uid" id="uid" value="<?php echo $uid;?>" />
							<input type="hidden" name="price" id="price" value="<?php echo $price;?>" />
							<input type="hidden" name="name" id="name" value="<?php echo $name;?>" />
							<input type="submit" value="加入购物车" style="background: none; font-size: 10px;position:relative;color: black;bottom: 5px;"/>
						</form>-->
						<a style="float: right; text-decoration: none;color: black;" href="gouwuche.php?gid=<?php echo $gid."&uid=".$uid."&price=".$price."&name=".$name;?>">加入购物车</a>
				</div>
				
				
			</div>
			<?php  }} ?>
		</div>
		
		
	</body>
	<style type="text/css">
		#see_shopingcar{
			width: 120px;
			height: 200px;
			background: salmon;
			line-height: 200px;
			position: absolute;
			left: 0px;
			top: 500px;
			background: silver;
		}
		#gg{
			font-size: 10px;
			margin-left: 20px;
		}
	#lunbo .img1{
		width: 80%;
		height: 480px;
		position: absolute;
		top: 0px;
		left: 145px;
		display: none;
	}
	#googs{
		width: 800px;
		height: 1000px;
		border:  solid 1px black;
		margin: 480px auto;
		border-bottom: none;
	}
	#googs .good{
		width: 200px;
		height: 200px;
		border:  solid 1px black;
		margin-top: 30px;
		margin-left: 48px;
		float: left;
	}



	
	</style>
	<script type="text/javascript">
	var lunboimg=document.getElementsByClassName('img1');
	var n=0;
	function show(){
		if(n>=lunboimg.length)
		n=0;
		lunboimg[n].style.display='block';
		for(var i=0;i<lunboimg.length;i++){
			if(i==n)
			continue;
		lunboimg[i].style.display='none';
		}
		n++
	}
	setInterval(show,1500);
	</script>
</html>
