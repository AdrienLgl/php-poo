<form method="post" action="update.php">


<tr style="text-align : center">

<td><input type="hidden" name="name" value="<?php echo $game ?>"><?php echo $game ?></td>
<td><?php echo $min_age ?></td>
<td><?php echo $max_age ?></td>
<td><?php echo $min_players ?></td>
<td><?php echo $max_players ?></td>
<td><?php echo $picture ?></td>
<td><button name="button_delete" type="submit">Supprimer</button></td>



</tr>

</form>