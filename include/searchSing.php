<?php 
session_start();
		

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
	.list-group-item a {text-decoration: none; color: #cccccc}
	.list-group-item a:hover {text-decoration: none; color: white}
	.list-group-item{background: linear-gradient(#211f1f,#080808);}
	.divcasi{width:auto;}
	.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 20px;}
</style>
<body>
	<?php 
		include('header1.php'); 
	?>
	<div class="container" style="min-height: 600px">
	 	 <div class="row">
		 	<div class="col-sm-8">
		 		<?php 
		 			
		 		 ?>
		 		
					  <?php 
					  	
						if(isset($_GET['search' ]) && $_GET['search' ] != "" ){
							$data = new Music();
							$idSearch = $_GET['search'];
							$search = $data->searchSing($idSearch);
							$number = count($search);
							$i = 1;?>
								<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);border: 1px solid gray;box-shadow: 0 0 1px 1px;"><?= "'$idSearch'" ?> có <?= $number ?> quả tìm kiếm:</h3>
				  <ul class="list-group">
					 <li class="list-group-item" style="background: white;font-size: 20px;border-radius: 5px"><span class="glyphicon glyphicon-info-sign" style="font-size: 26px"></span> Vui lòng nhập đúng tên bài hát để hiển thị kết quả tốt nhất. Trong trường hợp nhập đúng tên bài hát mà không hiển thị nghĩa là chưa có bài hát đó trong website.<br>Yêu cầu bài hát về Email: thaithien11596@gmail.com hoặc SĐT: 0906929906 !</li><br>
					 		 <?php foreach ($search as $result): ?>
						
					  	 <li class="list-group-item"><span style="color:white;font-size: 20px;font-weight: bold"><div style="width: 35px;height: 38px;float: left;"><?= $i; $i =$i +1; ?>- </div></span><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=1"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width:50px; height: 50px;border:1px solid black; box-shadow: 0 0 3px 1px #afacac;float: left"></a><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=1" class="singbxh"><?= $result['TenBaihat'] ?></a><div class="divluotnghe" style="color: #cccccc;font-size: 15px;float: right">Lượt nghe: <?= number_format($result['LuotngheBaihat']) ?></div><div class="divcasi" ><a href="detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>" style="margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 15px;"><?= $result['HotenCasi'] ?></a></div>
					 	 </li>
					  <?php endforeach ?>
						<?php
					}else{
						$idSearch = "";
		 				$number = 0;
						echo '<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);border: 1px solid gray;box-shadow: 0 0 1px 1px;">Không có kết quả tìm kiếm:</h3><br>';
						echo '<li class="list-group-item text-center" style="background: white;font-size: 20px;border-radius: 5px"><span class="glyphicon glyphicon-warning-sign" style="font-size: 26px"></span> Vui lòng nhập nội dung muốn tìm</li>';
					}
					
					?>
					  
					   
					
					</ul>
		 	</div>
		 </div>
		</div>
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
</body>
</html>