<!DOCTYPE html>
<html>
<head>
  <title>深信崖云Beta|web安全</title>
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
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Web安全</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							 <a href="./websecurity.php">Web安全</a>
						</li>
						<li>
							 <a href="./index.php">主页</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">Action</a>
								</li>
								<li>
									 <a href="#">Another action</a>
								</li>
								<li>
									 <a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							 <a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									 <a href="#">Action</a>
								</li>
								<li>
									 <a href="#">Another action</a>
								</li>
								<li>
									 <a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									 <a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<h2 style="text-align: center;">
				欢迎来到WEB安全
			</h2>
			
			<p>
				 <a class="btn" href="./index.php">返回主页 »</a>
			</p>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="tabbable" id="tabs-658168">
						<ul class="nav nav-tabs">
							<li class="active">
								 <a href="#web-mysqlinjection" data-toggle="tab">SQL注入</a>
							</li>
							<li>
								 <a href="#web-webshell" data-toggle="tab">webShell</a>
							</li>
							<li>
								 <a href="#web-upload" data-toggle="tab">文件上传</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="web-mysqlinjection">
								<p>注意，有些SQL注入要配置数据库，配置文件于/dcon/deep-con.php下</p>
								<p>PS：部分页面尚未完善...请自由发挥</p>
								<tr>
									<li><b><a href="./spages/spages-upload/u-mime.php" target="_black">脚本之MIME验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-js.php" target="_black">脚本之js验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-content-type.php" target="_black">服务端验证绕过(content-Type 类型绕过)</a></b></li>
								</tr>
							</div>
							<div class="tab-pane" id="web-webshell">
								<p>shell模块请谨慎使用...</p>
								<p>PS：部分页面尚未完善...请自由发挥</p>
								<tr>
									<li><b><a href="./spages/spages-upload/u-mime.php" target="_black">脚本之MIME验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-js.php" target="_black">脚本之js验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-content-type.php" target="_black">服务端验证绕过(content-Type 类型绕过)</a></b></li>
								</tr>
							</div>
							<div class="tab-pane" id="web-upload">
								<p>文件上传默认存放路径：</p><p>/spages/spages-upload/upfile</p><p>/spages/spages-upload/upload</p>
								<p>PS：这些文件上传都是有漏洞的，请自由发挥</p>
								<tr>
									<li><b><a href="./spages/spages-upload/u-mime.php" target="_black">脚本之MIME验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-js.php" target="_black">脚本之js验证</a></b></li>
									<li><b><a href="./spages/spages-upload/u-content-type.php" target="_black">服务端验证绕过(content-Type 类型绕过)</a></b></li>
								</tr>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>