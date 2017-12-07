<script >
function kt(){
 	
	idchitieta=document.getElementById('idchitietAlbum').value;
	//hinhanh=document.getElementById('hinhANH').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];
	
	luotnghea=document.getElementById('LuotngheAlbum').value;
	ngaydanga=document.getElementById('NgaydangAlbum').value;
	ida=document.getElementById('idAlbum').value;
  idchitietbh=document.getElementById('idChitietbaihat').value;
	
	if( luotnghea==''){
		alert('Bạn chưa nhập Lượt Nghe Album');
		return false;
	}
	if( ngaydanga==''){
		alert('Bạn chưa nhập Ngày Đăng Album');
		return false;
	}
	
	if( ida==''){
		alert('Bạn chưa chọn Id Album');
		return false;
	}
	if( idchitietbh==''){
		alert('Bạn chưa chọn Id Chitietbaihat');
		return false;
	}
	
	return true;
}
</script>
<?php
	// code sửa
	$m=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from chitietalbum where idchitietAlbum='$m'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php foreach($data as $row){ ?>
<form action="modules/quanlychitietalbum/xuly.php?id=<?php  echo $row['idchitietAlbum']?>" method="post" enctype="multipart/form-data" onsubmit="return kt()" >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN CHI TIẾT ALBUM</div></td>
  </tr>
  
  <tr>
    <td>ID CHI TIẾT ALBUM</td>
    <td><input type="text" name="idchitietAlbum" readonly="readonly" value="<?php echo $row['idchitietAlbum'] ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>LƯỢT NGHE ALBUM</td>
    <td><input type="text" name="LuotngheAlbum" value="<?php echo $row['LuotngheAlbum'] ?>" id='LuotNgheAlbum'/></td>
  </tr>
  <tr>
    <td>NGÀY ĐĂNG ALBUM</td>
    <td><textarea name="NgaydangAlbum" cols="40" rows="15" id="NgayDangAlbum"><?php echo $row['NgaydangAlbum'] ?></textarea></td>
  </tr>
  
  <?php //load lấy IdAlbum gắn vào combobox
		$sql_1="select idAlbum from album";
		$objstm = $objPdo->query($sql_1);
		$data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
		
	?>
  <tr>
    <td>ID ALBUM</td>
    <td><select name="idAlbum">
    <?php // tạo vòng lập lấy giá trị cho combobox
	foreach($data_1 as $row_1)  
		{
	?>
    <option ><?php echo $row_1['idAlbum']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy IdChitietBaihat gắn vào combobox
    $sql_1="select idChitietbaihat from chitietbaihat";
    $objstm = $objPdo->query($sql_1);
    $data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID CHI TIẾT BÀI HÁT</td>
    <td><select name="idChitietbaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data_1 as $row_1)  
    {
  ?>
    <option ><?php echo $row_1['idChitietbaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Chi Tiết Album hiện tại chứ')">Sửa Thông Tin Chi Tiết Album</button>
    </div></td>
  </tr>

</table>
</form>
