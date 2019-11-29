<?PHP
include "../config.php";
//include "../entities/produit.php";
class ProduitC {
function afficherProduit ($produit){
		echo "nom_prod: ".$produit->getnom_prod()."<br>";
		echo "prix: ".$produit->getprix()."<br>";
		echo "stock: ".$produit->getstock()."<br>";
		echo "description: ".$produit->getdescription()."<br>";
		echo "photo: ".$produit->getphoto()."<br>";
		echo "couleur: ".$produit->getcouleur()."<br>";
		echo "tailleproduit: ".$produit->gettailleproduit()."<br>";

	}

function ajouterProduit($produit){
		$sql="insert into produit (nom_prod,prix,stock,description,photo,couleur,tailleproduit) 
		values (:nom_prod,:prix,:stock,:description,:photo,:couleur,:tailleproduit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
        $nom_prod=$produit->getnom_prod();
        $prix=$produit->getprix();
        $stock=$produit->getstock();
        $description=$produit->getdescription();
        $photo=$produit->getphoto();
        $couleur=$produit->getcouleur();
        $tailleproduit=$produit->gettailleproduit();
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':stock',$stock);
		$req->bindValue(':description',$description);
		$req->bindValue(':photo',$photo);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':tailleproduit',$tailleproduit);
         
         $req->execute();
     }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

function deleteproduit($id_prod){
		$sql="DELETE FROM produit where id_prod= :id_prod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_prod',$id_prod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	public static function modifierproduit($id_prod,$argument,$valeur){
		$sql="UPDATE produit SET ".$argument."=:".$argument." WHERE id_prod=:id_prod";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		if(strtolower($argument)=="new"){
			$valeur=intval($valeur);
		}
try{		
        $req=$db->prepare($sql);
         $s=$req->execute([
			":id_prod"=>intval($id_prod),
			":".$argument=>$valeur]);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

function getproduit($id_prod){
	$sql="SELECT * from produit where id_prod=$id_prod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function afficherproduits(){
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

} ?>