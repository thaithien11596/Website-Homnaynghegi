
<script type="text/javascript">
function kt(){ 
	username=document.getElementById('username').value;
  ps=document.getElementById('password').value;
  httv=document.getElementById('HotenThanhvien').value;
  gttv=document.getElementById('GioitinhThanhvien').value;
  sdttv=document.getElementById('SdtThanhvien').value;
  dctv=document.getElementById('DiachiThanhvien').value;
  nstv=document.getElementById('NgaysinhThanhvien').value;
  tthd=document.getElementById('TrangthaiHD').value;
	if (username=='')
     {
         alert('Nhập UserName bạn ơi'); return false; 
     }if (ps=='')
     {
         alert('Nhập PassWord bạn ơi'); return false; 
     }if (httv=='')
     {
         alert('Nhập Họ Tên bạn ơi'); return false; 
     }if (gttv=='')
     {
         alert('Chọn Giới Tính bạn ơi'); return false; 
     }if (sdttv=='')
     {
         alert('Nhập Số Điện Thoại bạn ơi'); return false; 
     }if (dctv=='')
     {
         alert('Nhập Địa Chỉ bạn ơi'); return false; 
     }if (nstv=='')
     {
         alert('Nhập Ngày Sinh bạn ơi'); return false; 
     }if (tthd=='')
     {
         alert('Nhập Trạng Thái Hoạt Động bạn ơi'); return false; 
     }

	return true;
}
</script>
<?php
  // code sửa
  $idThanhvien=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
  $sql="select * from thanhvien where idThanhvien='$idThanhvien'";
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php 
 foreach($data as $row) {
 ?>
<form action="modules/quanlythanhvien/xuly.php?id=<?php echo $row['idThanhvien'] ?>" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN THÀNH VIÊN</div></td>
  </tr>

  <tr>
    <td>ID Thành viên</td>
    <td><input type="text" name="idThanhvien" value="<?php echo $row['idThanhvien']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>UserName</td>
    <td><input type="text" name="username" id="Username" value="<?php echo $row['username']; ?>" size="28px"/></td>
  </tr>
   <tr>
    <td>PassWord</td>
    <td><input type="password" name="password" id="Password" value="<?php echo $row['password']; ?>"  size="28px"/></td>
  </tr>
  <tr>
    <td>Họ Tên Thành viên</td>
    <td><input type="text" name="HotenThanhvien" id="HoTenThanhVien" value="<?php echo $row['HotenThanhvien']; ?>"  size="28px"/></td>
  </tr>
   <tr>
    <td>Giới Tính Thành viên</td>
    <td><input type="radio" name="GioitinhThanhvien" id="gtNam"  value="<?php echo $row['GioitinhThanhvien']; ?>" "/>Nam
    <input type="radio" name="GioitinhThanhvien" id="gtNu" value="<?php echo $row['GioitinhThanhvien']; ?>"  "/>Nữ</td>
  </tr>
   <tr>
    <td>Số Điện Thoại Thành viên</td>
    <td><input type="text" name="SdtThanhvien" id="SdtThanhVien" value="<?php echo $row['SdtThanhvien']; ?>"  size="28px"/></td>
  </tr>
  <tr>
    <td>Địa Chỉ Thành viên</td>
    <td><input type="text" name="DiachiThanhvien" id="DiaChiThanhVien" value="<?php echo $row['DiachiThanhvien']; ?>"  size="28px"/></td>
  </tr>
   <tr>
    <td>Ngày Sinh Thành viên</td>
    <td><input type="date" name="NgaysinhThanhvien" id="NgaySinhThanhVien" value="<?php echo $row['NgaysinhThanhvien']; ?>" d size="28px"/></td>
  </tr>
  <tr>
    <td>Trạng Thái Hoạt Động</td>
    <td><input type="text" name="TrangthaiHD" id="TrangThaiHD" value="<?php echo $row['TrangthaiHD']; ?>" size="28px" /></td>
  </tr>
  <tr>
    <td>Email Thành viên</td>
    <td><input type="text" name="EmailThanhvien" id="EmailThanhVien" value="<?php echo $row['EmailThanhvien']; ?>" size="28px" /></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="Sữa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Thành Viên hiện tại chứ')">Sữa Thông Tin Thành Viên</button>
          </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>