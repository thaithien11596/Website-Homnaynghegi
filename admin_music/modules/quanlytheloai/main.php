<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{	
			$tam='';
		}if($tam=='them'){
			include('modules/quanlytheloai/them.php');
		}if($tam=='sua'){
			include('modules/quanlytheloai/sua.php');
		}
    ?>
</div>
<div class="content-right">
	<?php
		include('modules/quanlytheloai/lietke.php');
	?>
</div>