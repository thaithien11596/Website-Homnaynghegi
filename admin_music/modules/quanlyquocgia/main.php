<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{	
			$tam='';
		}if($tam=='them'){
			include('modules/quanlyquocgia/them.php');
		}if($tam=='sua'){
			include('sua.php');
		}
    ?>
</div>
<div class="content-right">
	<?php
		include('lietke.php');
	?>
</div>