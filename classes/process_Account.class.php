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
										Ngaysinhthanhvien,TrangthaiHD,EmailThanhvien) values(:username, :password, :hoten,:gt,:sdt,:diachi,:date, '1',:email) ";
		return $this->insert($sql,$arr);
	}
	public function member()
	{
			$sql="SELECT * FROM thanhvien";
			return $this->select($sql);
	}
	public function findmember($iduser)
	{
			$sql="SELECT * FROM thanhvien WHERE username='$iduser'";
			return $this->select($sql);
	}
		public function updateMember($ht,$gt,$sdt,$dc,$ns,$email,$user)
	{
		$sql="update  thanhvien set 
										
										HotenThanhvien= '$ht',
										Gioitinhthanhvien= '$gt',
										SdtThanhvien= '$sdt',
										DiachiThanhvien= '$dc',
										Ngaysinhthanhvien= '$ns',EmailThanhvien= '$email' where username='$user' ";
		return $this->update($sql);
	}
}

 ?>