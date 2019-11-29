<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['modifier'])){
	extract($_POST);

	if(!empty($_POST["nom_prod"])){
		produitC::modifierproduit($_GET["id"],"nom_prod",$nom_prod);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
    if(!empty($_POST["prix"])){
		produitC::modifierproduit($_GET["id"],"prix",$prix);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	

if(!empty($_POST["stock"])){
		produitC::modifierproduit($_GET["id"],"stock",$stock);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
	

if(!empty($_POST["description"])){
		produitC::modifierproduit($_GET["id"],"description",$description);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	

	
if(!empty($_POST["couleur"])){
		produitC::modifierproduit($_GET["id"],"couleur",$couleur);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
if(!empty($_POST["tailleproduit"])){
		produitC::modifierproduit($_GET["id"],"tailleproduit",$tailleproduit);
		
			header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
	
	


	

}
?>
