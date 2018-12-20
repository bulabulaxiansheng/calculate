<!DOCTYPE html>
<html>
<head>
	<title>图形计算器</title>
</head>
<body>
	<center>
		<h1>简单的图形计算器</h1>
		<a href="index.php?action=rect">矩形</a>||
		<a href="index.php?action=triangle">三角形</a>
	</center>
	<hr>
	<?php
		//设置自动加载类文件
		function __autoload($classname){
			include strtolower($classname).".class.php";
		}
		//判断用户是否有点击形状的链接
		if(!empty($_GET['action'])){
			//第一步，创建形状的对象
			$classname=ucfirst($_GET['action']);
			$shape=new $classname($_POST);
			//第二步，调用矩形的界面view()
			$shape->view();
			//第三步，判断用户是否提交对应图形的表单
			if(isset($_POST['dosubmit'])){
				//第四步，查看用户输入的数据是否正确
				if($shape->check($_POST)){
					//如果输入正确，计算图形的面积和周长
					echo $shape->name."的面积为:".$shape->area()."<br>";
					echo $shape->name."周长为:".$shape->zhou()."<br>";
				}
			}
		}else{
			echo "请选择要计算的图形！<br>";
		}
	?>
</body>
</html>