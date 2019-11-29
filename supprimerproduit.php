<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_GET["id"])){
	$produitC->deleteproduit($_GET["id"]);
	header('Location: ' . $_SERVER['HTTP_REFERER']);	
}

?>