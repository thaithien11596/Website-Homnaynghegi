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
    <td><input type="file" name="imageBaihat" value="<?php echo $row['imageBaihat'] ?>" id='ImageBaihat'/></td>
  </tr>
  <tr>
    <td>Ngày Đăng Bài Hát</td>
    <td><input  type="text" name="NgaydangBaihat" cols="40" rows="15" id="NgayDangBaiHat" value="<?php echo $row['NgaydangBaihat'] ?>"/></td>
  </tr>
  <tr>
    <td>Lượt Nghe Bài Hát</td>
    <td><input  type="text" name="LuotngheBaihat" cols="40" rows="15" id="LuotNgheBaiHat" value="<?php echo $row['LuotngheBaihat'] ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>Lượt Tải Bài Hát</td>
    <td><input  type="text" name="LuottaiBaihat" cols="40" rows="15" id="LuotTaiBaiHat" value="<?php echo $row['LuottaiBaihat'] ?>" disabled="disabled"/></td>
  </tr>
  <tr>
    <td>Link Bài Hát</td>
    <td><input  type="file" name="LinkBaihat" cols="40" rows="15" id="LinkBaiHat" value="<?php echo $row['LinkBaihat'] ?>"/></td>
  </tr>
  
  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from baihat";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Bài Hát</td>
    <td>
      <select name="IdBaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idBaihat'] ?>"><?php echo $row['TenBaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from casi";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Ca sĩ</td>
    <td>
      <select name="IdCasi">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idCasi'] ?>"><?php echo $row['HotenCasi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from theloai";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Thể Loại</td>
    <td>
      <select name="IdTheloai">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idTheloai'] ?>"><?php echo $row['TenTheloai']?></option>
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
