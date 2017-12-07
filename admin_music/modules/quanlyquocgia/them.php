
<script type="text/javascript">
function kt(){
	idqg=document.getElementById('idQuocgia').value; 
	tenqg=document.getElementById('TenQuocgia').value;
 
	if (idqg=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (tenqg=='')
     {
         alert('Nhập TenQuocgia bạn ơi'); return false; 
     }

	return true;
}
</script>

<form action="modules/quanlyquocgia/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM QUỐC GIA</div></td>
  </tr>
  <tr>
    <td>ID Quốc Gia</td>
    <td><input type="text" name="idQuocgia"  id="IdQuocgia" size="28px"/></td>
  </tr>
   <tr>
    <td>Tên Quốc Gia</td>
    <td><input type="text" name="TenQuocgia" id="TenQuocGia" size="28px"/></td>
  </tr>
  

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Quốc Gia nhập vào chứ')">Thêm Thông Tin Quốc Gia</button>
          </div></td>
  </tr>
</table>
</form>
