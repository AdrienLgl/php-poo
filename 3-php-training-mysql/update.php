<?php

require 'functions.php';

if(array_key_exists('button_delete', $_POST)) { 
	
	delete_game();
}elseif(array_key_exists('button_update', $_POST)){
	update();

}
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Modififier un jeu de société</title>
</head>
<body>
	<a href="./read.php">Liste des données</a>
	<h1>Modifier un jeu de société</h1>

	<table>
				<thead>

				<tr>
				<td style= "border: 1px solid black">Nom</td>
				<td style= "border: 1px solid black">Nb joueurs min</td>
				<td style= "border: 1px solid black">Nb de joueurs max</td>
				<td style= "border: 1px solid black">Age min</td>
				<td style= "border: 1px solid black">Age max</td>
				<td style= "border: 1px solid black">Photo</td>


				</tr>

				<?php 
				
				affichage();
				
				?>

				</thead>

	</table>


	<b><p style="text-align: center"><br>Modifier mon jeu</p></b>
	<br>

<form method="post" action="update.php">
<select name="name">
    <option value="">--Veuillez choisir un jeu--</option>
	<?php select(); ?>
</select>
	<input type="number" placeholder="Nb joueurs min" name="players_min" value="">
	<input type="number" placeholder="Nb de joueurs max"name="players_max" value="">
	<input type="number" placeholder="Age min"name="age_min" value="">
	<input type="number" placeholder="Age max"name="age_max" value="">
	<input type="text" placeholder="Photo" name="picture" value="">

	<button type="submit" name="button_update">Modifier</button>
</form>

	
</body>
</html>
