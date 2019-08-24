<?php
	header("Content-Type:text/html;charset=utf-8");
//核心配置文件||Kernel
	//深信崖云数据库设置
	define("HOST", "127.0.0.1"); //数据库地址
	define("USERNAME","root"); //数据库用户名
	define("PASSWORD","root"); //数据库密码
	define("DBNAME","deep_ya_cloud"); //数据库名
	define("CHARSET","utf8"); //数据库编码
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME) or die("深信崖云：数据库连接失败,<span styke='color:red'>".mysqli_connect_error()."</span>");
	mysqli_set_charset($con,CHARSET) or die("字符集编码设置无效");

?>
<?php
$title_none = "深信崖云数据库配置";
echo "<title>$title_none</title>";
?>

