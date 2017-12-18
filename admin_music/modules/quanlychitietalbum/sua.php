<script >
function kt(){
 	
	idchitieta=document.getElementById('idchitietAlbum').value;
	//hinhanh=document.getElementById('hinhANH').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];
	
	ida=document.getElementById('idAlbum').value;
  idchitietbh=document.getElementById('idChitietbaihat').value;
	
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
  
  <?php //load lấy IdAlbum gắn vào combobox
    $sql="select * from album ";
    $objstm = $objPdo->query($sql);
    $data = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>TÊN ALBUM</td>
    <td><select name="IdAlbum">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option value="<?php echo $row['idAlbum'] ?>" ><?php echo $row['TenAlbum']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy IdChitietBaihat gắn vào combobox
    $sql="SELECT * FROM chitietbaihat JOIN baihat ON chitietbaihat.idBaihat=baihat.idBaihat";
    $objstm = $objPdo->query($sql);
    $data2 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>TÊN BÀI HÁT</td>
    <td><select name="IdChitietbaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data2 as $row)  
    {
  ?>
    <option value="<?php echo $row['idChitietbaihat'] ?>"><?php echo $row ['TenBaihat']?></option>
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
