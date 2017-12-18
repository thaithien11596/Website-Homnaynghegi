<script>
function KT(){
	tenbh=document.getElementById('TenBaihat').value;
	loibh=document.getElementById('LoiBaihat').value;
	idns=document.getElementById('idNhacsi').value;
	idqg=document.getElementById('idQuocgia').value;
	
	
	if(tenbh==''){
		alert('Bạn chưa nhập Tên Bài hát');
		return false;
	}
	if(loibh==''){
		alert('Bạn chưa nhập Lời Bài hát');
		return false;
	}if(idns==''){
    alert('Bạn chưa chọn Id Nhạc sĩ');
    return false;}
	if(idqg==''){
		alert('Bạn chưa chọn Id Quốc gia');
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
    <td>TÊN BÀI HÁT</td>
    <td><input type="text" name="TenBaihat" id="TenBaiHat"></td>
  </tr>
  <td>Lời Bài Hát</td>
    <td><textarea name="LoiBaihat" cols="40" rows="15" id="LoiBaiHat"></textarea></td>
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


  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="thêm" onclick="return confirm('Bạn có chắc chắn Thông Tin Bài Hát nhập vào không')">Thêm Thông Tin Bài Hát</button>
    </div></td>
  </tr>

</table>
</form>
