<?php
echo '<pre>';
// var_dump($_POST);
// if (!empty($_POST['liczba1']) && !empty($_POST['liczba2'])) {
	// $liczba1 = $_POST['liczba1'];
	// $liczba2 = $_POST['liczba2'];
// 
	// echo "suma:" . ($liczba1 + $liczba2);
	// echo "obwod prostokąta:" . (($liczba1 * 2) + ($liczba2 * 2));
	// echo " pole prostokąta:" . $liczba1 * $liczba2;
	// die();
// }
for ($lp = 10; $lp + 1; --$lp) {
	echo $lp . "<br/>";
}

// echo "hello".$_POST['login'].'<br/>';
// echo"twoje haslo".$_POST['password'].'<br/>';
?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post" >
			<label for="liczba1">1</label>
			<input type="text" name="liczba1" value="" id="liczba1"/>
			<br/>
			<label for="liczba2">2</label>
			<input type="text" name="liczba2"  id="liczba2"/>
			<br/>
			<p>
				<input type="submit" value="oblicz"/>
			</p>
		</form>
	</body>
</html>
