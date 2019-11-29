<?php
include "../core/feteC.php";
include "../entities/fete.php";

if (!empty($_POST['id_fete']) and 
    !empty($_POST['nom']) and 
    !empty($_POST['pourcentage_reduction']) and 
    !empty($_POST['date_debut']) and 
    !empty($_POST['date_fin']) and
    !empty($_POST['nom_prod']))
{ 
     
$fete1=new fete($_POST['id_fete'],$_POST['nom'],$_POST['pourcentage_reduction'],$_POST['date_debut'],$_POST['date_fin'],$_POST['nom_prod']);
    

    
$fete1C=new feteC();

$fete1C->ajouterfete($fete1);
header('Location: listeFete.php');
}
else echo("Verifier les Champs! ");




?>

