<title>深信崖云Web|文件上传|服务端验证绕过(content-Type 类型绕过)</title>
<form method="post" name="upform" action="" enctype="multipart/form-data">
	<input type="file" name="uploadfile">
	 <input type="submit" value="upload" name="upload"></form>
	 <hr>
<?php
//print_r($_FILES['uploadfile']);
if (isset ( $_POST ['upload'] ) && ! empty ( $_POST ['upload'] )) {
	if ($_FILES ['uploadfile'] ['type'] != "image/jpeg") {
		exit ( 'EEOR: 上传文件不是正确图像' );
	} else {
		$upfile = "upfile" . "/" . rand ( 1, 5 ) . $_FILES ['uploadfile'] ['name'];
		if (is_uploaded_file ( $_FILES ['uploadfile'] ['tmp_name'] )) {
			if (! move_uploaded_file ( $_FILES ['uploadfile'] ['tmp_name'], $upfile )) {
				echo '出错！！移动文件失败！';
				exit ();
			} else {
				
				echo "上传成功路径是：$upfile";
			}
		}
	
	}

}

?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
<title>深信崖云Web|文件上传|服务端验证绕过(content-Type 类型绕过)</title>
<!-- <title>服务端验证绕过（Content-Type 类型绕过）</title> -->
</head>
<body>
	<h2>深信崖云Web|文件上传|服务端验证绕过(content-Type 类型绕过</h2>
	<p>文件上传文件存储路径/spages/spages-upload/upfile</p>

</body>
</html>
