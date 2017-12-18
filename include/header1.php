

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to my webiste</title>
  <link href='https://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="../img/logo.jpg"  />
  <link rel="stylesheet" href="../css/bootstrap-theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css" >
</head>
<?php 
      include ("../config/config.php");

    include (ROOT."/include/function.php");
    spl_autoload_register("loadClass");

      $music=new indexMusic();
  $indexMenuSing=$music->indexMenuSing();
  $data6=$music->indexbxhQg();
  $data7=$music->indexgetCasi();
  $data8=$music->indexgetNhacsi();
  $indexAlbum=$music->indexAlbum(); 
 ?>
<body style=" font-family: 'Crimson+Text';font-size: 16px">
  <canvas id="canvas" style="position: fixed;"></canvas>
    <nav class="navbar navbar-inverse navbar1">
      <div class="container container1">
        <div class="navbar-header header1">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menutop">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="../index.php">Homnaynghegi.tk</a>
        </div>
        <div class="collapse navbar-collapse" id="menutop">
          <ul class="nav navbar-nav menutop1 ">
            <li class="active"><a href="../index.php">Trang chủ</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Bảng xếp hạng<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
                 <?php foreach ($data6 as $result): ?>
                     <li style="text-align: center"><a href="bxh.php?idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
                  <?php endforeach ?>
                </ul>

              </li>
            <form class="navbar-form navbar-left formsearch1" method="get" action="searchSing.php" >
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Nhập nội dung muốn tìm" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search icons"></i>
              </button>
            </div>
          </div>
        </form>
          </ul>
          <ul class="nav navbar-nav navbar-right dangnhap" >
            <?php 
              if(isset($_SESSION['user'])){?>
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?= $_SESSION['user'] ?><b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu">
                  <li><a href="info-user.php">Thông tin</a></li>
                  <li><a href="#">Playlist</a></li>
                  <li><a href="process_signout.php"><span class="glyphicon glyphicon-off" style="color:#bbb2b2"></span> Đăng xuất</a></li>
                </ul>

              </li>
        <?php
              }else {?>
                <li class="li1"><a href="signin-form.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
            <li class="li2"><a href="signup-form.php"><span class="glyphicon glyphicon-log-in"></span> Đăng kí</a></li>
            <?php }
             ?>
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
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
                 <!--  <li><a href="menu_VN.php?trangVN=1">Việt Nam</a></li>
                  <li><a href="menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
                <?php foreach ($indexMenuSing as $result): ?>
                     <li style="text-align: center"><a href="menuSing.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>&&idTl=<?= $result['idTheloai'] ?>"><?= $result['TenTheloai'] ?></a></li>
                  <?php endforeach ?>
                </ul>

              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Album<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999;float: left;">
              <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
                  <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
            <?php foreach ($indexAlbum as $result): ?>
                     <li style="text-align: center"><a href="menuAlbum.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
                  <?php endforeach ?>
                 
                </ul>

              </li>
              <li class="disabled"><a href="#">Video</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ca sĩ<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
                  <?php foreach ($data7 as $result): ?>
                     <li style="text-align: center"><a href="singerForm.php?idQg=<?= $result['idQuocgia'] ?>&&trangsinger=1"><?= $result['TenQuocgia'] ?></a></li>
                  <?php endforeach ?>
                
                </ul>

              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ca khúc mới<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
              <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
                  <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
            <?php foreach ($indexMenuSing as $result): ?>
                     <li style="text-align: center"><a href="menunewSong.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>&&idTl=<?= $result['idTheloai'] ?>"><?= $result['TenTheloai'] ?></a></li>
                  <?php endforeach ?>
                 
                </ul>

              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhạc sĩ<b class="caret"></b></a>
                <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
              <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
                  <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
            <?php foreach ($data8 as $result): ?>
                     <li style="text-align: center"><a href="nhacsiForm.php?trangNhacsi=1&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
                  <?php endforeach ?>
                 
                </ul>

              </li>
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../js/jquery.shorten.1.0.js"></script>
    <script src="../js/snow.js"></script>
  
</body>
</html>