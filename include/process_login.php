<?php if (!isset($_SESSION))
	session_start();
	$error = "";
	if(isset($_POST['signin'])){
		if(empty($_POST['username']) || empty($_POST['password'])){
			$error = "Tài khoản hoặc mật khẫu không đươc để trống";
			// header('Location:signin-form.php');
		}
		else {
		//require('../config/connect.php');
		include ("../config/config.php");

		include (ROOT."/include/function.php");
		spl_autoload_register("loadClass");
		$username = $_POST['username'];
		$password = $_POST['password'];
		$music=new Music();
		$data=$music->processLogin($username,$password);
		
		// echo $result= count($data);
			// print_r($data);
			// echo $username . "<br>";
			// echo $password . "<br>";
			// $sql = "SELECT
			// 			thanhvien.username,
			// 			thanhvien.`password`
			// 			FROM
			// 			thanhvien
			// 			WHERE
			// 			thanhvien.username = '$username' AND
			// 			thanhvien.`password` = '$password' ";
			// 			$database = mysqli_query($connect,$sql);
			// 			$result = mysqli_num_rows($database);
						//print_r($result);
						if(count($data) == 1){
							//session_start();
							$_SESSION['user'] = $username;

							echo $_SESSION['user'];
							echo "<script>alert('Dang nhap thanh cong');
								window.location='../index.php';
							</script>";
							
							//header('Location:../index.php');
						}
						else {

							$error = 'Sai tài khoản hoặc mật khẩu';
							//header('Location:signin-form.php');
						}
						// if($result == 1){
						// 	session_start();
						// 	$_SESSION['username'] = $username;
						// 	header('Location:menu-sing1.php');
						// }
						// else($result == 0){
						// 	echo "Sai tài khoản hoặc mật khẩu";
						// }
			//msqli_close($connect);
			
		}

			$_SESSION['error'] = $error;
			echo "<script>
					window.location='signin-form.php';
				</script>";
}
	
			
 ?>