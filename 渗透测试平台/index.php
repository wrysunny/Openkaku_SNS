<!DOCTYPE html>
<html>
<head>
  <title>深信崖云Beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php
				include('./deep-top.php');
			?>
			
			<?php
				include('./deep-modules.php')
			?>
					
				</div>
				<div class="col-md-4 column">
					<div class="alert alert-dismissable alert-danger">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>
							警告!
						</h4> <strong>数据库连接出错！</strong> 数据库连接失败，请检查config.php配置文件 <a href="#" class="alert-link">一般出错</a>
					</div>

					<?php

					if('/'==DIRECTORY_SEPARATOR){
    					$server_ip=$_SERVER['SERVER_ADDR'];
					}else{
    					$server_ip=@gethostbyname($_SERVER['SERVER_NAME']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_port=$_SERVER['REMOTE_PORT'];
					}else{
						$server_port=@gethostbyname($_SERVER['REMOTE_PORT']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_port_port=$_SERVER['SERVER_PORT'];
					}else{
						$server_port_port=@gethostbyname($_SERVER['SERVER_PORT']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_language=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
					}else{
						$server_language=@gethostbyname($_SERVER['HTTP_ACCEPT_LANGUAGE']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_user_get=$_SERVER['HTTP_USER_AGENT'];
					}else{
						$server_user_get=@gethostbyname($_SERVER['HTTP_USER_AGENT']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_admin=$_SERVER['SERVER_PROTOCOL'];
					}else{
						$server_admin=@gethostbyname($_SERVER['SERVER_PROTOCOL']);
					}
					if('/'==DIRECTORY_SEPARATOR){
						$server_get=$_SERVER['REQUEST_METHOD'];
					}else{
						$server_get=@gethostbyname($_SERVER['REQUEST_METHOD']);
					}
				echo "
					<div class=\"alert alert-dismissable alert-success\">
						 <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
						<h4>
							崖云助手：
						</h4> <strong>系统IP：</strong>.$server_ip;
						<br><strong>系统端口：</strong>.$server_port_port;
						<br><strong>浏览器端口：</strong>.$server_port;
						<br><strong>请求方式：</strong>.$server_get;
						<br><strong>当前浏览器语言：</strong>.$server_language;
						<br><strong>请求内容：</strong>.$server_user_get;
						<br><strong>HTTP版本：</strong>.$server_admin;

					</div>";

					?>
					<!-- <div class="alert alert-success alert-dismissable">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>
							注意!
						</h4> <strong>!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
					</div>
					<div class="alert alert-success alert-dismissable">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>
							注意!
						</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
					</div> -->

				</div>
			</div>
		</div>
	</div>
	<!-- Deep Ya Cloud-Kernel Code  
THIS CODE BELONGS TO ICECLIFFS
BY:ZQX ICECLIFFSNETWORK
Deep Ya Cloud-Kernel Code
-->		
	<?php
			include('./deep-tail.php');
	?>
</div>

</body>
</html>