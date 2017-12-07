
<script type="text/javascript">
function kt(){
  ida=document.getElementById('idAlbum').value; 
  tena=document.getElementById('TenAlbum').value;
 
  if (ida=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (tena=='')
     {
         alert('Nhập TenAlbum bạn ơi'); return false; 
     }

  return true;
}
</script>

<form action="modules/quanlyalbum/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM ALBUM</div></td>
  </tr>
  <tr>
    <td>ID Album</td>
    <td><input type="text" name="idAlbum"  id="IdAlbum" size="28px"/></td>
  </tr>
   <tr>
    <td>Tên Album</td>
    <td><input type="text" name="TenAlbum" id="Ten_Album" size="28px"/></td>
  </tr>
  

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắc Thêm Thông Tin Album nhập vào chứ')">Thêm Thông Tin Album</button>
          </div></td>
  </tr>
</table>
</form>
