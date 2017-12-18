<?php
class Music extends Db{
		public function randAlbum(){
		$sql = "SELECT * FROM album ORDER BY RAND() LIMIT 8";
		return $this->select($sql);	

	}

	public function album($idAlbum){
		$sql = "SELECT * FROM chitietalbum JOIN album ON chitietalbum.idAlbum=album.idAlbum JOIN chitietbaihat ON chitietalbum.idChitietbaihat=chitietbaihat.idChitietbaihat JOIN baihat ON chitietbaihat.idBaihat=baihat.idBaihat WHERE chitietalbum.idAlbum=$idAlbum";
		return $this->select($sql);	

	}
	public function detailNhacsi($idNhacsi){
		$sql = "SELECT * From nhacsi WHERE idNhacsi = $idNhacsi";
		return $this->select($sql);	

	}
	public function detailsingNhacsi($idNhacsi){
		$sql = "SELECT * From nhacsi JOIN baihat ON nhacsi.idNhacsi=baihat.idNhacsi JOIN chitietbaihat ON baihat.idBaihat=chitietbaihat.idBaihat WHERE nhacsi.idNhacsi=$idNhacsi";
		return $this->select($sql);	

	}

	public function menuAlbum($idQg){
		$sql = "SELECT * FROM album WHERE idQuocgia=$idQg";
		return $this->select($sql);	

	}

	public function commentSing($idBh){
		$sql = "SELECT * FROM binhluan WHERE binhluan.idChitietbaihat = $idBh";
		return $this->select($sql);	

	}
	public function searchSing($idSearch){
		$sql = "SELECT * FROM baihat JOIN chitietbaihat join casi ON baihat.idBaihat=chitietbaihat.idBaihat AND chitietbaihat.idCasi = casi.idCasi WHERE TenBaihat LIKE N'%$idSearch%' order by LuotngheBaihat DESC";
		return $this->select($sql);
	}
	public function detailsingSinger($idSinger){
		$sql = "SELECT * From chitietbaihat JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat WHERE idCasi = $idSinger";
		return $this->select($sql);	

	}
	public function detailSinger($idSinger){
		$sql = "SELECT * FROM casi WHERE idCasi = $idSinger";
		return $this->select($sql);	

	}
	public function upsingNumber($singNumber, $idSing){
		$sql = "UPDATE chitietbaihat SET LuotngheBaihat = $singNumber WHERE idChitietbaihat = $idSing ";
		return $this->select($sql);	

	}
		public function uppass($password, $username){
		$sql = "UPDATE thanhvien SET password = '$password' WHERE username = '$username' ";
		return $this->select($sql);	

	}
		public function upsingAlbum($singNumber, $idSing){
		$sql = "UPDATE album SET LuotngheAlbum = $singNumber WHERE idAlbum = $idSing";
		return $this->select($sql);	

	}
	public function updatepassUser($pass, $user){
		$sql = "UPDATE thanhvien SET password = '$pass' WHERE thanhvien.username = '$user' ";
		return $this->select($sql);	

	}
	public function updownNumber($downNumber,$idSing){
		$sql = "UPDATE chitietbaihat SET LuottaiBaihat = $downNumber WHERE idChitietbaihat = $idSing ";
		return $this->select($sql);	

	}
	public function loadSing($idBh){
		$sql = "SELECT
							casi.HotenCasi,
							baihat.TenBaihat,
							baihat.LoiBaihat,
							chitietbaihat.imageBaihat,
							chitietbaihat.LuotngheBaihat,
							chitietbaihat.idChitietbaihat,
							chitietbaihat.LinkBaihat,
                            chitietbaihat.LuottaiBaihat,
							casi.idCasi,
							casi.idQuocgia
							FROM
							baihat
							INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
							INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
							WHERE
							chitietbaihat.idChitietbaihat = $idBh";
		return $this->select($sql);	
	}
	public function randSinger($idQg)
	{
		$sql="SELECT * FROM casi where idQuocgia = $idQg ORDER BY RAND() LIMIT 4";
		return $this->select($sql);	
	}
	public function randNhacsi($idQg)
	{
		$sql="SELECT * FROM nhacsi where idQuocgia = $idQg ORDER BY RAND() LIMIT 4";
		return $this->select($sql);	
	}
	public function getsinger($sl,$idQg)
	{
		$sql="SELECT * FROM casi where idQuocgia = $idQg LIMIT $sl,12";
		return $this->select($sql);	
	}
	public function demgetsinger($idQg)
	{
		$sql="SELECT * FROM quocgia JOIN casi ON quocgia.idQuocgia=casi.idQuocgia WHERE quocgia.idQuocgia=$idQg";
		return $this->select($sql);	
	}
	public function demgetNhacsi($idQg)
	{
		$sql="SELECT * FROM quocgia JOIN nhacsi ON quocgia.idQuocgia=nhacsi.idQuocgia WHERE quocgia.idQuocgia=$idQg";
					
		return $this->select($sql);	
	}
	public function getNhacsi($sl,$idQg)
	{
		$sql="SELECT * FROM nhacsi where idQuocgia = $idQg LIMIT $sl,12";
		return $this->select($sql);	
	}
	public function demgetsong($idQg,$idTl)
	{
		$sql="SELECT *
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
                    INNER JOIN theloai ON theloai.idTheloai = chitietbaihat.idTheloai
					WHERE
					baihat.idQuocgia = $idQg AND theloai.idTheloai = $idTl
					ORDER BY
					chitietbaihat.LuotngheBaihat DESC";
					
		return $this->select($sql);	
	}
	public function getsong($sl,$idQg,$idTl)
	{

		$sql="SELECT * 
						FROM baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						INNER JOIN quocgia ON quocgia.idQuocgia = baihat.idQuocgia
						INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
                        INNER JOIN theloai ON chitietbaihat.idTheloai = theloai.idTheloai
						WHERE
						baihat.idQuocgia = $idQg AND theloai.idTheloai = $idTl
						ORDER BY
						chitietbaihat.LuotngheBaihat DESC
						LIMIT $sl, 12";
						
						
		return $this->select($sql);	
	}

