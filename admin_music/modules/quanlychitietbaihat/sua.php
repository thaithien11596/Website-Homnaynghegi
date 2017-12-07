<script >
function kt(){
 	
	idchitiettbh=document.getElementById('idChitietbaihat').value;
  imagebh=document.getElementById('imageBaihat').value;
  ngaydangbh=document.getElementById('NgaydangBaihat').value;
  luotnghebh=document.getElementById('LuotngheBaihat').value;
  luottaibh=document.getElementById('LuottaiBaihat').value;
  linkbh=document.getElementById('LinkBaihat').value;
  idbh=document.getElementById('idBaihat').value;
  idcs=document.getElementById('idCasi').value;
  idtl=document.getElementById('idTheloai').value;
	//hinhanh=document.getElementById('hinhANH').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];
	
	if(idchitietbh==''){
    alert('Bạn chưa nhập Id Chi Tiết Bài hát');
    return false;
  }
  if(imagebh==''){
    alert('Bạn chưa chọn Hình ảnh Bài hát');
    return false;
  }
  if(ngaydangbh==''){
    alert('Bạn chưa nhập Ngày Đăng Bài hát');
    return false;
  }if(luotnghebh==''){
    alert('Bạn chưa nhập Lượt Nghe Bài hát');
    return false;
  }if(luottaibh==''){
    alert('Bạn chưa nhập Lượt Tải Bài hát');
    return false;
  }if(linkbh==''){
    alert('Bạn chưa nhập Link Bài hát');
    return false;
  }
  if(idbh==''){
    alert('Bạn chưa nhập Id Bài hát');
    return false;
  }
  if(idcs==''){
    alert('Bạn chưa nhập Id Ca sĩ');
    return false;
  }
  if(idtl==''){
    alert('Bạn chưa nhập Id Thể Loại');
    return false;
  }
  return true;
}
</script>
<?php
	// code sửa
	$m=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from chitietbaihat where idChitietbaihat='$m'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php foreach($data as $row){ ?>
<form action="modules/quanlychitietbaihat/xuly.php?id=<?php  echo $row['idChitietbaihat']?>" method="post" enctype="multipart/form-data" onsubmit="return kt()" >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN CHI TIẾT BÀI HÁT</div></td>
  </tr>
  
  <tr>
    <td>ID Chi Tiết Bài Hát</td>
    <td><input type="text" name="idChitietbaihat" readonly="readonly" value="<?php echo $row['idChitietbaihat'] ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>Hình Ảnh Bài Hát</td>
    <td><input type="text" name="imageBaihat" value="<?php echo $row['imageBaihat'] ?>" id='ImageBaihat'/></td>
  </tr>
  <tr>
    <td>Ngày Đăng Bài Hát</td>
    <td><textarea name="NgaydangBaihat" cols="40" rows="15" id="NgayDangBaiHat"><?php echo $row['NgaydangBaihat'] ?></textarea></td>
  </tr>
  <tr>
    <td>Lượt Nghe Bài Hát</td>
    <td><textarea name="LuotngheBaihat" cols="40" rows="15" id="LuotNgheBaiHat"><?php echo $row['LuotngheBaihat'] ?></textarea></td>
  </tr>
  <tr>
    <td>Lượt Tải Bài Hát</td>
    <td><textarea name="LuottaiBaihat" cols="40" rows="15" id="LuotTaiBaiHat"><?php echo $row['LuottaiBaihat'] ?></textarea></td>
  </tr>
  <tr>
    <td>Link Bài Hát</td>
    <td><textarea name="LinkBaihat" cols="40" rows="15" id="LinkBaiHat"><?php echo $row['LinkBaihat'] ?></textarea></td>
  </tr>
  
  <?php //load lấy mã loại sp gắn vào combobox
		$sql_1="select idBaihat from baihat";
		$objstm = $objPdo->query($sql_1);
		$data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
		
	?>
  <tr>
    <td>ID BÀI HÁT</td>
    <td><select name="idBaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
	foreach($data_1 as $row_1)  
		{
	?>
    <option ><?php echo $row_1['idBaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy mã loại sp gắn vào combobox
    $sql_1="select idCasi from casi";
    $objstm = $objPdo->query($sql_1);
    $data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID CA SĨ</td>
    <td><select name="idCasi">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data_1 as $row_1)  
    {
  ?>
    <option ><?php echo $row_1['idCasi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy mã loại sp gắn vào combobox
    $sql_1="select idTheloai from theloai";
    $objstm = $objPdo->query($sql_1);
    $data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID THỂ LOẠI</td>
    <td><select name="idTheloai">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data_1 as $row_1)  
    {
  ?>
    <option ><?php echo $row_1['idTheloai']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php } ?>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Chi Tiết Bài Hát hiện tại chứ')">Sửa Chi Tiết Bài Hát</button>
    </div></td>
  </tr>

</table>
</form>
