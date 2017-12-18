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
	<link rel="stylesheet" href="../css/style.css?v=1.0">
	<link rel="stylesheet" href="../css/style-sing.css">
    
	
</head>
<style type="text/css">
.noidungnoibat .card {box-shadow: 0 0 3px 1px;color: black;font-size: 1px;background: black;border: 1px solid #cccccc;}
	.col-sm-4.noidungtrai1 img{width: 40px;height: 40px; border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3{padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);margin-top: 0px;border: 1px solid gray}
	@media(max-width: 1200px){ .col-sm-4.noidungtrai1 h3{font-size: 18px;}
		.col-sm-4.noidungtrai1 img{width: 30px;height: 30px}
	}
	.jumbotron.jbstr ul li {list-style: none; float:left}
	.container.container3 {min-height: 360px;}
	.jumbotron.jbstr{margin-top: 0px;padding: 10px;height: auto;margin-bottom: 5px;width: 765px;min-height: 350px	}
	.jumbotron.jbstr p{font-size: 17px;text-align: justify;color:#dedede ;clear: both;line-height: 24px;}
	label a{font-size: 20px;color: #dedede;}
	.noidungtrai1{top: 30px;}
	.col-sm-4.noidungtrai1 {width: 354px;height: 358px;left: 23px;padding: 0;top: 52px;border: 1px solid black;box-shadow: 0 0 5px 2px;}
	.col-sm-3.col-xs-3.noidungnoibat {left: 15px;top: 20px;text-align: center; height: 200px;margin-top: 0px !important}
	/*span.glyphicon.glyphicon-play.iconplay {position: absolute;z-index: 2;left: 61px !important;top: 65px !important;font-size: 15px;padding: 10px;color: #fdfcfc;border: 2px solid white;border-radius: 50%;opacity: 0;transition: 0.6s;}*/
	.card.cardsing { border: 1px solid black;box-shadow: 0 0 3px 1px;}
	@media(max-width: 1200px){.jumbotron.jbstr{width: 635px	}.jumbotron.jbstr ul li {margin:25px 10px 25px 10px;}
	@media(max-width: 992px){.jumbotron.jbstr{width: 491px	}.col-sm-4.noidungtrai1 img{width: 20px;height: 20px}}
	@media(max-width: 768px){   .container.container3 {min-height: 360px;}.col-sm-8.col8sing {height: auto;}div#amazingaudioplayer-1 {max-width: 498px !important}}


</style>
<body>
	<?php 
		include('header1.php');
		
			if(isset($_GET['idNhacsi']) && isset($_GET['idQg'])){
								$idNhacsi = $_GET['idNhacsi'];
								$idQg = $_GET['idQg'];

							}  
			$music=new Music();
			$data1=$music->randMusic($idQg);
			$detailNhacsi = $music->detailNhacsi($idNhacsi);
			$detailsingNhacsi = $music->detailsingNhacsi($idNhacsi);
			$randNhacsi = $music->randNhacsi($idQg);
			// require('../config/connect.php');
			// require('header1.php');
			// if(isset($_GET['idsinger'])){
			// 					$sg = $_GET['idsinger'];

			// 				}  
			// 	$sql = "SELECT
			// 				casi.HotenCasi,
			// 				baihat.TenBaihat,
			// 				baihat.LoiBaihat,
			// 				chitietbaihat.imageBaihat,
			// 				chitietbaihat.LuotngheBaihat,
			// 				chitietbaihat.idChitietbaihat,
			// 				chitietbaihat.LinkBaihat,
			// 				casi.TieusuCasi
			// 				FROM
			// 				baihat
			// 				INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
			// 				INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
			// 				WHERE
			// 				chitietbaihat.idCasi = $sg";
				
			// 	$database = mysqli_query($connect, $sql);
				
		 ?>
	
        <div style="margin:12px auto;">
    
    
</div>
		<div class="container container3">
			<div class="row rowlbh" style="height: auto">
				<div class="col-sm-8 col8sing" style="height: auto">
						<?php 

								foreach ($detailNhacsi as $result) {
								 		// echo '<pre>';
									// print_r($result);
										// if($result['idChitietbaihat'] = $result['idCasi'] ){
										?>
										    <label for="" style="color:white; font-size: 20px; color: #dedede;margin-top: 20px;">Tên nhạc sĩ: <?= $result['HotenNhacsi'] ?><a href="#" style="color: #dedede"></a></label>
										    	
											<!-- Insert to your webpage where you want to display the audio player -->
                                           <!--  <div id="amazingaudioplayer-1" style="display:block;position:relative;width:100%;max-width:770px;height:auto; right: 3px; ">
                                                <ul class="amazingaudioplayer-audios" style="display:none;">
                                                    <li data-artist="<?= $result ?>" data-title="<?= $result?>" data-album="1 Phút (Single)" data-info="" data-image="" data-duration="376">
                                                        <div class="amazingaudioplayer-source" data-src="../<?= $result ?>" data-type="audio/mpeg" />
                                                    </li>
                                                </ul>
                                  
                                            </div> -->
                                            <!-- End of body section HTML codes -->
								
													<div class="jumbotron jbstr">
														<ul>
															<li><img src="../img/<?= $result['imageNhacsi'] ?>" alt="" style= "width:125px;height:125px;border: 1px solid gray;box-shadow: 0 0 1px 1px gray"></li>
															<li style="margin:20px 10px 20px 10px"><p >Ngày sinh: <?= $result['NgaysinhNhacsi'] ?></p></li>
															<li style="margin:20px 10px 20px 10px"><p >Quê quán: <?= $result['QuequanNhacsi'] ?></p></li>
														</ul>
														
														
														
														<h4 class="display-3" style="float: left;color:#dedede;line-height: 1.5;text-align: justify; ">Tiểu sử: <?= $result['TieusuNhacsi'] ?></h4>
														
														
												<!-- 		<a href="singer_form.php">Báo lỗi</a>
														<a href="singer_form.php">Góp ý lyrics</a> -->
														<p >Đóng góp: homnaynghegi</p>
													</div>
								<?php										
								 } 			
						 ?>
						
					
			<div class="row" style="min-height: 250px">
				<div class="col-sm-12 colsing" style="right: 15px">
					<p style="margin-left: 15px;margin-top: 10px;margin-bottom: 0px;color: white;font-size: 22px">Nhạc sĩ cùng quốc gia:</p>
					<?php foreach ($randNhacsi as $result): ?>
						<div class="col-sm-3 col-xs-3 noidungnoibat" style="height: auto">
													<a href="detail_Nhacsi.php?idNhacsi=<?= $result['idNhacsi'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageNhacsi'] ?>" alt="Card image cap" style="width: 100%">		
															<div class="fade1"></div>
															<div class="card-block">
																<h4 class="card-title" style="color: white;margin-top: 3px;margin-bottom: 3px"><?= $result['HotenNhacsi'] ?></h4>
															</div>
														</div>
													</a>
													</div>
					<?php endforeach ?>
					
					
				</div> <!-- Hết col12 -->
			</div>
			</div> <!-- Hết col8 -->
			<div class="col-sm-4 noidungtrai1" style="left:23px;top: 52px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<h3 >Bài hát nhạc sĩ sáng tác</h3>
		 		<div class="list-group">
		 			<?php foreach ($detailsingNhacsi as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" > <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>

			  	<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);margin-top: 0px">Có thể bạn muốn nghe</h3>
		 		<div class="list-group">
		 			<?php foreach ($data1 as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="border: 1px solid gray"> <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>

			</div> 
			

		 	
			<!-- <div class="col-sm-4 noidungtrai1" style="left:23px;top: 57px">
					<a href="#"><img src="../img/quangcao.jpg" alt="Image-quangcao" style="width:100%; height: 100%"></a>
			</div>  -->
		</div><!-- Hết row -->
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
						      <p style="font-size: 18px"><span class="	glyphicon glyphicon-earphone"></span> 0906929906</p>
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