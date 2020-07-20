
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<div id="dingbu">
			<div id=""style="opacity: 0.8;">
				欢迎来到商品管理系统
			</div>
		</div>
		<div id="zhongbu" style="background: url(../img/07.jpeg);">
		<div id="menu">
			<a href="./chaxun_html.php" style="text-decoration: none; color: #F0FFFF;"><div id="mune_op">
				商品查询
			</div></a><br>
			<a href="./tianjia.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				商品增加
			</div></a><br>
			<a href="./shanchu.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				商品删除
			</div></a><br>
			<a href="./xiugai.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				商品修改
			</div></a><br>
			<a href="ord_select_html.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				订单查询
			</div></a><br>
			<a href="ord_del_html.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				订单删除
			</div></a><br>
			<a href="ora_update.php" style="text-decoration: none;color: #F0FFFF;"><div id="mune_op">
				订单修改
			</div></a><br>
				
		</div>
		<img id="xianshi" src="../img/07.jpeg">
			
		</img>
		</div>
	
		
		
		 
	
	</body>
	<style type="text/css">
		#dingbu{
			width: 100%;
			height: 40px;
			font-size: 35px;
			text-align: center;
			border: solid 1px white;	
			color: white;
			background: url(../img/07.jpeg);
				
			
		}
		#zhongbu{
			width: 100%;
			height: 800px;
				border: solid 1px white;		
		}
		#menu{
			width: 20%;
			height: 600px;
			border: solid 1px white;		
			font-size: 35px;	
			text-align: center;	
			text-decoration: none;
			float: left;
			opacity: 0.7;
			background: url(../img/07.jpeg);
			
			
		}
		#menu .mune_op{
			width: 100%;
			height: 80px;
			
			border: solid 1px black;
			
		}
		#xianshi{
			float: left;
			width: 79%;
			height: 600px;
			border: solid 1px white;	
			
		}
		#from_add{
			width: 300px;
			height: 300px;
			border: solid 1px white;	
			margin: 0 auto;
		}
		#from_add input{
			margin-left: 40px;
			margin-top: 30px;
		}
		#shopselect{
			/*display: none;*/
		}

		.search{padding:10px 0;float:right;font-size:12px;}
	</style>
</html>

