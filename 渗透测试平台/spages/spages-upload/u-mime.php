<?php

//文件上传漏洞
$uploaddir = 'uploads/';
if (isset($_POST['submit'])) {
    if (file_exists($uploaddir)) {
        if (($_FILES['upfile']['type'] == 'image/gif') || ($_FILES['upfile']['type'] == 'image/jpeg') ||
            ($_FILES['upfile']['type'] == 'image/png') || ($_FILES['upfile']['type'] == 'image/bmp')
        ) {
            if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
                echo '文件上传成功，保存于：' . $uploaddir . $_FILES['upfile']['name'] . "\n";
            }
        } else {
            echo '文件类型不正确，请重新上传！' . "\n";
        }
    } else {
        exit($uploaddir . '文件夹不存在,请手工创建！');
    }
    //print_r($_FILES);
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>深信崖云Web|文件上传|MIME验证</title>
<body>
<h3>深信崖云Web|文件上传|文件上传漏洞演示脚本--MIME验证实例</h3>

<form action="" method="post" enctype="multipart/form-data" name="upload">
    请选择要上传的文件：<input type="file" name="upfile"/>
    <input type="submit" name="submit" value="上传"/>
</form>
</body>
</html>