<?php
function loadClass($c)
{
	include ROOT."/classes/$c.class.php";	
}
spl_autoload_register("loadClass");