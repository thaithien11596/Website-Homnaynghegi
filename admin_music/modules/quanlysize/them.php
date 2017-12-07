<script>
function kt()
{
	$size=document.getElementById('size').value;
	if($size==''){
		alert("Nhập số size cho sản phẩm");
		return false;
		}
	return true;
}
</script>
<form action="modules/quanlytheloai/xuly.php?" method="post" enctype="multipart/form-data" onsubmit="return kt()">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">QUẢN LÝ THỂ LOẠI</div></td>
      </tr>
      
      <tr>
        <td width="115">MÃ SẢN PHẨM</td>
        <td width="69"><select name="masp">
		<?php
	  $sql="select idTheloai from theloai";
		$objStm=$objPdo->query($sql);
		$data=$objStm->fetchAll(PDO::FETCH_ASSOC);
		foreach($data as $row){ 
	 	 ?><option><?php echo $row['idTheloai'] ?></option><?php } ?></select></td>
      </tr>
      
      <tr>
        <td>SIZE</td>
        <td><input type="text" name="size" id="size"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="them" value="THÊM" >
        </div></td>
      </tr>
    </table>
</form>