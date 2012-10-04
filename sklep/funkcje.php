<?php
function licznik(){
	// aby usunąć ciasteczko ustawiamy datę ciasteczka na przeszłość setcookie("TestCookie",)
	$value = isset ($_COOKIE['licznik']) ? ++$_COOKIE["licznik"]: 1;
setcookie("licznik",$value,time()+3600);/*expire in hour */
return $value;
}
	