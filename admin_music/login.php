<div style="width:1348px;height:600px;background: url(background/login1.jpg);">

<?php
 include('modules/config.php');
 session_start();// bắt đầu sự kiện session
// session_destroy();// xóa sự kiện session
 if(isset($_POST['login'])){
  $username=$_POST['username']; // gán id password cho biến để so sánh dtb
	$password=$_POST['password'];
	
	$sql="select * from admin where Useradmin='$username' and passAdmin='$password' limit 1";
  //$sql1="select * from thanhvien where username='$username' and password='$password' and trangthaihd=1 limit 1";
	$objStm=$objPdo->query($sql);
	$count=$objStm->fetch(PDO::FETCH_NUM);// số thứ tự cột
	if($count[0]>0){ // có tồn tại tk
		$_SESSION['dangnhap']=$username;
		header('location:index.php');
	}else{
		echo '<script>alert("Đăng nhập thất bại: Sai id hoặc password!");</script>';
	 	header('location:login.php');

	}
}
 ?>
<form action="" method="post" >
<table width="500" border="5" align="center" style="background:#08088A;border-radius:10px; margin-top: 40px">
  <tr>
    <td colspan="2"><div align="center" style="color:white; margin-top: 20px; font-weight: bold; font-size: 40px ">LOGIN DATABASE</div></td>
  </tr>
  <tr>
    <td width="68"  style="color:#FFF">Username</td>
    <td width="116"><input type="text" name="username" size="20" style="width:200px;border-radius:10px; width: 410px" </td>
  </tr>
  <tr>
    <td style="color:#FFF">Password</td>
    <td><input type="password" name="password" size="20" style="width:200px;border-radius:10px; width: 410px"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="login" value="Đăng nhập" style="color:#FFF;background:#04B404;border-radius:5px;">
    </div></td>
  </tr>
</table>
</form>
</div>