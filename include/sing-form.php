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
	a:hover.singer {color: white}
	.container.container3 {min-height: 360px;}
	.jumbotron.jbstr{margin-top: 0px;padding: 10px;height: auto;margin-bottom: 5px;width: 765px;background: linear-gradient(#040404,#1b1b1b);}
	
	.jumbotron.jbstr p{font-size: 20px;text-align: justify;color:#dedede ;clear: both;line-height: 24px;}
	label a{font-size: 20px;color: #dedede;}
	.noidungtrai1{top: 30px;}
	.col-sm-3.col-xs-3.noidungnoibat {left: 15px;top: 20px;text-align: center; height: 200px;margin-top: 0px !important}
	/*span.glyphicon.glyphicon-play.iconplay {position: absolute;z-index: 2;left: 61px !important;top: 65px !important;font-size: 15px;padding: 10px;color: #fdfcfc;border: 2px solid white;border-radius: 50%;opacity: 0;transition: 0.6s;}*/
	.card.cardsing { border: 1px solid black;box-shadow: 0 0 3px 1px;}
	@media(max-width: 1200px){.jumbotron.jbstr{width: 635px	}
		a.list-group-item.list-group-item-action.lstbxh {
    height: 55px;
	}}
	@media(max-width: 992px){.jumbotron.jbstr{width: 491px	}.jumbotron.jbstr p {
    font-size: 18px;
}}
	@media(max-width: 768px){   .container.container3 {min-height: 360px;}.col-sm-8.col8sing {height: auto;}.col-sm-4.noidungtrai1 {
display: none}div#amazingaudioplayer-1 {max-width: 498px !important}}


</style>
<body>
	<?php $dem=0; ?>
	<?php 
				// require('../config/connect.php');
			
			
			require('header1.php');
			if(isset($_GET['idBh']) && isset($_GET['idBh'])){
								$idBh = $_GET['idBh'];

								$idQg = $_GET['idQg'];
							} 
			$music=new Music();
			$data=$music->loadSing($idBh);
			$data1=$music->randMusic($idQg);
			$data2=$music->commentSing($idBh);
			foreach ($data as $result) {
				
			}



				// $sql = "SELECT
				// 			casi.HotenCasi,
				// 			baihat.TenBaihat,
				// 			baihat.LoiBaihat,
				// 			chitietbaihat.imageBaihat,
				// 			chitietbaihat.LuotngheBaihat,
				// 			chitietbaihat.idChitietbaihat,
				// 			chitietbaihat.LinkBaihat
				// 			FROM
				// 			baihat
				// 			INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
				// 			INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
				// 			WHERE
				// 			chitietbaihat.idChitietbaihat = $bh";
				
				// $database = mysqli_query($connect, $sql);
				
		 ?>
	
        <div style="margin:12px auto;">
    
  
 
 
</div>
		<div class="container container3">
			<div class="row rowlbh" style="height: auto">
				<div class="col-sm-8 col8sing" style="height: auto">
				
						<?php 

								foreach ($data as $result) {
										$singNumber = $result['LuotngheBaihat'] +1 ;

										$datasingNumber = $music->upsingNumber($singNumber,$idBh);	
										// if($result['idChitietbaihat'] = $result['idCasi'] ){	
											
										?>
											
										    <label for="" style="color:white; font-size: 22px; color: #dedede;margin-top: 20px;">Tên bài hát: <?= $result['TenBaihat'] ?> - <a class="singer" href="detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>" style="text-decoration: none"><?= $result['HotenCasi'] ?></a></label>
										    	<!-- <audio class="audiosing" src="../<?= $result ?>" type="audio/mp3" autobuffer autoloop loop controls autoplay></audio> -->
											<!-- Insert to your webpage where you want to display the audio player -->
                                            <div id="amazingaudioplayer-1" style="margin-right: 15px" >
                                                <ul class="amazingaudioplayer-audios" style="display:none;">
                                                    <li data-artist="<?= $result ?>" data-title="<?= $result['TenBaihat']?>" data-album="" data-info="" data-image="" data-duration="376">
                                                        <div class="amazingaudioplayer-source" data-src="../<?= $result['LinkBaihat'] ?>" data-type="audio/mpeg" />
                                                    </li>
                                                </ul>
                                  				<div><a href="../<?= $result['LinkBaihat'] ?>" onclick="increase_n(1)" download="<?= $result['TenBaihat'] ?>" class="btn btn-danger" style="float:right;background: linear-gradient(#c32a2a,#801414);border-radius: 8px"><span class="glyphicon glyphicon-download-alt"></span> Tải về</a></div>

                                            </div>

                                            <!-- End of body section HTML codes -->
													 
													<div class="jumbotron jbstr" style="border:1px solid gray;box-shadow: 0 0 1px 1px #d2d2d2">
														<h4 class="display-3" style="float: left;">Lời bài hát: <?= $result['TenBaihat'] ?></h4>
														
														<h4 style="float: right">Lượt nghe: <?= number_format($singNumber) ?></h4><br>														
<br>
														<p class="lbh"> <?= nl2br($result['LoiBaihat']) ?></p> <br>
												<!-- 		<a href="singer_form.php">Báo lỗi</a>
														<a href="singer_form.php">Góp ý lyrics</a> -->
														<p >Đóng góp: homnaynghegi</p>
														

													</div>
										<?php	

								 } 
								
						 ?>
						
						  <script>
   	var size_ini = <?= $result['LuottaiBaihat'] ?>;
    function increase_n(size) {
        var size_increase = size_ini++;
         alert(size_increase);
        $(".content").html("<span>" + size_increase + "</span>");
        
    }
    $dem = 






   </script>

<script type="text/javascript">
   $(".lbh").shorten({
    "showChars" : 300,
    "moreText"  : "Xem toàn bộ",
    "lessText"  : "Rút gọn",
});
</script>

			</div> <!-- Hết col8 -->
			<div class="col-sm-4 noidungtrai1" style="left:23px;top: 57px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);margin-top: 0px;border: 1px solid gray">Có thể bạn muốn nghe</h3>
		 		<div class="list-group">
		 			<?php foreach ($data1 as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px;height: 40px; border: 1px solid gray"> <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>
			</div> 
		</div><!-- Hết row -->
	</div> <!-- Hết container3-->
	
	<!-- <div class="container container4" style="padding: 0px; height: 215px">
		<div class="col-sm-8" style="padding: 0px">
			<div class="col-sm-12 col12sing" style="padding:0px;left: 0px">
				<div class="col-sm-3 col-xs-3 noidungnoibat ">
				<a href="#">
					<div class="card cardsing">
						<img class="card-img-top" src="../img/nd20.jpg" alt="Card image cap" style="width: 100%">
						<span class="glyphicon glyphicon-play iconplay" ></span>
						<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
						<div class="card-block">
							<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
						</div>
					</div>
				</a>
			</div>

				<div class="col-sm-3 col-xs-3 noidungnoibat">
				<a href="#">
					<div class="card cardsing">
						<img class="card-img-top" src="../img/nd21.jpg" alt="Card image cap" style="width: 100%">
						<span class="glyphicon glyphicon-play iconplay" ></span>
						<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
						<div class="card-block">
							<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
						</div>
					</div>
				</a>
				</div>

				<div class="col-sm-3 col-xs-3 noidungnoibat">
				<a href="#">
					<div class="card cardsing">
						<img class="card-img-top" src="../img/nd22.jpg" alt="Card image cap" style="width: 100%">
						<span class="glyphicon glyphicon-play iconplay" ></span>
						<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
						<div class="card-block">
							<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
						</div>
					</div>
				</a>
				</div>
					<div class="col-sm-3 col-xs-3 noidungnoibat">
				<a href="#">
					<div class="card cardsing">
						<img class="card-img-top" src="../img/nd23.jpg" alt="Card image cap" style="width: 100%">
						<span class="glyphicon glyphicon-play iconplay" ></span>
						<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
						<div class="card-block">
							<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
						</div>
					</div>
				</a>
				</div>
		</div>
	</div>
	</div> --> <!-- Hết container4-->
	<div class="container">
		<div class="row ">
		<div class="col-sm-8" style="padding-right:0px;top:20px">
			<form action="#" method="post">
				<textarea name="" id="" cols="30" rows="10" style="border:1px solid #FF5722; border-radius:5px; box-shadow: 0 0 3px 1px; width: 100%; height: 80px;background: linear-gradient(#040404,#1b1b1b);color: #dedede;font-size: 18px"></textarea>
				 <button id="comment" name="comment" class="btn btn-success" style="float:right;background-color: #3c3939; border-color: #FF5722">Bình luận</button>
			</form>
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
	
	 <!-- Insert to your webpage before the </head> -->
    <script src="audioplayerengine/jquery.js"></script>
    <script src="audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
    <script src="audioplayerengine/initaudioplayer-1.js"></script>
    <!-- End of head section HTML codes -->

    
</body>
</html>