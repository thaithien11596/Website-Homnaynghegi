 <?php 
function checkUserName($string)
{
	if ((preg_match("/^[a-zA-Z0-9._-]*$/",$string))&&(strlen($string)>=8)) 
	  return true;
	return false;
}
function checkPhoneNumber($string)
{
	if (preg_match("/^[0-9]*$/",$string)) 
	  return true;
	return false;
}
function checkPassword($string)
{
	if((preg_match("/[A-Z]+/",$string))&&(preg_match("/[a-z]+/",$string))&&(preg_match("/[0-9]+/",$string)&&(strlen($string)>=8)))
			return true;
	return false;
}


function checkEmail($string)
{ 
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
	 return true;
	$d=getdate()['year'].'-'.getdate()['mon'].'-'.getdate()['mday'];
	$n=$d-$string;
	if ($n>='12')
	 return true;
	return false;	
}
// function checkGhiChu($string)
// {
// 	if ((preg_match("/^[a-zA-Z0-9._-]*$/",$string))) 
// 	  return true;
// 	return false;
// }
// function checkDayCart($string)
// {
// 	$d=getdate()['year'].'-'.getdate()['mon'].'-'.getdate()['mday'];
// 	if ((preg_match("/^[a-zA-Z0-9._-]*$/",$string))) 
// 	  return true;
// 	return false;
// }
?>