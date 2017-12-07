
 <style>
 .firstrow{
   background:#0040FF;
   color:#CEF6F5;
   text-align:center;
   }
  a{
    text-decoration:none}

 a:hover{
   color:blue;
   }
 </style>
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN CA SĨ</div>
<div style="color: blue; float: left;"> SỐ TRANG:</div>
<?php 
  
  if(isset($_GET['trang'])){
    $get_trang=$_GET['trang'];
  }else{
    $get_trang='';
  }
  if($get_trang=='' || $get_trang==1)
  {
    $trang1=0;
  }else{
    $trang1=($get_trang*5)-5;
  }
  
  $sql="select * from casi limit $trang1,5"; // trang1 (vị trí ca sĩ hiện tại) , lấy 5 ca sĩ
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
  
  //-------//đếm số dòng có trong ca sĩ -> tương ứng đếm số ca sĩ
  $sql_sql="SELECT count(*) FROM casi";
  $result = $objPdo->query($sql_sql);
  $row = $result->fetch(PDO::FETCH_NUM);
  $a=ceil($row[0]/5);
  for($b=1;$b<=$a;$b++){
    echo '<a href="index.php?quanly=quanlycasi&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
  }
  echo '<br>'.'TỔNG CA SĨ LÀ: '.$row[0];
  // ---------------------------- tìm kiếm sp
  if(isset($_POST['sub-timkiem'])){
  $matk=$_POST['timkiem'];
  $sql_tk="select * from casi where idCasi='$matk'";
  $objStmtk = $objPdo->query($sql_tk);
  $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
      $m=$rowtk['idCasi'];
      if($matk=='$m'){
        echo '<script>alert("Không tìm thấy Id Ca sĩ")</script>';
      }else{
  ?>
    <BR /><hr /><p style="color:#000;background:pink " align="center">CA SĨ TÌM KIẾM:</p>
  <table width="100%" border="1">
      <tr align="center">
        
        <td>Id Ca sĩ</td>
        <td>Họ Tên Ca sĩ</td>
        <td>Ngày Sinh Ca sĩ</td>
        <td>Quê Quán Ca sĩ</td>
        <td>Giới Tính Ca sĩ</td> 
        <td>Tiểu Sữ Ca sĩ</td>
        <td>Id Quốc Gia</td>

        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idCasi'] ?></td>
        <td><?php echo $rowtk['HotenCasi'] ?></td>
        <td><?php echo $rowtk['NgaysinhCasi'] ?></td>
        <td><?php echo $rowtk['QuequanCasi'] ?></td>
        <td><?php echo $rowtk['GioitinhCasi'] ?></td>
        <td><?php echo $rowtk['TieusuCasi'] ?></td>
        <td><?php echo $rowtk['idQuocgia'] ?></td>  
        
        <td><a href="index.php?quanly=quanlycasi&ac=sua&id=<?php echo $rowtk['idCasi'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlycasi/xuly.php?id=<?php echo $rowtk['idCasi'];?>" onclick="return confirm('Bạn có chắc xóa Nhạc sĩ <?php echo $rowtk['idCasi']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php 
          } 
    }
  ?>
  </table>
  <p style="background:pink;height:40px"></p>
  <?php } ?>
    <!------- END CODE TÌM KIẾM --------->
     <br />
<p style="width:200px;color:#00F;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
    Nhập ID Ca SĨ:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm Ca Sĩ" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" >
    <td>Id Ca sĩ</td>
    <td>Họ Tên Ca sĩ</td>
    <td>Ngày Sinh Ca sĩ</td>
    <td>Quê Quán Ca sĩ</td>
    <td>Giới Tính Ca sĩ</td> 
    <td>Tiểu Sữ Ca sĩ</td>
    <td>Id Quốc Gia</td>
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
    foreach($data as $row)
  { 
  ?>
  <tr align="center">
    <td><?php echo $row['idCasi'] ?></td>
    <td><?php echo $row['HotenCasi'] ?></td>
    <td><?php echo $row['NgaysinhCasi'] ?></td>
    <td><?php echo $row['QuequanCasi'] ?></td>
    <td><?php echo $row['GioitinhCasi'] ?></td>
    <td><?php echo $row['TieusuCasi'] ?></td>
    <td><?php echo $row['idQuocgia'] ?></td>

    <td ><a href="index.php?quanly=quanlycasi&ac=sua&id=<?php echo $row['idCasi'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlycasi/xuly.php?id=<?php echo $row['idCasi'];?>" onclick="return confirm('Bạn có chắc xóa Ca sĩ thứ<?php echo $row['idCasi']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

