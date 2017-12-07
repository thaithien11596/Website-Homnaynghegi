
<script type="text/javascript">
function kt(){
	idtl=document.getElementById('idTheloai').value; 
	tentl=document.getElementById('TenTheloai').value;
 
	if (idtl=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (tentl=='')
     {
         alert('Nhập TenTheloai bạn ơi'); return false; 
     }

	return true;
}
</script>

<form action="modules/quanlytheloai/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM THỂ LOẠI</div></td>
  </tr>
  <tr>
    <td>ID Thể Loại</td>
    <td><input type="text" name="idTheloai"  id="IdTheloai" size="28px"/></td>
  </tr>
   <tr>
    <td>Tên Thể Loại</td>
    <td><input type="text" name="TenTheloai" id="TenTheLoai" size="28px"/></td>
  </tr>
  

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Thể Loại nhập vào chứ')">Thêm Thông Tin Thể Loại</button>
          </div></td>
  </tr>
</table>
</form>
