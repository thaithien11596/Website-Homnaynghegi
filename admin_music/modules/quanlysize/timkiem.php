<form method="post">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">TÌM KIẾM SIZE THEO SẢN PHẨM</div></td>
  </tr>
  <tr>
    <td width="90">Mã sản phẩm</td>
    <td width="94"><select name="masp">
		<?php
	  	$sql="select Masp from sanpham";
		$objStm=$objPdo->query($sql);
		$data=$objStm->fetchAll(PDO::FETCH_ASSOC);
		foreach($data as $row){ 
	 	 ?><option><?php echo $row['Masp'] ?></option><?php } ?></select></td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" value="Tìm kiếm" name="timkiem">
    </div></td>
  </tr>
</table>
</form>