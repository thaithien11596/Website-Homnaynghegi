 <?php 

     	session_start();
        include("checkAccount.php");
          include ("header1.php");


	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to my webiste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css?v=1.0" >
    
 </head>
 <body>

  <style>
    
      .container.container3 a{color: white;}
      .container.container3 a:hover{text-decoration: none;}
      .form-horizontal.signinform {background: linear-gradient(rgb(51, 51, 51), rgb(0, 0, 0));}

  </style>
   
    <div class="container container3" style="min-height: 600px">
      <form class="form-horizontal signinform" action="fixPassword.php" method="post">
        <fieldset>
        <legend>Nhập thông tin</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" >Tên đăng nhập.</label>  
          <div class="col-md-4">
          <input id="name" name="username" type="text" placeholder="Vui lòng nhập tên đăng nhập" class="form-control input-md" >
            
          </div>
        
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" >Email.</label>
          <div class="col-md-4">
            <input id="email" name="email" type="email" placeholder="Nhập Email" class="form-control input-md" >
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button id="fixpass" name="fixpass" type="submit" value="fixpass" class="btn btn-info" style="background: linear-gradient(#2092a0,#10616b);width: 100%">Gửi yêu cầu</button>
          </div>

        </div>
      	<?php 

          // $member =new process_Account();
          // $checkMember = $member->member();	
          if(isset($_POST['fixpass']) && $_POST['fixpass'] = 'fixpass')	{

		$username = $_POST['username'];
		$email = $_POST['email'];
		$music=new Music();
		$data=$music->processfixPassword($username,$email);     
          	      if(count($data) == 1){
          	include ROOT."/lib/PHPMailer/PHPMailerAutoload.php";
		
		$mail = new PHPMailer();
		$mail->IsSMTP(); // set mailer to use SMTP
		$mail->Host = "smtp.gmail.com"; // specify main and backup server
		$mail->Port = 465; // set the port to use
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->SMTPSecure = 'ssl';
		$mail->Username = "homaynghegi@gmail.com"; //Địa chỉ gmail sử dụng để gửi email
		$mail->Password = "a0906929906"; // your SMTP password or your gmail password
		$from = "homaynghegi@gmail.com"; // Khi người sử dụng bấm reply sẽ gửi đến email này
		$to=$_POST['email']; // Email người nhận (email thực)
		$name="Hi, ".$_POST['username']; // Tên người nhận
		$mail->From = $from;
		$mail->FromName = "Homnaynghegi.tk"; // Tên người gửi 
		$mail->AddAddress($to,$name);
		$mail->AddReplyTo($from,"Cham soc khach hang");
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Mat khau moi!";
		$mail->Body = "Mật khẩu mới: user123456";
		$mail->SMTPDebug = 2;//Hiện debug lỗi. Mặc định sẽ tắt lỗi này
		if(!$mail->Send())
		{
			echo "<h3>Err: " . $mail->ErrorInfo . '</h3>';
		}
		else
		{
			echo "<h3>Send mail thành công</h3>";
			echo "<script>
								window.location='signin-form.php';
							</script>";
							$_SESSION['error'] = 'Đổi mật khẩu thành công. Vui lòng kiểm tra Email';
							$music=new Music();
							$music->updatepassUser(md5('user123456'),$_POST['username']);     

		}

						}
						else {

							$error = 'Sai tài khoản hoặc mật khẩu';

						}
         }
    
      	 ?>
    
        </fieldset>
      </form>
      
    
  
<!--        <div class="col-sm-4 noidungtrai1">
          <a href="#"><img src="img/quangcao.jpg" alt="Image-quangcao" style="width: 100%"></a>
        </div> -->
      </div> <!-- Hết container3-->
       <div class="jumbotron jbt">
        <div class="container container5">
          <h3>Thông tin</h3>
          <hr class="m-y-md">
          <div class="row">
            <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo" style="background: linear-gradient(#981414,#6f1616);">Giới thiệu</button>
            
              <div id="demo" class="collapse" style="text-align: justify;">
                  <p style="font-size: 18px;">Website nghe nhạc trực tuyến homnaynghegi.tk nhằm mục đích mang âm nhạc đến với gần với tất cả mọi người hay những người yêu nhạc thông qua mạng Internet.</p>
              </div>
              <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo4" style="background: linear-gradient(#981414,#6f1616);">FAQs</button>
            
              <div id="demo4" class="collapse" style="text-align: justify;">
                  <p style="font-size: 18px;">Coming Soon</p>
              </div>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" style="background: linear-gradient(#981414,#6f1616);">Hỗ trợ</button>
            
              <div id="demo1" class="collapse colp" style="margin-top: 5px;text-align: justify;">
                <p style="font-size: 18px"><span class="glyphicon glyphicon-map-marker"></span> Việt Nam, HCM City</p>
                  <p style="font-size: 18px"><span class="  glyphicon glyphicon-earphone"></span> 0906929906</p>
                  <p style="font-size: 18px"><span class="glyphicon glyphicon-envelope"></span> thaithien11596@gmail.com</p>
              </div>
                <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2" style="background: linear-gradient(#981414,#6f1616);">Góp ý</button>
            
              <div id="demo2" class="collapse colp" style="margin-top: 5px">
                <p style="font-size: 18px;"><span class="glyphicon glyphicon-map-marker"></span> Mọi ý kiến đóng góp website vui lòng Email về thaithien11596@gmail.com hoặc SĐT: 0906929906</p>
                
              </div>

          </div>
          
          

          </div>
          
            
        </div><!-- Hết container5-->
         <div class="footer">
        <div class="container container6">
          <p>Copyright &copy;2017 by Homnaynghegi.tk</p>
          <p class="pleft">Designed by BanhMi3T</p>
        </div>
      </div><!-- Hết Footer -->
  </div> <!-- Hết jumbotron-->
    <script src="../js/jquery.min.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>



 </body>
 </html>