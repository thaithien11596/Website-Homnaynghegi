<?php
class Music extends Db{
	public function getsongUSUK()
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
";
		return $this->select($sql);	
	}
	public function getsongVN()
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
						chitietbaihat.LuotngheBaihat DESC";
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
						chitietbaihat.LuottaiBaihat
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						WHERE
						baihat.idQuocgia = 1
						ORDER BY
						chitietbaihat.LuottaiBaihat DESC
						LIMIT 7 ";
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
							chitietbaihat.LuottaiBaihat
							FROM
							casi
							INNER JOIN chitietbaihat ON chitietbaihat.idCasi = casi.idCasi
							INNER JOIN baihat ON chitietbaihat.idBaihat = baihat.idBaihat
							ORDER BY RAND()
							LIMIT 8";
						// echo $sql;
		return $this->select($sql);	
	}
		public function indexbshUSUK()
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
							chitietbaihat.idChitietbaihat
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
}

	
?>