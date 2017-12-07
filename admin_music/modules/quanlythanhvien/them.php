
<script type="text/javascript">
function kt(){
	idtv=document.getElementById('idThanhvien').value; 
	username=document.getElementById('username').value;
  ps=document.getElementById('password').value;
  httv=document.getElementById('HotenThanhvien').value;
  gttv=document.getElementById('GioitinhThanhvien').value;
  sdttv=document.getElementById('SdtThanhvien').value;
  dctv=document.getElementById('DiachiThanhvien').value;
  nstv=document.getElementById('NgaysinhThanhvien').value;
  tthd=document.getElementById('TrangthaiHD').value;
	if (idtv=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (username=='')
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

<form action="modules/quanlythanhvien/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM THÀNH VIÊN</div></td>
  </tr>
  <tr>
    <td>ID Thành viên</td>
    <td><input type="text" name="idThanhvien"  id="idThanhvien" size="28px"/></td>
  </tr>
   <tr>
    <td>UserName</td>
    <td><input type="text" name="username" id="Username" size="28px"/></td>
  </tr>
   <tr>
    <td>PassWord</td>
    <td><input type="password" name="password" id="Password" size="28px"/></td>
  </tr>
  <tr>
    <td>Họ Tên Thành viên</td>
    <td><input type="text" name="HotenThanhvien" id="HoTenThanhVien" size="28px"/></td>
  </tr>
   <tr>
    <td>Giới Tính Thành viên</td>
    <td><input type="radio" name="GioitinhThanhvien" id="gtNam"  value="1" />Nam
    <input type="radio" name="GioitinhThanhvien" id="gtNu" value="0" />Nữ</td>
  </tr>
   <tr>
    <td>Số Điện Thoại Thành viên</td>
    <td><input type="text" name="SdtThanhvien" id="SdtThanhVien" size="28px"/></td>
  </tr>
  <tr>
    <td>Địa Chỉ Thành viên</td>
    <td><input type="text" name="DiachiThanhvien" id="DiaChiThanhVien" size="28px"/></td>
  </tr>
   <tr>
    <td>Ngày Sinh Thành viên</td>
    <td><input type="text" name="NgaysinhThanhvien" id="NgaySinhThanhVien" size="28px"/></td>
  </tr>
  <tr>
    <td>Trạng Thái Hoạt Động</td>
    <td><input type="text" name="TrangthaiHD" id="TrangThaiHD" size="28px" /></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Thành Viên nhập vào chứ')">Thêm Thông Tin Thành Viên</button>
          </div></td>
  </tr>
</table>
</form>
