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
	span.glyphicon.glyphicon-play.iconplay {display: none}
	.col-sm-8.colbhnoibat {position: relative;}
	.col-sm-3.col-xs-3.noidungnoibat{ max-width: 195px ; max-height: 198px }
	.col-sm-4.noidungtrai1 img{width: 40px;height: 40px; border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3{padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: #dedede; background: linear-gradient(#383838,#212121);margin-top: 0px;border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3:hover{color: white}
	.list-group-item a {text-decoration: none; color: #cccccc}
	.list-group-item a:hover {text-decoration: none; color: white}
	.list-group-item{background: linear-gradient(#211f1f,#080808);}
	ul.list-group.col4lgt {color: white;font-size: 19px;}
	.divcasi{width:auto;}
	.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 20px;}
	@media(max-width:1200px){
		ul.list-group.col4lgt {color: white;font-size: 16px;}
		.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 18px}	
		.col-sm-4.noidungtrai1 img{width: 30px;height: 30px; border: 1px solid gray}
	}
	@media(max-width: 992px){.col-sm-4.noidungtrai1 img{width: 20px;height: 20px}
	.col-sm-4.noidungtrai1 h3 {font-size: 18px;}
	
	}
	@media(max-width:576px){
		.divluotnghe{display: none}
	}
</style>
<body>

		<div class="container container4" style="min-height: 800px">
			
<?php
		if(isset($_GET['idQg'])){ $idQg = $_GET['idQg'];}
	
		$indexMusic=new indexMusic();
		$indexRandMusic=$indexMusic->indexRandMusic();
		$music=new Music();
		$demgetsinger=$music->demgetsinger($idQg);
		$demsinger = count($demgetsinger);
		foreach ($demgetsinger as $result) {
			
		}


?>
						<div class="noidungbh">
				<div class="baihatnb">
					<p style="color: white">Ca sĩ <?= $result['TenQuocgia'] ?><span class="glyphicon glyphicon-menu-right menuright"></span></p>
				</div> <!-- Hết bài hát nổi bật-->
					<div class="row row1">
						<div class="col-sm-8 colbhnoibat">
								
								<?php 
										
										if(isset($_GET['trangsinger'])){
											 $i = $_GET['trangsinger'];
											 $sl = ($i - 1)*12;
											$music=new Music();
											$getsinger=$music->getsinger($sl,$idQg);
									
																			
										foreach ($getsinger as $result) {
												
											
											//while ($result){
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageCasi'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1"></div>
															<div class="card-block">
																<h4 class="card-title"><?= $result['HotenCasi'] ?></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}
										}		
						
									 ?>		
									 <div class="row col-sm-12 slidemenu" style="left:15px; padding: 0px;top:15px" >
											<p style="float: left;margin-left: 13px;font-size: 16px;color: white">Bạn đang ở trang: <?= $i ?></p>
									 		<p style="float: right; color:white">Trang:
						<?php  for($i=1;$i<=ceil($demsinger/12);$i++) { ?>
						<a href="singerForm.php?idQg=<?= $idQg ?>&&trangsinger=<?= $i ?>" style="color:white;background-color: black;padding: 10px;"><?= $i ?></a>
							
						<?php } ?>
					</p>
									 </div>					
				



					</div> <!-- Hết col-sm-8 -->
			<div class="col-sm-4 noidungtrai1" style="left:23px;top: 19px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<a href="bxhUSUK.php" style="text-decoration: none"><h3>Gợi ý</h3></a>
		 		<div class="list-group">
		 			<?php foreach ($indexRandMusic as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" > <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>
			</div> 
				</div>
			</div> <!-- Hết nội dung  -->
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