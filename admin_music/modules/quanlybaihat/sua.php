<script >
function kt(){
 	
	tenbh=document.getElementById('TenBaihat').value;
	//hinhanh=document.getElementById('hinhANH').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];
	
	loibh=document.getElementById('LoiBaihat').value;
	idns=document.getElementById('idNhacsi').value;
	idqg=document.getElementById('idQuocgia').value;
	
	if( tenbh==''){
		alert('Bạn chưa nhập Tên Bài hát');
		return false;
	}
	if( loibh==''){
		alert('Bạn chưa nhập Lời Bài hát');
		return false;
	}
	
	if( idns==''){
		alert('Bạn chưa chọn Id Nhạc sĩ');
		return false;
	}
	if( idqg==''){
		alert('Bạn chưa chọn Id Quốc gia');
		return false;
	}
	
	return true;
}
</script>
<?php
	// code sửa
	$m=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from baihat where idBaihat='$m'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php foreach($data as $row){ ?>
<form action="modules/quanlybaihat/xuly.php?id=<?php  echo $row['idBaihat']?>" method="post" enctype="multipart/form-data" onsubmit="return kt()" >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN BÀI HÁT</div></td>
  </tr>
  
  <tr>
    <td>ID BÀI HÁT</td>
    <td><input type="text" name="idBaihat" readonly="readonly" value="<?php echo $row['idBaihat'] ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>TÊN BÀI HÁT</td>
    <td><input type="text" name="TenBaihat" value="<?php echo $row['TenBaihat'] ?>" id='TenBaiHat'/></td>
  </tr>
  <tr>
  <td>LỜI BÀI HÁT</td>
    <td><textarea name="LoiBaihat" cols="40" rows="15" id="LoiBaiHat"><?php echo $row['LoiBaihat'] ?></textarea></td>
  </tr>
  
  <?php //load lấy mã loại sp gắn vào combobox
    $sql="select * from nhacsi";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Nhạc Sĩ</td>
    <td><select name="IdNhacsi">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option value="<?php echo $row['idNhacsi'] ?>"><?php echo $row['HotenNhacsi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  
 <?php //load lấy Id Quốc Gia gắn vào combobox
    $sql="select * from quocgia";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Quốc Gia</td>
    <td>
      <select name="IdQuocgia">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option value="<?php echo $row['idQuocgia'] ?>"><?php echo $row['TenQuocgia']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Bài Hát hiện tại chứ')">Sửa Thông Tin Bài Hát</button>
    </div></td>
  </tr>

</table>
</form>