	public function getsongnew($sl,$idQg,$idTl )
	{

		$sql="SELECT *
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
                    INNER JOIN theloai ON chitietbaihat.idTheloai=theloai.idTheloai
					WHERE
					baihat.idQuocgia = $idQg AND theloai.idTheloai = $idTl
					ORDER BY
					chitietbaihat.NgaydangBaihat DESC
					LIMIT $sl, 12";
		return $this->select($sql);	
	}
	public function demgetsongnew($idQg,$idTl)
	{

		$sql="SELECT
					*
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
					INNER JOIN theloai ON chitietbaihat.idTheloai = theloai.idTheloai
					WHERE
					baihat.idQuocgia = $idQg AND theloai.idTheloai = $idTl";
		return $this->select($sql);	
	}
	public function processLogin($username,$password)
	{
		$sql="SELECT
						thanhvien.username,
						thanhvien.`password`
						FROM
						thanhvien
						WHERE
						thanhvien.username = '$username' AND
						thanhvien.`password` = '$password' ";
						// echo $sql;
		return $this->select($sql);	
	}
	public function processfixPassword($username,$email)
	{
		$sql="SELECT
						thanhvien.username,
						thanhvien.password
						FROM
						thanhvien
						WHERE
						thanhvien.username = '$username' AND
						thanhvien.EmailThanhvien = '$email' ";
						// echo $sql;
		return $this->select($sql);	
	}
	
	
	public function bxhGe($idQg)
		{
					$sql="SELECT
							baihat.idBaihat,
							baihat.TenBaihat,
							chitietbaihat.imageBaihat,
							chitietbaihat.LuottaiBaihat,
							casi.HotenCasi,
							casi.idCasi,
							quocgia.idQuocgia,
							quocgia.TenQuocgia,
							chitietbaihat.idChitietbaihat,
							baihat.idQuocgia
							FROM
							chitietbaihat
							INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
							INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
							INNER JOIN quocgia ON baihat.idQuocgia = quocgia.idQuocgia AND casi.idQuocgia = quocgia.idQuocgia
							WHERE
							quocgia.idQuocgia = $idQg
							ORDER BY
								chitietbaihat.LuottaiBaihat DESC
							LIMIT 7";
						// echo $sql;
		return $this->select($sql);	
	}

	public function bxh($idQg)
		{
					$sql="SELECT *
							FROM
							baihat
							INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
							INNER JOIN casi ON casi.idCasi = chitietbaihat.idCasi
                            INNER JOIN quocgia ON quocgia.idQuocgia = baihat.idQuocgia
                            INNER JOIN theloai ON theloai.idTheloai = chitietbaihat.idTheloai
                            
							WHERE
							baihat.idQuocgia = $idQg
							ORDER BY
							chitietbaihat.LuottaiBaihat DESC
							LIMIT 20";
						// echo $sql;
		return $this->select($sql);	
	}
	public function bxhUSUK()
		{
					$sql="SELECT
								baihat.TenBaihat,
								baihat.idBaihat,
								chitietbaihat.idChitietbaihat,
								chitietbaihat.imageBaihat,
								chitietbaihat.LuottaiBaihat,
								casi.HotenCasi,
								chitietbaihat.LuotngheBaihat,
								chitietbaihat.idCasi,
								casi.idQuocgia

								FROM
								baihat
								INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
								INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
								WHERE
								baihat.idQuocgia = 2
								ORDER BY
								chitietbaihat.LuottaiBaihat DESC
								LIMIT 20";
						// echo $sql;
		return $this->select($sql);	
	}
	public function randMusic($idQg)
		{
					$sql="SELECT
							baihat.idBaihat,
							baihat.TenBaihat,
							chitietbaihat.idChitietbaihat,
							casi.idCasi,
							casi.HotenCasi,
							chitietbaihat.imageBaihat,
							chitietbaihat.NgaydangBaihat,
							chitietbaihat.LuotngheBaihat,
							chitietbaihat.LuottaiBaihat,
							baihat.idQuocgia
							FROM
							casi
							INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
							INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
							WHERE
							baihat.idQuocgia = $idQg
							ORDER BY
							RAND() ASC
							LIMIT 8";
						// echo $sql;
		return $this->select($sql);	
	}


}

	
?>