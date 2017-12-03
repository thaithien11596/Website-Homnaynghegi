
     <?php 
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
  <link rel="stylesheet" href="../css/style.css?v=1.0" >

</head>
<body>
    <div class="container container3">
      
          <form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->
      <legend>Đăng ký</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="name">Tên đăng nhập.</label>  
        <div class="col-md-4">
        <input id="name" name="name" type="text" placeholder="Điền tên đăng nhập" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email.</label>  
        <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="Nhập Email" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="password">Mật khẩu.</label>
        <div class="col-md-4">
          <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Text input-->
     <!--  <div class="form-group">
        <label class="col-md-4 control-label" for="repassword">Nhập lai mật khẩu.</label>  
        <div class="col-md-4">
        <input id="repassword" name="repassword" type="password" placeholder="Nhập lại mật khẩu" class="form-control input-md" required="">
          
        </div>
      </div> -->

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
        <label class="col-md-4 control-label" for="street">Địa chỉ.</label>  
        <div class="col-md-4">
        <input id="street" name="street" type="text" placeholder="Nhập địa chỉ" class="form-control input-md" required="">
          
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="street">Số điện thoại.</label>  
        <div class="col-md-4">
        <input id="street" name="street" type="text" placeholder="Nhập số điện thoại" class="form-control input-md" required="">
          
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="street">Ngày sinh.</label>  
        <div class="col-md-4">
        <input id="street" name="street" type="date" placeholder="Nhập địa chỉ" class="form-control input-md" required="">
          
        </div>
      </div>


     

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="signup"></label>
        <div class="col-md-4">
          <button id="signup" name="signup" class="btn btn-success">Đăng kí</button>
        </div>
      </div>

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