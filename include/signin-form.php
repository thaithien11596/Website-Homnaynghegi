 <?php 
     session_start();


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
  <?php 
           require('header1.php');
        require('process_login.php');
     

   ?>
  <style>
    
      .container.container3 a{color: white;}
      .container.container3 a:hover{text-decoration: none;}
      .form-horizontal.signinform {background: linear-gradient(rgb(51, 51, 51), rgb(0, 0, 0));}

  </style>
   
    <div class="container container3" style="min-height: 600px">
      <div class="row">
        <div class="col-sm-8">
             <form class="form-horizontal signinform" action="process_login.php" method="post">
        <fieldset>
        <legend>Đăng nhập</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" >Tên đăng nhập.</label>  
          <div class="col-md-4">
          <input id="name" name="username" type="text" placeholder="Vui lòng nhập tên đăng nhập" class="form-control input-md" >
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" >Mật khẩu.</label>
          <div class="col-md-4">
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control input-md" >
            
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button id="signin" name="signin" class="btn btn-info" style="background: linear-gradient(#2092a0,#10616b);">Đăng nhập</button>
            <button id="signup" name="signup" class="btn btn-success" style="float:right;background: linear-gradient(#1dc11d,#009600);"><a href="signup-form.php">Đăng ký</a></button>


          </div>

        </div>
        
       <?php   
       
         if(isset($_SESSION["error"]))
                    {
                      echo ' <span style="padding: 5px; border-radius: 5px; background-color: #ca1212;text-align: center; font-size: 16px; display: block; color: white">';
                      echo $_SESSION["error"];
                      echo '</span>';
                      session_destroy();

                    }
                     ?> 

        </fieldset>

      </form>
        <div class="col-sm-4" style="color: #cec7c7;border: 1px solid white;box-shadow: 0 0 3px 1px;width: 790px;padding: 0px">
            <a href="fixPassword.php"><button id="signin" name="signin" class="btn btn-info" style="background: linear-gradient(#cc8723,#ca4217);width: 100%;font-size: 18px">Quên mật khẩu ?</button></a>
            

          </div>
      
        </div>
      </div>
     
        
        

  
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