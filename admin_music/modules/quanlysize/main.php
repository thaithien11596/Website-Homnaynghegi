<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlysize/them.php');
		}if($tam=='sua'){
			include('modules/quanlysize/sua.php');
		}if($tam=='timkiem'){
			include('modules/quanlysize/timkiem.php');
		}
	 ?>
</div>
<div class="content-right">
	<?php
		if($tam=='timkiem' ){
		include('modules/quanlysize/lietketim.php');}
		else{
			include('modules/quanlysize/lietke.php');}
	?>
</div>