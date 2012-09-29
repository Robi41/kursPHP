<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
				
</body>
</html>   
<?php
//to jest echo
$Shello = "Witaj na stronie";
$strona = 1;

//echo "jestes na stronie".$strona." ze stron10";
echo "jestes na stronie $strona ze stron10<br>";
echo 'jestes na stronie $strona ze stron10<br>';
define('VAT', 23);
function obliczVAT ($kwota){
  return $kwota * VAT / 100;  
}


$produkt =1000;
echo obliczVAT($produkt)."<br>";

echo __FILE__;




?>

