
<title>服务端上传黑名单绕过</title>
<form name="form1" enctype="multipart/form-data" method="post" action="">
<input type="file" name="filefield""> <input type="submit" name="button"
	value="upload"></form>

<?php

//print_r ( $_FILES );
/*
 * $name;     上传文件名
 * $size：    上传文件大小
 * $path;     文件原路径
 * $newpath:  设置新路径
 * $not:      禁止上传的文件类型数组
 * $notsize:  限制文件大小的值
 * $move:     上传文件源
 *
 */

class fileupload {
	public $name;
	public $size;
	public $path;
	public $newpath;
	public $not = array ();
	public $notsize;
	public $move;
	function __construct($name, $size, $path, $newpath, $not, $notsize) {
		$this->name = $name;
		$this->size = $size / 1048576;
		 $this->path = $path;
	 	$this->newpath = $newpath;
		$this->not = explode ( ',', $not );
		 $this->notsize = $notsize;
		$this->upload ();
	}
	/*
     * 上传程序
     * 首先判断目录是否存在
     * 判断文件类型及大小
     */
	function upload() {
		if (! file_exists ( $this->newpath )) {
			echo "<script>alert('该目录不存在！')</script>";
			return;
		} else {
			$arr = explode ( '.', $this->name );
			if (in_array ( $arr [1], $this->not )) {
				echo "<script>alert('该类型文件禁止上传!')</script>";
				return;
			} else if ($this->name == '') {
				echo "<script>alert('请选择上传的文件!')</script>";
				return;
			} else if ($this->size > $this->notsize) {
				echo "<script>alert('上传文件超过规定大小!')</script>";
				return;
			} else if (file_exists ( "$this->newpath" . "$this->name" )) {
				echo "<script>alert('该文件已经存在!')</script>";
				return;
			} else {
				$this->move = move_uploaded_file ( $this->path, $this->newpath. $this->setNewName() );
				$this->move ();
			}
		}
	}
	
	
		private function setNewName() {
			$_nameArr = explode('.',$this->name);
			$_postfix = $_nameArr[count($_nameArr)-1];
			$_newname = date('YmdHis').mt_rand(100,1000).'.'.$_postfix;
			return $_newname;
	}
	
	/*
     * 判断文件上传是否成功
     */
	function move() {
		if ($this->move) {
			echo "upload ok";
			return;
		} else {
			echo "<script>alert('上传失败！')</script>";
			return;
		}
	}
}

$file_ty="html,htm,php,php2,php3,php4,phtml,pwml,inc,asp,aspx,ascx,jsp,cfm,cfc,pl,bat,exe,com,dll,vbs,js,reg,cgi,htaccess,asis,sh,shtml,shtm,phtm";
$up = new fileupload ( $_FILES ['filefield'] ['name'], $_FILES['filefield']['size'], $_FILES ['filefield'] ['tmp_name'], './spages/spages-upload/upload' ,$file_ty,512);

?>
