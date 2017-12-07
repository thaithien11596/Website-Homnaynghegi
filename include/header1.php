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
    <nav class="navbar navbar-inverse navbar1">
      <div class="container container1">
        <div class="navbar-header header1">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menutop">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="../index.php">HomNgayNgheGi.tk</a>
        </div>
        <div class="collapse navbar-collapse" id="menutop">
          <ul class="nav navbar-nav menutop1 ">
            <li class="active"><a href="../index.php">Trang chủ</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng xếp hạng<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu">
                  <li class="disabled"><a href="bxhVN.php">Việt Nam</a></li>
                  <li class="disabled"><a href="bxhUSUK.php">Âu Mỹ</a></li>
                </ul>

              </li>
            <form class="navbar-form navbar-left formsearch1" method="post" action="search.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search icons"></i>
              </button>
            </div>
          </div>
        </form>
          </ul>
          <ul class="nav navbar-nav navbar-right dangnhap" >
            <li class="li1"><a href="signin-form.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
            <li class="li2"><a href="signup-form.php"><span class="glyphicon glyphicon-log-in"></span> Đăng kí</a></li>
          </ul>
        </div>
      </div><!-- hết container 1 -->
    </nav><!-- hết navbar -->

    <nav class="navbar navbar-inverse navbar2">
        <div class="container container2">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav menutop2">
              <li><a href="../index.php" >Hôm nay nghe gì ?</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bài hát<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu">
                  <li><a href="menu_VN.php">Việt Nam</a></li>
                  <li><a href="menu_USUK.php">Âu Mỹ</a></li>
                  <li class="disabled"><a href="#">EDM</a></li>
                 <!--  <li class="divider"></li> -->
                  <li class="disabled"><a href="#">Remix</a></li>
                 <!--  <li class="divider"></li> -->
                  <li class="disabled"><a href="#">Trữ tình</a></li>
                </ul>

              </li>
              <li class="disabled"><a href="include/album.php">Album</a></li>
              <li class="disabled"><a href="#">Video</a></li>
              <li class="disabled"><a href="#">Ca sĩ</a></li>
              <li class="disabled"><a href="#">Top 100</a></li>
              <li class="disabled"><a href="#">Nghệ sĩ</a></li>
              <li class="upload disabled"><a href="#">
                  <span class="glyphicon glyphicon-cloud-upload iconupload ">Upload</span>
                </a></li>
           </ul>
        
          </div><!-- /.navbar-collapse -->
        </div><!-- Hết container2-->
    </nav> 
    
    

    <script src="../js/jquery.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  
</body>
</html>