<style>
	.menu ul li{
		width:184px;
		margin-left:1px;
		background:#0040FF;
		height:40px;
		border-radius:15px;
		text-align:center;	
		position: relative;
		margin-top: 10px;
		}
	.menu ul li a{

		color: #CEF6F5;
		display:block;

		}
	.menu ul li a hover {
		color:#FF0000;
			}
	.sub-menu li {
  	display: none;
	}
	
	.menu li:hover .sub-menu {
	 display: block;
	}
	.menu li:hover .sub-menu li{
	 display: block;
	}

</style>
<div class="menu" style="height: 110px; background: url(background/main.png);">
    <div id="menu">
      <ul>
        <li><a href="index.php?quanly=trangchu">TRANG CHỦ</a></li>
        <li ><a href="index.php?quanly=quanlythanhvien&ac=them">QUẢN LÝ THÀNH VIÊN</a></li>
        <li ><a href="index.php?quanly=quanlybaihat&ac=them" >QUẢN LÝ BÀI HÁT</a>
          <ul class="sub-menu">
            <li ><a href="index.php?quanly=quanlychitietbaihat&ac=them">QUẢN LÝ CHI TIẾT BÀI HÁT</a></li>
            <li><a href="index.php?quanly=quanlytheloai&ac=them">QUẢN LÝ THỂ LOẠI</a></li>         
          </ul>
      	</li>
      	<li ><a href="index.php?quanly=quanlyalbum&ac=them">QUẢN LÝ ALBUM</a>
      		<ul class="sub-menu">
            	<li ><a href="index.php?quanly=quanlychitietalbum&ac=them">QUẢN LÝ CHI TIẾT ALBUM</a></li>         
          	</ul>
        </li>
      	<li ><a href="index.php?quanly=quanlycasi&ac=them">QUẢN LÝ CA SĨ</a></li>
      	<li ><a href="index.php?quanly=quanlynhacsi&ac=them">QUẢN LÝ NHẠC SĨ</a></li>
      	<li ><a href="index.php?quanly=quanlyquocgia&ac=them">QUẢN LÝ QUỐC GIA</a></li>

      </ul>
    </div> 
</div>
    	