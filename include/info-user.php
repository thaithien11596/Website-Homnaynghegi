
     <?php 
       session_start();
         $t=0;
          include("checkAccount.php");
        require('header1.php');
          $member =new process_Account();
          $checkMember = $member->findmember($_SESSION['user']);
          // echo '<pre>';
          // print_r($checkMember);
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
    <div class="container container3" style="min-height: 600px;position: relative;">
      <div class="row">
           <form class="form-horizontal signupform" method="post" action="info-user.php?kt=kt">
          <fieldset>

          <!-- Form Name -->
          <legend>Thông tin thành viên</legend>

          <!-- Text input-->
          <div class="form-group">

            <label class="col-md-4 control-label" for="name">Họ tên thành viên: </label>  
            <div class="col-md-6">
            <input id="hoten" name="hoten" type="text" placeholder="Điền tên đăng nhập" class="form-control input-md" value="<?= $checkMember['0']['HotenThanhvien'] ?>">      
            </div>
          </div>
             
              <?php if(isset($_GET['kt'])){
              if(checkPhoneNumber($_POST["hoten"])==true || str_word_count($_POST['hoten'])<= 1)
              {
                $t=1;
                echo '<div class="col-md-2 error">';
                echo "Tên không chứa số và ít nhất 2 từ !";
                echo ' </div>';
              }
           } ?>

          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="sex">Giới tính: </label>
            <div class="col-md-6">
              <?php 
                  if($checkMember['0']['GioitinhThanhvien']){?>
                      <input type="radio" name="gt" value="1" checked>Nam
                  <input type="radio" name="gt" value="0" >Nữ
                 <?php }else{?>
                      <input type="radio" name="gt" value="1" >Nam
                  <input type="radio" name="gt" value="0" checked>Nữ
                <?php }

               ?>
            
            </div>
          </div>

          
          <!-- Text input-->
          <div class="form-group">
                
            <label class="col-md-4 control-label" for="street">Số điện thoại (+84): </label>  
            <div class="col-md-6">
            <input id="sdt" name="sdt" type="text" placeholder="" class="form-control input-md" value="<?= $checkMember['0']['SdtThanhvien'] ?>">
         
            </div>
          
            </div>
             <?php if(isset($_GET['kt'])){
              if(checkPhoneNumber($_POST["sdt"])==false || strlen($_POST['sdt'])<8)
              {
                $t=1;
                echo '<div class="col-md-2 error">';
                echo "So dien thoai khong dung";
                echo '</div>';
              }
           } ?>

            <!-- Text input-->
          <div class="form-group">
              
            <label class="col-md-4 control-label" for="street">Địa chỉ: </label>  
            <div class="col-md-6">
            <input id="diachi" name="diachi" type="text" placeholder="" class="form-control input-md" value="<?= $checkMember['0']['DiachiThanhvien'] ?>" >
              
            </div>
        
              
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
       


          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="date">Ngày sinh: </label>  
            <div class="col-md-6">
            <input id="date" name="date" type="date" placeholder="" class="form-control input-md" value="<?= $checkMember['0']['NgaysinhThanhvien'] ?>">
              
            </div>

          </div>

<!-- 
           <div class="form-group">
                
            <label class="col-md-4 control-label" for="street">Trạng thái: </label>  
            <div class="col-md-6">

            <span disabled="disabled" value="" style="color: #14ff14;background: black;border: 0px" class="form-control input-md"><span class="glyphicon glyphicon-ok" > </span> <?php if($checkMember['0']['TrangthaiHD']){
                echo ' Đang hoạt động';
            }else{echo ' Block';} ?>
              
            </span>
         
            </div>
          
            </div> -->

           <div class="form-group">
            <label class="col-md-4 control-label" for="date">Email: </label>  
            <div class="col-md-6">
            <input id="date" name="email" type="email" placeholder="" class="form-control input-md" value="<?= $checkMember['0']['EmailThanhvien'] ?>">
              
            </div>
          </div>
            <!-- Button -->
            <div class="form-group ">
              <label class="col-sm-4 control-label" for="signup"></label>
              <div class="col-md-6" style="padding: 0px">
                <div class="col-sm-6">  <input id="signup" name="update" type="submit" class="form-control input-md" value="Cập nhật thông tin" style="background: linear-gradient(#1dc11d,#009600);color: white"></div>
              <!--   <div class="col-sm-6">  <a href="signup-form.php"> <button type="button" class="btn btn-danger"  style="float: right;background: linear-gradient(#e04949,#e02020);font-size: 16px">Reset</button></a> 
               </div> -->
                          
                        
              </div>
            </div>

            </fieldset>
      </form>
      </div>
         
      <div class="row" style="color: #cec7c7;border: 1px solid white;box-shadow: 0 0 3px 1px;width: 790px;padding: 0px;">
         <div class="col-sm-3" style="padding: 0px;">
            <a href="repassword.php"><button id="repassword" name="repassword" class="btn btn-info" style="background: linear-gradient(#da3a2e,#9a1b11);font-size: 18px;width: 100%">Đổi mật khẩu ?</button></a>
            

          </div>
            <div class="col-sm-3" style="padding: 0px;">
            <a href="#"><button id="repassword" name="repassword" class="btn btn-info disabled" style="background: linear-gradient(#2539a9,#172367);font-size: 18px;width: 100%">Quản lý Playlist </button></a>
            

          </div>
            <div class="col-sm-3" style="padding: 0px;">
            <a href="repassword.php"><button id="repassword" name="repassword" class="btn btn-info disabled" style="background: linear-gradient(#cc8723,#ca4217);font-size: 18px;width: 100%"> Đã bình luận bài hát </button></a>
            

          </div>
           <div class="col-sm-3" style="padding: 0px;">
            <a href="repassword.php"><button id="repassword" name="repassword" class="btn btn-info disabled" style="background: linear-gradient(#187f8c,#14525a);font-size: 18px;width: 100%"> Đã Upload bài hát </button></a>
            

          </div>

      </div>

      
      
     <?php 
       if($t==0 && isset($_GET['kt'])){
        echo str_word_count($_POST['hoten']);
        // echo 'asfdfafdgfdgdfgd';
       // echo $_POST["hoten"].$_POST["gt"].$_POST["sdt"].$_POST["diachi"].$_POST["date"].$_POST["email"].$_SESSION['user'];
          $member->updateMember($_POST["hoten"],$_POST["gt"],$_POST["sdt"],$_POST["diachi"],$_POST["date"],$_POST["email"],$_SESSION['user']);
          echo "<script>alert('Cập nhật thành công');
                window.location='info-user.php';
              </script>";
        }
          ?>
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