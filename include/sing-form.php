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
	<link rel="stylesheet" href="../css/style.css">
	
</head>
<style type="text/css">
	.jumbotron.jbstr{
		margin-top: 0px;
		padding: 10px;
		min-height: 200px;
		
	}
	.jumbotron.jbstr p{
		font-size: 17px;
		text-align: justify;
		color:#dedede ;
		clear: both;
		line-height: 24px;
	}
	label a{
		font-size: 20px;
		color: #dedede;
	}
	
	.noidungtrai1{
		top: 30px;
	}
</style>
<body>
	<?php 

			require('../config/connect.php');
			require('header1.php');
			 if(isset($_GET['id'])){
								$a= $_GET['id'];
							}  
				$sql = "SELECT
								casi.idCasi,
								baihat.idBaihat,
								baihat.TenBaihat,
								chitietbaihat.idChitietbaihat,
								chitietbaihat.imageBaihat,
								chitietbaihat.LuotngheBaihat,
								chitietbaihat.LinkBaihat,
								chitietbaihat.idCasi,
								baihat.LoiBathat,
								casi.HotenCasi
								FROM
								casi
								INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
								INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
								WHERE chitietbaihat.idChitietbaihat = $a ";
				
				$database = mysqli_query($connect, $sql);
		 ?>
	
 
		<div class="container container3">
			<div class="row">
				<div class="col-sm-8 col8sing">
						<?php 

								while ($result = mysqli_fetch_assoc($database)) { 
									// echo '<pre>';
									// print_r($result);
										// if($result['idChitietbaihat'] = $result['idCasi'] ){
										?>
										    <label for="" style="color:white; font-size: 18px; color: #dedede">Tên bài hát: <?= $result['TenBaihat'] ?> - <a href="#" style="color: #dedede"><?= $result['HotenCasi'] ?></a></label>
											<audio class="audiosing" src="../<?= $result['LinkBaihat'] ?>" type="audio/mp3" autobuffer autoloop loop controls autoplay></audio>
													<div class="jumbotron jbstr">
														<h4 class="display-3" style="float: left;">Lời bài hát: <?= $result['TenBaihat'] ?></h4>
														<h4 class="display-3" style="float:right;">Lượt nghe: <?= $result['LuotngheBaihat'] ?></h4>
														<p class="lbh"><?= $result['LoiBathat'] ?></p>
												<!-- 		<a href="singer_form.php">Báo lỗi</a>
														<a href="singer_form.php">Góp ý lyrics</a> -->
													
														
														
														
													</div>
										<?php				
								 } 
						 ?>
						
					
				
			</div>
			<div class="col-sm-4 noidungtrai1">
					<a href="#"><img src="../img/quangcao.jpg" alt="Image-quangcao" style="width:250px; height: 300px; margin-left: 100px"></a>
			</div> 
		</div><!-- Hết row -->
	</div> <!-- Hết container3-->

		<script src="../js/jquery.min.js"></script>	
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/bootstrap.js"></script>

</body>
</html>