<div class="content" style="height: 1600px;">
	
</style>
        	<?php
			 if(isset($_GET['quanly'])){
				$tam=$_GET['quanly'];
			}else{
				$tam='';
			}if($tam=='quanlythanhvien'){
				include('modules/quanlythanhvien/main.php');
			}if($tam=='quanlybaihat'){
				include('modules/quanlybaihat/main.php');
			}if($tam=='quanlychitietbaihat'){
				include('modules/quanlychitietbaihat/main.php');
			}if($tam=='quanlytheloai'){
				include('modules/quanlytheloai/main.php');
			}if($tam=='quanlysale'){
				include('modules/quanlysale/main.php');
			}if($tam=='quanlyalbum'){
				include('modules/quanlyalbum/main.php');
			}if($tam=='quanlycasi'){
				include('modules/quanlycasi/main.php');
			}if($tam=='quanlynhacsi'){
				include('modules/quanlynhacsi/main.php');
			}if($tam=='quanlyquocgia'){
				include('modules/quanlyquocgia/main.php');
			}if($tam=='trangchu'){
				include('modules/main.php');
			}if($tam=='quanlychitietalbum'){
				include('modules/quanlychitietalbum/main.php');
			}
			
			?>	
        </div>

        