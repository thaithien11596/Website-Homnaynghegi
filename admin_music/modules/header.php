<?php
	if(isset($_POST['dangxuat'])){
		unset($_SESSION['dangnhap']);
		header('localtion:login.php');
	} 
	
?>
<div class="header" style="text-align:center;font-size:30px;color:#CEF6F5;line-height:50px; background: url(background/main.png)">
<B>ĐỒ ÁN CHUYÊN NGÀNH: Website Nghe Nhạc Trực Tuyến</B>
<h2 style="width:400px;margin: auto;" ><marquee behavior="" direction="left"> Xin Chào Admin</marquee></h2>
		<form action="" method="post" onsubmit="return confirm('Bạn có chắc chắn đăng xuất không')">
         <input type="submit" name="dangxuat" value="Đăng xuất tài khoản" style="width:200px;height:40px;float:right;background:#0040FF;color:#CEF6F5;border-radius:5px;margin-right:50px;font-size:16px"/>
        </form>
        
</div>
    	