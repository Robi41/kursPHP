<?php
//funkcje dołączającepliki
session_start();
//require 'file';
//require_once 'file';
//jeśli nie ma pliku generuje błąd FATAL
//include 'file'
require_once 'baza.php';
require_once 'funkcje.php';
if(isset($_GET['sortuj']) && $_GET['sortuj'] == "email"){
	foreach ($users as $klucz => $tablica) {
    $email[$klucz]  = $tablica['email'];
	

}

// Posortuj dane według numeru malejąco i edycji rosnąco
// Należy podać $dane jako ostatni parametr aby posortować według wspólnego
// klucza
array_multisort($email, SORT_ASC, $users);

	
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" 
	type="text/css" media="screen" title="no title" charset="utf-8"/>
</head>
<body>
	<h3>koszyk</h3>
	liczba produktów w koszyku <?php echo count($_SESSION['koszyk']); ?>
	<h1 id="">sklep</h1>
	<a href="index.php?sortuj=email" class="btn">sortuj według linka</a>
	<table class="table table-striped table-bordered">
		<a href="index.php" class="btn">cofnij</a>
	<table class="table table-striped table-bordered">
<tr>
	<?php foreach($users[0] as $klucz => $wartosc){ ?>
		<th><?=$klucz; ?></th>
		<?php }?>

	<th>Akcje</th>
	<!-- <tr><?php //foreach($users[0]as $klucz => $wartosc){?>
	<th>Id</th>
	<th>Username</th>
	<th>Email</th>
	<th>akcje</th> -->
</tr>

<?php foreach ($users as $user){?>
<tr><td><?=$user['id']?></td>
	<td><?=$user['username']?></td>
	<td><?=$user['email']?></td>
	<td><a class="btn" href="">Edytuj</a> <a class="btn btn-danger"href="">Usuń</a>		
	</td>
</tr>
<?php } ?>
</table>
liczba odwiedzin:
<?=licznik()?>





</html>