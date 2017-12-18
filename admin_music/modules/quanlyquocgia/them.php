
<script type="text/javascript">
function kt(){ 
	tenqg=document.getElementById('TenQuocgia').value;
 
	if (tenqg=='')
     {
         alert('Nhập Tên Quốc Gia bạn ơi'); return false; 
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
    <td>Tên Quốc Gia</td>
    <td><input type="text" name="TenQuocgia" id="TenQuocGia" size="35px"/></td>
  </tr>
  

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Quốc Gia nhập vào chứ')">Thêm Thông Tin Quốc Gia</button>
          </div></td>
  </tr>
</table>
</form>
