<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to my webiste</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" >
	
</head>

<body>
		<?php 
			session_start();
			if(isset($_SESSION['user'])){
				
			}
			include ("config/config.php");

			include (ROOT."/include/function.php");
			spl_autoload_register("loadClass");

			$music=new Music();
			$data=$music->indexVNMusic();
			$data1=$music->indexbxhVN();
			$data2=$music->indexRandMusic();
			$data3=$music->indexbshUSUK();
			//require('config/connect.php');
			// require('classes/process_bxhal.php');
				// $sql = "SELECT
				// 		baihat.idBaihat,
				// 		chitietbaihat.idChitietbaihat,
				// 		chitietbaihat.imageBaihat,
				// 		chitietbaihat.LuotngheBaihat,
				// 		casi.idCasi,
				// 		casi.HotenCasi,
				// 		chitietbaihat.LinkBaihat,
				// 		baihat.TenBaihat,
				// 		quocgia.idQuocgia,
				// 		quocgia.TenQuocgia
				// 		FROM
				// 		baihat
				// 		INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
				// 		INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
				// 		INNER JOIN quocgia ON baihat.idQuocgia = quocgia.idQuocgia AND casi.idQuocgia = quocgia.idQuocgia
				// 		ORDER BY
				// 		chitietbaihat.LuotngheBaihat DESC 
				// 		LIMIT 8";


					// $sql1 = "SELECT
					// 		baihat.TenBaihat,
					// 		baihat.idBaihat,
					// 		chitietbaihat.idChitietbaihat,
					// 		chitietbaihat.imageBaihat,
					// 		chitietbaihat.LuottaiBaihat
					// 		FROM
					// 		baihat
					// 		INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					// 		WHERE
					// 		baihat.idQuocgia = 1
					// 		ORDER BY
					// 		chitietbaihat.LuottaiBaihat DESC
					// 		LIMIT 7
					// 		";
					// $sql2 = "SELECT
					// 		baihat.idBaihat,
					// 		baihat.TenBaihat,
					// 		chitietbaihat.idChitietbaihat,
					// 		casi.idCasi,
					// 		casi.HotenCasi,
					// 		chitietbaihat.imageBaihat,
					// 		chitietbaihat.NgaydangBaihat,
					// 		chitietbaihat.LuotngheBaihat,
					// 		chitietbaihat.LuottaiBaihat
					// 		FROM
					// 		casi
					// 		INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
					// 		INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
					// 		ORDER BY RAND()
					// 		LIMIT 8";
				// 	$sql3 = "SELECT
				// 			baihat.idBaihat,
				// 			baihat.TenBaihat,
				// 			chitietbaihat.imageBaihat,
				// 			chitietbaihat.LuottaiBaihat,
				// 			casi.HotenCasi,
				// 			casi.idCasi,
				// 			quocgia.idQuocgia,
				// 			quocgia.TenQuocgia,
				// 			chitietbaihat.idChitietbaihat
				// 			FROM
				// 			chitietbaihat
				// 			INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
				// 			INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
				// 			INNER JOIN quocgia ON baihat.idQuocgia = quocgia.idQuocgia AND casi.idQuocgia = quocgia.idQuocgia
				// 			WHERE
				// 			quocgia.idQuocgia = 2
				// 			LIMIT 7";
				// $database3 = mysqli_query($connect,$sql3);	
				// //$database = mysqli_query($connect, $sql);
				// $database1 = mysqli_query($connect, $sql1);
				// $database2 = mysqli_query($connect, $sql2);
				
				

		 ?>
		<nav class="navbar navbar-inverse navbar1">
		  <div class="container container1">
		    <div class="navbar-header header1">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menutop">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="index.php">HomNgayNgheGi.tk</a>
		    </div>
		    <div class="collapse navbar-collapse" id="menutop">
		      <ul class="nav navbar-nav menutop1 ">
		        <li class="active"><a href="index.php">Trang chủ</a></li>
		        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng xếp hạng<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu">
			            <li class="disabled"><a href="include/bxhVN.php">Việt Nam</a></li>
			            <li class="disabled"><a href="include/bxhUSUK.php">Âu Mỹ</a></li>
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
		      	<?php 
		      		if(isset($_SESSION['user'])){?>
						 <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?= $_SESSION['user'] ?><b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu">
			            <li><a href="#">Thông tin</a></li>
			            <li><a href="#">Playlist</a></li>
			            <li><a href="include/process_signout.php"><span class="glyphicon glyphicon-off" style="color:#bbb2b2"></span> Đăng xuất</a></li>
			          </ul>

		        	</li>
				<?php
		      		}else {?>
		      			<li class="li1"><a href="include/signin-form.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
		        <li class="li2"><a href="include/signup-form.php"><span class="glyphicon glyphicon-log-in"></span> Đăng kí</a></li>
		      	<?php	}
		      	 ?>
		        
		      </ul>
		    </div>
		  </div><!-- hết container 1 -->
	 	</nav><!-- hết navbar -->

		<nav class="navbar navbar-inverse navbar2">
		    <div class="container container2">
			    <div class="collapse navbar-collapse">
			      <ul class="nav navbar-nav menutop2">
			        <li><a href="#id4" >Hôm nay nghe gì ?</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bài hát<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu">
			            <li><a href="include/menu_VN.php">Việt Nam</a></li>
			            <li><a href="include/menu_USUK.php">Âu Mỹ</a></li>
			            <li class="disabled"><a href="#">EDM</a></li>
			           <!--  <li class="divider"></li> -->
			            <li class="disabled"><a href="#">Remix</a></li>
			           <!--  <li class="divider"></li> -->
			            <li class="disabled"><a href="#">Trữ Tình</a></li>
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
		
		<div class="container container3">
			<div class="row">
				<div class="col-sm-8">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- 	<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1"></li>
											<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										</ol> -->
										<div class="carousel-inner slideanh" role="listbox">
											<div class="item active">
												<a href="#"><img class="d-block w-100" src="img/slide4.jpg" alt="First slide"></a>
											</div>
											<div class="item">
												<a href="#"><img class="d-block w-100" src="img/slide2.jpg" alt="First slide"></a>
											</div>
											<div class="item">
												<a href="#"><img class="d-block w-100" src="img/slide3.jpg" alt="Second slide"></a>
											</div>
											<div class="item">
												<a href="#"><img class="d-block w-100" src="img/slide1.jpg" alt="Third slide"></a>
											</div>
										</div>
										<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											<span class="icon-prev" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											<span class="icon-next" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>	
				</div> <!-- Hết col -->
				<div class="col-sm-4 noidungtrai1">
					<a href="#"><img src="img/quangcao.jpg" alt="Image-quangcao" style="width: 100%"></a>
				</div>
			</div> <!-- Hết row -->
		</div> <!-- Hết container3-->

		<div class="container container4">
			<div class="noidungbh">
				<div class="baihatnb">
					<a href="include/menu_VN.php" id="#1">Nhạc Việt nghe nhiều trong tuần<span class="glyphicon glyphicon-menu-right menuright"></span></a>
				</div> <!-- Hết bài hát nổi bật-->
				<p style="color: black" class="pbaihat">Tuyển tập các ca khúc Việt được yêu thích nhất.</p>
					<div class="row row1">

						<div class="col-sm-8 colbhnoibat">
								
								<?php 
											
											foreach ($data as $result) {
											//while ($result = mysqli_fetch_assoc($database)){
											// echo '<pre>';
											// print_r($result);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="include/sing-form.php?idbh=<?= $result['idChitietbaihat'] ?>">
														<div class="card">
															<img class="card-img-top" src="img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
															<div class="card-block">
																<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}
											
									 ?>							
								
						
					</div> <!-- Hết col-sm-8 -->
						<div class="col-sm-4  noidungtrai2">
							<p>Bảng xếp hạng nhạc Việt</p>
														
								<div class="list-group lstbxh">
									<?php 
										foreach ($data1 as $result) {

										//while ($result1 = mysqli_fetch_assoc($database1)) { ?>
										    <a href="include/sing-form.php?idbh=<?= $result['idChitietbaihat'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
									<?php
										}

									 ?>
								

								</div>
									
						
					</div>
			</div>	<!-- Hêt row1 -->
		
			
			<div class="baihatnb">
					<a href="/menu_ngaunhien.php" id= "id4">Hôm nay nghe gì?<span class="glyphicon glyphicon-menu-right menuright"></span></a>
				</div>
				<p style="color: black" class="pbaihat">Tuyển tập các ca khúc ngẫu nhiên hay nhất.</p>
				<div class="row row2">
					<div class="col-sm-8 colbhnghenhieu">
						<?php 
							foreach ($data2 as $result) {
							//while ($result2 = mysqli_fetch_assoc($database2)) {?>
							    <div class="col-sm-3 col-xs-3 noidungnoibat">
								<a href="include/sing-form.php?idbh=<?= $result['idChitietbaihat'] ?>">
									<div class="card">
										<img class="card-img-top" src="img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
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

						 ?>
							
						
					</div> <!-- Hết col-sm-8 nghenhieutrongtuan-->
					<div class="col-sm-4  noidungtrai3">
						<p>Bảng xếp hạng nhạc Âu Mỹ</p>
						<?php 
						foreach ($data3 as $result) {
							//while ($result3 = mysqli_fetch_assoc($database3)) { ?>
							     <div class="list-group lstbxhal">
					    <a href="include/sing-form.php?idbh=<?= $result['idChitietbaihat'] ?>" class="list-group-item list-group-item-action lstbxhal"><img src="img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
						</div>
						<?php
							}

						 ?>
						
					</div>
			</div>	<!-- Hêt row2 -->
			
			<div class="row row3">
				<div class="col-sm-8">
					<div class="nhacvietmoi">
						<a href="#">Nhạc Việt mới<span class="glyphicon glyphicon-menu-right menuright"></span>

						</a>
						</div> <!-- Hết bài hát nổi bật-->
						<p style="color: black" class="pbaihat">Tuyển tập các ca khúc mới nhất.</p>
						<div class="col-sm-6 col-xs-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Thương</a></li>
									<li class="casi"><a href="#">Quốc Thiên</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col-xs-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm1.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Mặt trời của em</a></li>
									<li class="casi"><a href="#">Phương Ly, Justa Tee</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm2.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Ta chia tay nhau thật rồi</a></li>
									<li class="casi"><a href="#">Anh Khang</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm.png" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Có một ngày như thế</a></li>
									<li class="casi"><a href="#">Thế Bảo</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm3.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Tình yêu là đấy</a></li>
									<li class="casi"><a href="#">Hồ Trung Dũng</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm4.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Đoạn cuối tình yêu</a></li>
									<li class="casi"><a href="#">Dương Triệu Vũ</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm5.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Sống xa anh chẳng dễ dàng</a></li>
									<li class="casi"><a href="#">Bảo Anh</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm6.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Anh thế giới và em</a></li>
									<li class="casi"><a href="#">Hương Tràm</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm7.png" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Chờ một ngày nắng</a></li>
									<li class="casi"><a href="#">Lynk Lee</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm8.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Ta còn yêu nhau</a></li>
									<li class="casi"><a href="#">Đức Phúc</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-sm-6 col6nhacvietmoileft">
							<div class="col-sm-3 col3nhacvietmoiright">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm9.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul class="casi">
									<li><a href="#">Em gái mưa</a></li>
									<li class="casi"><a href="#">Hương Tràm</a></li>
								</ul>
								
							</div>
								
						</div>
						<div class="col-sm-6 col6nhacvietmoiright">
							<div class="col-sm-3 col3nhacvietmoileft">
								<a href="#">
									<img class="card-img-top" src="img/nvm/nvm10.jpg" alt="Card image cap" style="width: 100%">
								</a>
								
							</div>
							<div class="col-sm-9 col9nhacvietmoi">
								<ul>
									<li><a href="#">Túy Âm</a></li>
									<li class="casi"><a href="#">Xesi, Masew, Nhật Nguyễn</a></li>
								</ul>
								
							</div>
						</div>

				</div> <!-- Hết col-sm-8 nhacvietmoi-->
				<div class="col-sm-4 noidungtrai4">
					
				</div><!-- Hết noidungtrai4-->
			</div>
		</div> <!-- Hết nội dung bài hát-->
	</div> <!-- Hết container4-->
			<div class="jumbotron jbt">
				<div class="container container5">
					<h3>Thông tin</h3>
					<hr class="m-y-md">
					<div class="row">
						<div class="col-sm-6">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Giới thiệu</button>
						
							<div id="demo" class="collapse">
						    	Website nghe nhạc trực tuyến homnaynghegi.tk nhằm mục đích mang âm nhạc đến với gần với tất cả mọi người hay những người yêu nhạc thông qua mạng Internet.
						  </div>
					</div>
					<div class="col-sm-6">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1">Hỗ trợ</button>
						
							<div id="demo1" class="collapse colp" style="padding-top: 5px">
							  <p><span class="glyphicon glyphicon-map-marker"></span> Việt Nam, HCM City</p>
						      <p><span class="glyphicon glyphicon-phone"></span> 0906929906</p>
						      <p><span class="glyphicon glyphicon-envelope"></span> thaithien11596@gmail.com</p>
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
	
	
	
					

		

		
		<script src="js/jquery.min.js"></script>	
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>

	
	
</body>
</html>