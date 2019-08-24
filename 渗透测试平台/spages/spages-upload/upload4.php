<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>服务端路径突破上传</title>
<form method="post" name="upform" action="" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="hidden" name="path" value="upfile"> 
	<input type="submit" value="upload" name="up">
</form>

</html>

<?php


if(isset($_POST['up'])|| !empty($_POST['UP'])){

if($_FILES['file']['error'] > 0){
   echo '!problem:';
   switch($_FILES['file']['error'])
   {
     case 1: echo '文件大小超过服务器限制';
             break;
     case 2: echo '文件太大！';
             break;
     case 3: echo '文件只加载了一部分！';
             break;
     case 4: echo '文件加载失败！';
             break;
   }
   
   exit;
}
}



if($_FILES['file']['size'] > 1000000){
   echo '文件过大！';
   exit;
}
if($_FILES['file']['type']!='image/jpeg' && $_FILES['file']['type']!='image/gif'){
   echo '文件不是JPG或者GIF图片！';
   exit;
} 
$today = date("YmdHis");
$filetype = $_FILES['file']['type'];
if($filetype == 'image/jpeg'){
  $type = '.jpg';
}
if($filetype == 'image/gif'){
  $type = '.gif';
}

function checkPath($_patch){
		if (!is_dir($_patch) || !is_writeable($_patch)) {
			if (!mkdir($_patch)) {
			exit('ERRIR:创建目录失败');
			}
		}
}
checkPath($_POST['path']);
$upfile =  $_POST['path']."/". $today . $type;
if(is_uploaded_file($_FILES['file']['tmp_name']))
{
   if(!move_uploaded_file($_FILES['file']['tmp_name'], $upfile))
   {
     echo '移动文件失败！';
     exit;
    }
}
else
{
   echo 'problem!';
   exit;
}
echo '<h1>success!</h1><br>'; 
echo '文件大小：' . $_FILES['file']['size'] . '字节' . '<Br>';
echo '文件路径：' . $upfile;
echo '<hr with="100%" />' . '<p>';
$dirr = 'upfile/';
$dir = opendir($dirr);
echo $dirr . '--Listing:<ul>';
while($file = readdir($dir)){
  echo "<li>$file</li>";
}
echo '</ul>';
closedir($dir);
?>

