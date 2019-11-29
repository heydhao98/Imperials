<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

/*function verifier($tableau){
	foreach ($tableau as $key => $value) {
		if(!isset($_POST[$value])){
			return false;
		}
	}
	return true;
}
*/
if(empty($_POST['nom_prod'] and empty($_POST['prix']) and empty($_POST['stock'] and empty($_POST['description']) and empty($_POST['photo']) and empty($_POST['couleur']) and empty($_POST['tailleproduit']))) ){

$produit=new produit;
$produit->_construct($_POST['nom_prod'],$_POST['prix'],$_POST['description'], $_FILES['file1']['name'],$_POST['tailleproduit'],$_POST['couleur'],$_POST['stock']);
//var_dump($produit);
$produitC=new produitC();

$produitC->ajouterProduit($produit);
$name = $_FILES['file1']['name'];
 $location='../image/';
  $tmp_name = $_FILES['file1']['tmp_name'];
if( move_uploaded_file($tmp_name ,$location.$name)){
	header('Location: produit.php');	
}
else{
	var_dump($_FILES["file1"]);
}

	
}
else{
	echo "vérifier les champs";
}
//*/

?>