
     <?php 
       session_start();
        require('header1.php');
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
  <link rel="stylesheet" href="../css/style.css" >

</head>
<style>
  .form-horizontal.signupform {background: linear-gradient(rgb(51, 51, 51), rgb(0, 0, 0));}
</style>
<body>
    <div class="container container3">
         <?php 
         $t=0;
          include("checkAccount.php");
           include ("../config/config.php");
          include (ROOT."/include/function.php");
          spl_autoload_register("loadClass");
          $member =new process_Account();
          $checkMember = $member->member();
          foreach ($checkMember as $result) {
              $sameMember = $result['username'];
             
          }
         
           // if(isset($_GET['kt'])){
           //    if(str_word_count($_POST['username'])>1)
           //    {
           //      echo "bi loi";
           //    }
           //      else      echo "co khoang trang";
           // }
          ?>
          <form class="form-horizontal signupform" method="post" action="signup-form.php?kt=kt">
          <fieldset>

          <!-- Form Name -->
          <legend>Đăng ký</legend>

          <!-- Text input-->
          <div class="form-group">

            <label class="col-md-4 control-label" for="name">Tên đăng nhập.</label>  
            <div class="col-md-4">
            <input id="username" name="username" type="text" placeholder="Điền tên đăng nhập" class="form-control input-md" >      
            </div>
            
                  <?php
               if(isset($_GET['kt'])){
              if(str_word_count($_POST['username'])>1 || checkUserName($_POST["username"])==false)
              {
                $t=1;
                echo ' <div class="col-md-4 error">';
                echo "Tên đăng nhập không được để trống !"."<br>"; 
                echo "Tên đăng nhập không có khoảng trắng, không có ký tự đặc biệt và ít nhất 8 ký tự ! <br>";

                echo '   </div>';
                
                
              }
              
              //  if($_POST['username'] == "")
              // {
              //   $t=1;

                  
              // }
              if($_POST['username'] == $sameMember){

                $t= 1;
                echo 'Tài khoản đã có người dử dụng';
              }
               
           }
           ?>
            </div>
              
       

          <!-- Password input-->
          <div class="form-group">
        
            <label class="col-md-4 control-label" for="password">Mật khẩu.</label>
            <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control input-md" >
              
            </div>
            
             <?php     if(isset($_GET['kt'])){
              if(str_word_count($_POST['password'])>1 || checkPassword($_POST["password"])==false)
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Mật khẩu không có khoảng trắng". "<br>"."Không có ký tự đặc biệt và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường <br>";
                echo '</div>';
              }
               
           } ?>
              
            </div>
          

          <!-- Text input-->
          <div class="form-group">
          
            <label class="col-md-4 control-label" for="repassword">Nhập lai mật khẩu.</label>  
            <div class="col-md-4">
            <input id="repassword" name="repassword" type="password" placeholder="Nhập lại mật khẩu" class="form-control input-md" >
              
            </div>
             
                 <?php if(isset($_GET['kt'])){
              if($_POST['password'] != $_POST['repassword'])
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Mat khau khong khop";
                echo ' </div>';
              }
               
           } ?>
            </div>
         

          <!-- Text input-->
          <div class="form-group">
           
            <label class="col-md-4 control-label" for="email">Họ tên.</label>  
            <div class="col-md-4">
            <input id="hoten" name="hoten" type="text" placeholder="Nhập họ tên" class="form-control input-md" >
              
            </div>
             
                <?php if(isset($_GET['kt'])){
              if(checkPhoneNumber($_POST["hoten"])==true || str_word_count($_POST['hoten']) <= 1)
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Tên không chứa số và ít nhất 2 từ !";
                echo ' </div>';
              }
           } ?>
             </div>
         

            <!-- Text input-->
          <div class="form-group">
              
            <label class="col-md-4 control-label" for="street">Địa chỉ.</label>  
            <div class="col-md-4">
            <input id="diachi" name="diachi" type="text" placeholder="Nhập địa chỉ" class="form-control input-md" >
              
            </div>
            
            <?php if(isset($_GET['kt'])){
              if(checkPhoneNumber($_POST["diachi"])==true)
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Địa chỉ không hoàn toàn số" . "<br>";
                echo '</div>';
              }
             
           } ?>
              
            </div>
       

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="sex">Giới tính</label>
            <div class="col-md-4">
              <input type="radio" name="gt" value="1" checked>Nam
              <input type="radio" name="gt" value="0" >Nữ
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
                
            <label class="col-md-4 control-label" for="street">Số điện thoại.</label>  
            <div class="col-md-4">
            <input id="sdt" name="sdt" type="text" placeholder="Nhập số điện thoại" class="form-control input-md">
         
            </div>
             
                <?php if(isset($_GET['kt'])){
              if(checkPhoneNumber($_POST["sdt"])==false || strlen($_POST['sdt'])<8)
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "So dien thoai khong dung";
                echo '</div>';
              }
           } ?>
            </div>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="date">Ngày sinh.</label>  
            <div class="col-md-4">
            <input id="date" name="date" type="date" placeholder="Nhập địa chỉ" class="form-control input-md">
              
            </div>
          </div>
            <!-- Button -->
            <div class="form-group ">
              <label class="col-sm-4 control-label" for="signup"></label>
              <div class="col-sm-4 " style="padding: 0px">
                <div class="col-sm-6">  <input id="signup" name="signup" type="submit" class="form-control input-md" value="Đăng ký" style="background: linear-gradient(#1dc11d,#009600);color: white"></div>
                <div class="col-sm-6">  <a href="signup-form.php"> <button type="button" class="btn btn-danger" style="float: right;background: linear-gradient(#e04949,#e02020);font-size: 16px">Reset</button></a> 
               </div>
                          
                        
              </div>
            </div>

            </fieldset>
      </form>
      <?php 
       if($t==0 && isset($_GET['kt']))
         { $arr = array(":username"=>$_POST["username"], ":password"=>$_POST["password"], ":hoten"=>$_POST["hoten"], ":diachi"=>$_POST["diachi"], ":gt"=>$_POST["gt"], ":sdt"=>$_POST["sdt"], ":date"=>$_POST["date"]);
          $data=$member->addMember($arr);
        }
        else{session_destroy();}
          ?>
 
<!--        <div class="col-sm-4 noidungtrai1">
          <a href="#"><img src="img/quangcao.jpg" alt="Image-quangcao" style="width: 100%"></a>
        </div> -->
      </div> <!-- Hết container3-->

    <script src="../js/jquery.min.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>


 </body>
 </html>