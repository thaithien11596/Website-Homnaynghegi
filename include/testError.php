<!-- <div class="alert alert-warning" role="alert"><strong>Error: </strong><br /> -->
    
    <?php 
	if (isset($_POST['signup']))
	{
		$dem=0;
		foreach($thanhvien as $member)
		{
		
			if($_POST["username"]==$member["username"]){ $dem++;}
		}
	 	$i=0;
			if (checkUserName($_POST["username"])==false ){
				$i++;
				echo "Tên đăng nhập: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và ít nhất 8 ký tự! <br>";}
			if($dem!=0)
			{
				$i++;
				echo "Tên đăng nhập đã có người sử dụng! <br>";
			}
			if (checkPassword($_POST["password"])==false) {
				$i++;
				echo "Password: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường- <br>";}
			if($_POST["password"]!=$_POST["repassword"]){
				$i++;
				echo "Mật khẩu nhập lại không đúng ! <br >";}
			if (checkPhoneNumber($_POST["sdt"])==false) {
				$i++;
				echo "PhoneNumber: Phải nhập số điện thoại và - <br>";}
			// if (checkEmail($_POST["email"])==false) {
			// 	$i++;
			// 	echo "Định dạng email sai!<br>";}
			// if(!isset($_POST['interests'])){
			// 	$i++;
			// 	echo "Bạn phải đồng ý với điều khoản!<br>";
			// }
			// if(checkEmail($_POST["date"])==false){
			// 	$i++;
			// 	echo "Bạn phải trên 12 tuổi!<br>";
			// }
			if($i==0){ 
				$arr=array(":username"=>$_POST["username"], ":password"=>$_POST["password"], ":hoten"=>$_POST["hoten"], ":gt"=>$_POST["gt"], ":diachi"=>$_POST["diachi"], ":sdt"=>$_POST["sdt"], ":date"=>$_POST["date"]);
				$memberNew->addMember($arr);
				echo "<script>alert('Đăng ký thành công!');
					window.location='signup-form.php';
				</script>";
			}
	}
	?>
   
    </div>