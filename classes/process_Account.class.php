<?php 
	class process_Account extends Db{
		public function addMember($arr)
	{
		$sql="insert into thanhvien(username,
										password,
										HotenThanhvien,
										Gioitinhthanhvien,
										SdtThanhvien,
										DiachiThanhvien,
										Ngaysinhthanhvien) values(:username, :password, :hoten,:gt,:sdt,:diachi,:date) ";
		return $this->insert($sql,$arr);
	}
	public function member()
	{
			$sql="SELECT * FROM thanhvien";
			return $this->select($sql);
	}
}

 ?>