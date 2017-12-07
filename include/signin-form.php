 <?php 
     session_start();
        require('header1.php');
        require('process_login.php');
     


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
    
      .container.container3 a{
        color: white;
      }
       .container.container3 a:hover{
          text-decoration: none;
      }

  </style>
   
    <div class="container container3">
      <form class="form-horizontal" action="process_login.php" method="post">
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
            <button id="signin" name="signin" class="btn btn-info">Đăng nhập</button>
            <button id="signup" name="signup" class="btn btn-success"><a href="signup-form.php">Đăng ký</a></button>

          </div>

        </div>
        <span><?php   
       
         if(isset($_SESSION["error"]))
                    {
                      echo $_SESSION["error"];

                    }
                     ?> </span>

        </fieldset>
      </form>
    
<!--        <div class="col-sm-4 noidungtrai1">
          <a href="#"><img src="img/quangcao.jpg" alt="Image-quangcao" style="width: 100%"></a>
        </div> -->
      </div> <!-- Hết container3-->

    <script src="../js/jquery.min.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>



 </body>
 </html>