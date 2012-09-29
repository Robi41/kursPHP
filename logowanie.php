<?php 
echo'<pre>';
// var_dump($_POST); 
if(!empty($_POST['login'])&& !empty($_POST['password']))
{
	
	echo "wyswietl";
	die();	
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
<label for="login">login</label>
<input type="text" name="login" value="" id="login"/>
<br/>
<label for="password">hasło:</label>
<input type="text" name="password"  id="password"/>
<br/>
  <p><input type="submit" value="Zaloguj sie"/></p>
</form>	
</body>
</html>



		
  

	