
     <?php 
       session_start();
         $t=0;
          include("checkAccount.php");
        require('header1.php');
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
    <div class="container container3" style="min-height: 800px">
          <form class="form-horizontal signupform" method="post" action="repassword.php?kt=kt">
          <fieldset>

          <!-- Form Name -->
          <legend>Đổi mật khẩu</legend>

          <!-- Text input-->
          <div class="form-group">

            <label class="col-md-4 control-label" for="name">Mật khẩu cũ.</label>  
            <div class="col-md-4">

            <input id="prepassword" name="prepassword" type="password" placeholder="Mật khẩu cũ" class="form-control input-md" value="">      
            </div>
            <?php 
                $music=new process_Account();
                  $findmember=$music->findmember($_SESSION['user']);
                  
                if(isset($_POST['update']))
                {
                  if(md5($_POST['prepassword'])!=$findmember[0]['password'])
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Mật khẩu cũ không đúng". "<br>";
                echo '</div>';
                
              } }?>
          </div>
           
          <!-- Password input-->
          <div class="form-group">
        
            <label class="col-md-4 control-label" for="password">Mật khẩu mới.</label>
            <div class="col-md-4">
              <input id="newpassword" name="newpassword" type="password" placeholder="Nhập mật khẩu" class="form-control input-md" >
              
            </div>
            
             <?php     if(isset($_GET['kt'])){

             
              if(str_word_count($_POST['newpassword'])>1 || checkPassword($_POST["newpassword"])==false)
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
          
            <label class="col-md-4 control-label" for="renewpassword">Nhập lai mật khẩu.</label>  
            <div class="col-md-4">
            <input id="renewpassword" name="renewpassword" type="password" placeholder="Nhập lại mật khẩu" class="form-control input-md" >      
            </div>
             
                 <?php if(isset($_GET['kt'])){
              if($_POST['newpassword'] != $_POST['renewpassword'])
              {
                $t=1;
                echo '<div class="col-md-4 error">';
                echo "Mat khau khong khop";
                echo ' </div>';
              }else if($t==0)
              {
                  $music=new Music();
                  $uppass=$music->uppass(md5($_POST['newpassword']),$_SESSION['user']);
                  unset($_SESSION['user']);
                   echo "<script> alert('Đổi mật khẩu thành công');
                    window.location='signin-form.php';
                  </script>";

              }
               
           } ?>
            </div>

            <!-- Button -->
            <div class="form-group ">
              <label class="col-sm-4 control-label" for="signup"></label>
              <div class="col-md-6" style="padding: 0px">
                <div class="col-sm-6">  <input id="signup" name="update" type="submit" class="form-control input-md" value="Đổi mật khẩu" style="background: linear-gradient(#e44f20,#a03a1a);color: white"></div>
              <!--   <div class="col-sm-6">  <a href="signup-form.php"> <button type="button" class="btn btn-danger"  style="float: right;background: linear-gradient(#e04949,#e02020);font-size: 16px">Reset</button></a> 
               </div> -->
                          
                        
              </div>
            </div>

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