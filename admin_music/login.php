<link rel="stylesheet" href="template/signin.css" />

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

<!-- cho nó show trước -->
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"> <a href="https://thuthuatweb.net">HomNayNgheGi.tk</a> </div>
    <div id="header-main-right">
      <div id="header-main-right-nav">
        <form method="post" action="" id="login_form" name="login_form">
          <table border="0" style="border:none">
            <tr>
              <td ><input type="text" tabindex="1"  id="email" placeholder="UserName" name="username" class="inputtext radius1" value=""></td>
              <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="password" class="inputtext radius1" ></td>
              <td ><input type="submit" class="fbbutton" name="login" value="Login" /></td>
            </tr>
            <tr>
              <td><label>
                  <input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
                  <span style="color:#ccc;">Keep me logged in</span></label></td>
              <td><label><a href="" style="color:#ccc; text-decoration:none">Forgot your password?</a></label></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- header ends here -->
<div class="loginbox radius">
  <h2 style="color:#141823; text-align:center;">WELCOME TO LOGIN ADMIN </h2>
   <div class="loginboxinner radius">
    <div class="loginheader">
      <h4 class="title">Connect with friends and the world around you.</h4>
    </div>
  <div class="login"><img src="background/login1.jpg" style="width: 100%" ><div>
  
 
    <!--loginheader-->
   <!--<div class="loginform">
      <form id="login" action="" method="post">
        <p>
          <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
          <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
        </p>
        <p>
          <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
        </p>
        <p>
          <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" />
        </p>
        <p>
          <input type="password" id="password" name="password" placeholder="New Password" class="radius" />
        </p>
        <p>
          <button class="radius title" name="signup">Sign Up for manager website</button>
        </p>
      </form>
    </div>--?
    <!--loginform-->
  </div>
  <!--loginboxinner-->
</div>
<!--loginbox-->