
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN QUỐC GIA</div>
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
    $trang1=($get_trang*8)-8;
  }
  
  $sql="select * from quocgia limit $trang1,8"; // trang1 (vị trí quốc gia hiện tại) , lấy 8 quốc gia
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
  
  //-------//đếm số dòng có trong quốc gia -> tương ứng đếm số quốc gia
  $sql_sql="SELECT count(*) FROM quocgia";
  $result = $objPdo->query($sql_sql);
  $row = $result->fetch(PDO::FETCH_NUM);
  $a=ceil($row[0]/4);
  for($b=1;$b<=$a;$b++){
    echo '<a href="index.php?quanly=quanlyquocgia&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
  }
  echo '<br>'.'TỔNG QUỐC GIA LÀ: '.$row[0];
  // ---------------------------- tìm kiếm quốc gia
  if(isset($_POST['sub-timkiem'])){
  $tentk=$_POST['timkiem'];
  $sql_tk="select * from quocgia where TenQuocgia like '%$tentk%'";
  $objStmtk = $objPdo->query($sql_tk);
  $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
      $m=$rowtk['idQuocgia'];
      if($tentk=='$m'){
        echo '<script>alert("Không tìm thấy Tên Quốc Gia")</script>';
      }else{
  ?>
    <BR /><hr /><p style="color:#000;background:pink " align="center">QUỐC GIA TÌM KIẾM:</p>
  <table width="100%" border="1">
      <tr align="center" style="background:#0040FF;color:#CEF6F5">
        
        <td>Id Quốc Gia</td>
        <td >Tên Quốc Gia</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idQuocgia'] ?></td>
        <td><?php echo $rowtk['TenQuocgia'] ?></td>
        
        
        <td><a href="index.php?quanly=quanlyquocgia&ac=sua&id=<?php echo $rowtk['idQuocgia'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlyquocgia/xuly.php?id=<?php echo $rowtk['idQuocgia'];?>" onclick="return confirm('Bạn có chắc xóa Quốc gia <?php echo $rowtk['idQuocgia']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php 
          } 
    }
  ?>
  </table>
  <p style="background:pink;height:40px"></p>
  <?php } ?>
    <!-- END CODE TÌM KIẾM -->
     <br />
<p style="width:200px;color:blue;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
    Nhập Tên Quốc Gia:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center" >
    <td>Id Quốc Gia</td>
    <td>Tên Quốc Gia</td> 
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
    foreach($data as $row)
  { 
  ?>
  <tr align="center">
    <td><?php echo $row['idQuocgia'] ?></td>
    <td><?php echo $row['TenQuocgia'] ?></td>
   
    <td ><a href="index.php?quanly=quanlyquocgia&ac=sua&id=<?php echo $row['idQuocgia'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlyquocgia/xuly.php?id=<?php echo $row['idQuocgia'];?>" onclick="return confirm('Bạn có chắc xóa Quốc Gia thứ <?php echo $row['idQuocgia']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

