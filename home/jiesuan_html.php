<?php require './jiesuan.php';?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>订单信息列表</title>
  <style>
	.box{margin:20px;}
	.box .title{font-size:22px;font-weight:bold;text-align:center;}
	.box table{width:100%;margin-top:10px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.box table th,.box table td{height:20px;border:1px solid #B5D6E6;}
	.box table th{background-color:#E8F6FC;font-weight:normal;}
	.box table td{text-align:center;}
	.search{padding:10px 0;float:right;font-size:12px;}
 </style>
 </head>
 <body style="background: url(../img/07.jpeg);">
<form action="./chaxun_html.php" method="post">
<div class="box">
	<div class="title" style="color: white;opacity: 0.7;">购物车信息</div>
	<div class="search" style="color: white; opacity: 0.7;">快速查询：
		<input type="text" name="keyword"/>
		<input type="submit" value="搜索"/>
	</div>
	<table border="1">
		<tr style="opacity: 0.5;"><th width="5%">GID</th><th>UID</th><th>价格</th><th>商品名</th><th width="25%">相关操作</th></tr>
		<?php $sum=0;  if(!empty($emp_info)) { ?>
		 <?php foreach($emp_info as $row) {    $uid=$row['uid'];
		 	$gid=$row['gid'];?>
					<tr style="color: white; opacity: 0.8;">
						 <td><?php echo $row['gid']; ?></td>
						 <td><?php echo $row['uid']; ?></td>
						 <td><?php echo $row['price']; $sum+=$row['price'];?></td>
						 <td><?php echo $row['name']; ?></td>
						 <td><div align="center"><span>
						 	<img src="images/edit.gif" width="16" height="16" />
						 	<a class="pen" href="ora_update.php">修改</a>&nbsp; &nbsp;
						 	<img src="images/del.gif" width="16" height="16" />
						 	<a class="pen" href="./jiesuan_html_del.php?gid=<?php echo $gid."&uid=".$uid;?>">删除</a> </span></div>
						 	</td>
					</tr>
		<?php  } ?>
		<tr><td></td> 
		<td></td>
		<td></td>
		<td></td><td style="color: white;">总计：<?php echo $sum;?></td></tr>	
		<?php  }else{   ?>
					<tr><td colspan="6">查询的结果不存在！</td></tr>
		<?php } ?>
	</table>
</div>
</form>
<a href="index.php?uid=<?php echo $uid;?>" style="text-decoration: none;" class="pen">返回主页</a>
 </body>
 <style type="text/css">
 	.pen{
 		text-decoration: none;
 		color: white;
 		opacity: 0.7;
 	}
 </style>
</html>
