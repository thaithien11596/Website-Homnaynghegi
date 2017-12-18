<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php 
		require('header1.php');

	 ?>

</head>
<style>
	.col-sm-4.noidungtrai1 {width: 356px;height: 356px;left: 23px;padding: 0;border: 1px solid black;box-shadow: 0 0 5px 2px;top: 15px;}
	.slidemenu a:hover{background-color: orange;text-decoration: none; color: orange}
	span.glyphicon.glyphicon-play.iconplay { position: absolute;z-index: 2;left: 85px;top: 65px;font-size: 15px;padding: 10px;color: #fdfcfc;border: 2px solid white;border-radius: 50%; opacity: 0;transition: 0.4s;transform: scale(0.1);}
	.fade1 {background: #3330309e;width: 180px;height: 180px; position: absolute;z-index: 1;transition: 0.6s;top: 0px;opacity: 0;color: #dad5d5;font-size: 13px;}

	@media(max-width: 768px){.fade1 {background: #3330309e;width: 100%;height: 100%;position: absolute;z-index: 1;transition: 0.6s;top: 0px;opacity: 0;color: #dad5d5;font-size: 13px;}}
	@media(max-width: 1200px){.fade1 {background: #3330309e;width: 145px;height: 146px;position: absolute;z-index: 1;transition: 0.6s;top: 0px;opacity: 0; color: #dad5d5;font-size: 13px;}
	span.glyphicon.glyphicon-play.iconplay {position: absolute;z-index: 2;left: 68px;top: 55px;font-size: 15px; padding: 10px;color: #fdfcfc;border: 2px solid white;border-radius: 50%;opacity: 0;transition: 0.4s;transform: scale(0.1);}
	/*.fade1 {width: 110px;height: 110px;}*/}
	@media(max-width: 992px){.fade1 {
    background: #3330309e;
    width: 108px;
    height: 109px;
    position: absolute;
    z-index: 1;
    transition: 0.6s;
    top: 0px;
    opacity: 0;
    color: #dad5d5;
    font-size: 13px;
}
span.glyphicon.glyphicon-play.iconplay {display: none}}
</style>
<body>
		<div class="container">
					<div class="jumbotron" style="font-size: 18px;padding: 20px">
					
						<div class="row">
							<div class="col-sm-4">Việt Nam: Coming Soon</div>
							<div class="col-sm-4">Âu Mỹ: Coming Soon</div>
							<div class="col-sm-4">Hàn Quốc: Coming Soon</div>
						</div>
						
					</div>
		</div>
		<div class="container container4">
			<div class="noidungbh">
				
<?php
		$music=new Music();
		if(isset($_GET['idQg'])){$idQg = $_GET['idQg'];}
		// $data=$music->demgetsongnew($idQg,$idTl);
		// $demnewVN = count($data);
		$data=$music->menuAlbum($idQg);
		foreach ($data as $result) {
			
		}

?>
						<div class="baihatnb">
					<!-- <p style="color: white"><span class="glyphicon glyphicon-menu-right menuright"></span></p> -->
				</div> <!-- Hết bài hát nổi bật-->
				<!-- <p  class="pbaihat" style="color: white">Tuyển tập các ca khúc mới nhất.</p> -->
					<div class="row row1">
						<div class="row"><div class="col-sm-12"><p style="padding-left: 20px;color: white;font-size: 20px">Tổng hợp Album: </p></div></div>
						<div class="col-sm-12 colbhnoibat" style="min-height: 400px;padding:0px">
								
								<?php 
										
										// if(isset($_GET['trang'])){
										// 	 $i = $_GET['trang'];
										// 	 $sl = ($i - 1)*12;
										// 	$music=new Music();
										// 	$data=$music->getsongnew($sl,$idQg,$idTl);
									
																			
										foreach ($data as $result) {
												
											
											//while ($result){
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-2 col-xs-2 noidungnoibat">
													<a href="albumSing.php?idAlbum=<?= $result['idAlbum'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageAlbum'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1"><span class="glyphicon glyphicon-headphones"> </span> <?= number_format($result['LuotngheAlbum']) ?></div>
															<div class="card-block">
																<h4 class="card-title"><?= $result['TenAlbum'] ?></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											// }

										}		
						
									 ?>		
								



					</div> <!-- Hết col-sm-12 -->
					
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