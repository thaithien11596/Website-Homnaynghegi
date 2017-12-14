<?php
class Music extends Db{
	public function upsingNumber($singNumber, $idSing){
		$sql = "UPDATE chitietbaihat SET LuotngheBaihat = $singNumber WHERE idChitietbaihat = $idSing ";
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
							chitietbaihat.LinkBaihat
							FROM
							baihat
							INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
							INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
							WHERE
							chitietbaihat.idChitietbaihat = $idBh";
		return $this->select($sql);	
	}
	public function getsingerVN($sl)
	{
		$sql="SELECT
				casi.HotenCasi,
				casi.imageCasi,
				casi.idQuocgia,
				chitietbaihat.idChitietbaihat,
				chitietbaihat.idBaihat,
				chitietbaihat.idCasi,
				chitietbaihat.idTheloai,
				baihat.TenBaihat,
				baihat.LoiBaihat,
				baihat.idQuocgia,
				chitietbaihat.LinkBaihat,
				chitietbaihat.imageBaihat,
				casi.idCasi,
				baihat.idBaihat,
				casi.TieusuCasi
				FROM
				casi
				INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
				INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
				WHERE
				casi.idQuocgia = 1
						LIMIT $sl,12";
		return $this->select($sql);	
	}
	public function demgetsingerVN()
	{
		$sql="SELECT
				casi.HotenCasi,
				casi.imageCasi,
				casi.idQuocgia,
				chitietbaihat.idChitietbaihat,
				chitietbaihat.idBaihat,
				chitietbaihat.idCasi,
				chitietbaihat.idTheloai,
				baihat.TenBaihat,
				baihat.LoiBaihat,
				baihat.idQuocgia,
				chitietbaihat.LinkBaihat,
				chitietbaihat.imageBaihat
				FROM
				casi
				INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
				INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
				WHERE
				casi.idQuocgia = 1";
		return $this->select($sql);	
	}

	public function getsongUSUK($sl)
	{
		$sql="SELECT
					baihat.idBaihat,
					chitietbaihat.idChitietbaihat,
					chitietbaihat.imageBaihat,
					chitietbaihat.LuotngheBaihat,
					casi.idCasi,
					casi.HotenCasi,
					chitietbaihat.LinkBaihat,
					baihat.TenBaihat,
					baihat.idQuocgia,
					casi.idQuocgia
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
					WHERE
					baihat.idQuocgia = 2
					ORDER BY
					chitietbaihat.LuotngheBaihat DESC
					LIMIT $sl, 12";
		return $this->select($sql);	
	}
	public function demgetsongUSUK()
	{
		$sql="SELECT
					baihat.idBaihat,
					chitietbaihat.idChitietbaihat,
					chitietbaihat.imageBaihat,
					chitietbaihat.LuotngheBaihat,
					casi.idCasi,
					casi.HotenCasi,
					chitietbaihat.LinkBaihat,
					baihat.TenBaihat,
					baihat.idQuocgia,
					casi.idQuocgia
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
					WHERE
					baihat.idQuocgia = 2
					ORDER BY
					chitietbaihat.LuotngheBaihat DESC";
		return $this->select($sql);	
	}
	public function getsongVN($sl)
	{

		$sql="SELECT
						baihat.idBaihat,
						chitietbaihat.idChitietbaihat,
						chitietbaihat.imageBaihat,
						chitietbaihat.LuotngheBaihat,
						casi.idCasi,
						casi.HotenCasi,
						chitietbaihat.LinkBaihat,
						baihat.TenBaihat,
						baihat.idQuocgia,
						casi.idQuocgia
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
						WHERE
						baihat.idQuocgia = 1
						ORDER BY
						chitietbaihat.LuotngheBaihat DESC
						LIMIT $sl, 12";
		return $this->select($sql);	
	}

	public function demgetsongVN()
	{

		$sql="SELECT
						baihat.idBaihat,
						chitietbaihat.idChitietbaihat,
						chitietbaihat.imageBaihat,
						chitietbaihat.LuotngheBaihat,
						casi.idCasi,
						casi.HotenCasi,
						chitietbaihat.LinkBaihat,
						baihat.TenBaihat,
						baihat.idQuocgia,
						casi.idQuocgia
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
						WHERE
						baihat.idQuocgia = 1
						ORDER BY
						chitietbaihat.LuotngheBaihat DESC
						";
		return $this->select($sql);	
	}

