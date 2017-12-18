<?php
class indexMusic extends Db{
	public function indexgetCasi()
	{
		$sql="SELECT * FROM  quocgia ";
		return $this->select($sql);	
	}
		public function indexbxhQg()
		{ $sql="SELECT * FROM quocgia";
						// echo $sql;
		return $this->select($sql);	
	}
	public function indexgetNhacsi(){
		$sql = "SELECT * FROM quocgia ";
		return $this->select($sql);	

	}
	public function indexAlbum(){
		$sql = "SELECT * FROM  quocgia ";
		return $this->select($sql);	

	}
	public function indexMenuSing(){
		$sql = "SELECT * FROM chitiettheloai JOIN theloai ON chitiettheloai.idTheloai=theloai.idTheloai";
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
			quocgia.idQuocgia,
			casi.idCasi
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
							ORDER BY
								chitietbaihat.LuottaiBaihat DESC
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
								baihat.idQuocgia,
								casi.idCasi
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

}

	
?>