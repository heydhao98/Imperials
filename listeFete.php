<?PHP
include "../core/feteC.php";
$fete1C=new feteC();
$listefete=$fete1C->afficherfete();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id fete</td>
<td>nom</td>
<td>pourcentage_reduction</td>
<td>date_debut</td>
<td>date_fin</td>
<td>nom_prod</td>
</tr>

<?PHP
foreach($listefete as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_fete']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['pourcentage_reduction']; ?></td>
	<td><?PHP echo $row['date_debut']; ?></td>
    <td><?PHP echo $row['date_fin']; ?></td>
    <td><?PHP echo $row['nom_prod']; ?></td>


    <form method="POST" action="modifierfete.php">
	<input type="submit" name="modifier" value="modifier">
	<input type="hidden" value="<?PHP echo $row['id_fete']; ?>" name="id_fete">
	</form>

	</form>




    </td>
	</tr>
    
	<?PHP 
}
?>

</table>

<a href="Ajouterfete.html">Ajouter une nouvelle fete</a>