	public function getsongnewVN($sl)
	{

		$sql="SELECT
					baihat.idBaihat,
					chitietbaihat.idChitietbaihat,
					chitietbaihat.imageBaihat,
					chitietbaihat.LuotngheBaihat,
					casi.idCasi,
					casi.HotenCasi,
					chitietbaihat.LinkBaihat,
					baihat.TenBaihat,
					baihat.idQuocgia,
					casi.idQuocgia,
					chitietbaihat.NgaydangBaihat
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
					WHERE
					baihat.idQuocgia = 1
					ORDER BY
					chitietbaihat.NgaydangBaihat DESC
					LIMIT $sl, 12";
		return $this->select($sql);	
	}
	public function demgetsongnewVN()
	{

		$sql="SELECT
					baihat.idBaihat,
					chitietbaihat.idChitietbaihat,
					chitietbaihat.imageBaihat,
					chitietbaihat.LuotngheBaihat,
					casi.idCasi,
					casi.HotenCasi,
					chitietbaihat.LinkBaihat,
					baihat.TenBaihat,
					baihat.idQuocgia,
					casi.idQuocgia,
					chitietbaihat.NgaydangBaihat
					FROM
					baihat
					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
					INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
					WHERE
					baihat.idQuocgia = 1";
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
	public function indexVNMusic()
	{
		$sql="SELECT
			chitietbaihat.idChitietbaihat,
			chitietbaihat.imageBaihat,
			chitietbaihat.LuotngheBaihat,
			casi.HotenCasi,
			chitietbaihat.LinkBaihat,
			baihat.TenBaihat,
			quocgia.idQuocgia
			FROM
			baihat
			INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
			INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
			INNER JOIN quocgia ON baihat.idQuocgia = quocgia.idQuocgia AND casi.idQuocgia = quocgia.idQuocgia
			WHERE
			quocgia.idQuocgia = 1
			ORDER BY
			chitietbaihat.LuotngheBaihat DESC
			LIMIT 8";
						// echo $sql;
		return $this->select($sql);	
	}
		public function indexbxhVN()
	{
			$sql="SELECT
						baihat.TenBaihat,
						baihat.idBaihat,
						chitietbaihat.idChitietbaihat,
						chitietbaihat.imageBaihat,
						chitietbaihat.LuottaiBaihat,
						baihat.idQuocgia
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						WHERE
						baihat.idQuocgia = 1
						ORDER BY
						chitietbaihat.LuottaiBaihat DESC
						LIMIT 7";
		return $this->select($sql);	
	}
	public function indexRandMusic()
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
							ORDER BY RAND()
							LIMIT 8";
						// echo $sql;
		return $this->select($sql);	
	}
		public function indexbxhUSUK()
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
							quocgia.idQuocgia = 2
							LIMIT 7";
						// echo $sql;
		return $this->select($sql);	
	}
	public function indexbhNew()
		{
					$sql="SELECT
								chitietbaihat.NgaydangBaihat,
								baihat.TenBaihat,
								casi.HotenCasi,
								chitietbaihat.imageBaihat,
								chitietbaihat.idChitietbaihat,
								casi.idQuocgia,
								baihat.idQuocgia
								FROM
								chitietbaihat
								INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
								INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
								WHERE
								chitietbaihat.idTheloai = 1
								ORDER BY
								chitietbaihat.NgaydangBaihat DESC
								LIMIT 12";
						// echo $sql;
		return $this->select($sql);	
	}
	public function bxhVN()
		{
					$sql="SELECT
							baihat.TenBaihat,
							baihat.idBaihat,
							chitietbaihat.idChitietbaihat,
							chitietbaihat.imageBaihat,
							chitietbaihat.LuottaiBaihat,
							casi.HotenCasi,
							chitietbaihat.LuotngheBaihat,
							baihat.idQuocgia
							FROM
							baihat
							INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
							INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
							WHERE
							baihat.idQuocgia = 1
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
								chitietbaihat.LuotngheBaihat
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