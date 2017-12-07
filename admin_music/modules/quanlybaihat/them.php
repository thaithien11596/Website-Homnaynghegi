<script>
function KT(){
	idbh=document.getElementById('idBaihat').value;
	tenbh=document.getElementById('TenBaihat').value;
	loibh=document.getElementById('LoiBaihat').value;
	idns=document.getElementById('idNhacsi').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];
	
	idqg=document.getElementById('idQuocgia').value;
	
	if(idbh==''){
		alert('Bạn chưa nhập Id Bài hát');
		return false;
	}
	if(tenbh==''){
		alert('Bạn chưa nhập Tên Bài hát');
		return false;
	}
	if(loibh==''){
		alert('Bạn chưa nhập Lời Bài hát');
		return false;
	}if(idns==''){
    alert('Bạn chưa nhập Id Nhạc sĩ');
    return false;}
	if(idqg==''){
		alert('Bạn chưa nhập Id Quốc gia');
		return false;
	}
	return true;
}

</script>
<form action="modules/quanlybaihat/xuly.php" method="post" enctype="multipart/form-data" onsubmit="return KT()">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM BÀI HÁT</div></td>
  </tr>
  <tr>
    <td width="48%">ID BÀI HÁT</td>
    <td width="52%"><input type="text" name="idBaihat" id="IdBaihat"></td>
  </tr>
  <tr>
    <td>TÊN BÀI HÁT</td>
    <td><input type="text" name="TenBaihat" id="TenBaiHat"></td>
  </tr>
  <tr>
    <td>LỜI BÀI HÁT</td>
    <td><input type="text" name="LoiBaihat" id="LoiBaiHat"></td>
  </tr>
 
  <?php //load lấy mã loại sp gắn vào combobox
		$sql="select * from nhacsi";
		$objStm = $objPdo->query($sql);
		$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
		
	?>
  <tr>
    <td>ID NHẠC SI</td>
    <td><select name="idNhacsi">
    <?php // tạo vòng lập lấy giá trị cho combobox
	foreach($data as $row)  
		{
	?>
    <option><?php echo $row['idNhacsi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  
  <?php //load lấy mã loại sp gắn vào combobox
    $sql="select * from quocgia";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>

  <tr>
    <td>ID QUỐC GIA</td>
    <td><select name="idQuocgia">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option><?php echo $row['idQuocgia']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>


  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="thêm" onclick="return confirm('Bạn có chắc chắn Thông Tin Bài Hát nhập vào không')">Thêm Thông Tin Bài Hát</button>
    </div></td>
  </tr>

</table>
</form>
