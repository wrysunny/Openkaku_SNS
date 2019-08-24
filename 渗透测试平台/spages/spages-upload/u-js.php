<?php
//JS上传
$uploaddir = 'uploads/';
if (isset($_POST['submit'])) {
    if (file_exists($uploaddir)) {
        if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploaddir . '/' . $_FILES['upfile']['name'])) {
            echo '上传成功！文件路径：' . $uploaddir . $_FILES['upfile']['name'] . "\n";
        }
    } else {
        exit($uploaddir . '请勿重新上传！');
    }
    //print_r($_FILES);
}
?>
<html>
<head>
   	<meta charset="utf-8">
    <title>深信崖云Web|文件上传|js脚本验证</title>
    <script type="text/javascript">
        function checkFile() {
            var file = document.getElementsByName('upfile')[0].value;
            if (file == null || file == "") {
                alert("上传成功！!");
                return false;
            }
 
            var allow_ext = ".jpg|.jpeg|.png|.gif|.bmp|";

            var ext_name = file.substring(file.lastIndexOf("."));

            if (allow_ext.indexOf(ext_name + "|") == -1) {
                var errMsg = "仅允许上传" + allow_ext + "您的文件后缀名是" + ext_name;
                alert(errMsg);
                return false;
            }
        }
    </script>
<body>
<h3>深信崖云Web|文件上传|js脚本验证</h3>

<form action="" method="post" enctype="multipart/form-data" name="upload" onsubmit="return checkFile()">
    <input type="hidden" name="MAX_FILE_SIZE" value="204800"/>
    请上传文件<input type="file" name="upfile"/>
    <input type="submit" name="submit" value="上传！"/>
</form>
</body>
</html>