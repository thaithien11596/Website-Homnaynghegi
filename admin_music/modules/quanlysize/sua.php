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
<?php
	$id=$_GET['id'];
	$size=$_GET['size'];
		$sql="select * from loaisize where Masp='$id' and size='$size'";
		$objStm=$objPdo->query($sql);
		$data=$objStm->fetchAll(PDO::FETCH_ASSOC);
		foreach($data as $row){?>
<form action="modules/quanlysize/xuly.php?id=<?php  echo $row['Masp']?>&stt=<?php echo $row['Thutu'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt()">
    <table width="100%" border="1">
      <tr>
        <td colspan="2"><div align="center">QUẢN LÝ SIZE</div></td>
      </tr>
      
      <tr>
        <td width="115">MÃ SẢN PHẨM</td>
        <td width="69"><select name="masp">
		
	 	<option><?php echo $row['Masp'] ?></option></select></td>
      </tr>
      
      <tr>
        <td>SIZE</td>
        <td><input type="text" name="size" value="<?php echo $row['size'] ?>" id="size"></td>
      </tr><?php } ?>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="sua" value="SỬA" >
        </div></td>
      </tr>
    </table>

</form>
