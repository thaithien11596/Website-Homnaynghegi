<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="sanpham/images.png" rel="icon" />
<link rel="stylesheet" href="style/css.css" type="text/css" />
<title>Quản trị Cơ Sở Dữ Liệu</title>
</head>

<body>
<?php
session_start();
 if(!isset($_SESSION['dangnhap'])){
	header('location:login.php'); 
 }

?>
<div class="wrapper" style="height: auto">
    	<?php
			include('modules/config.php');
			include('modules/header.php'); 
			include('modules/menu.php'); 
			include('modules/content.php'); 
			include('modules/footer.php'); 
		?>
    	 <div style="clear: both"></div>
    </div>

</body>
</html>