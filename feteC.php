<?php
include "../config.php";
class feteC
{

    function afficherfete()
    {
        $sql= "SELECT * From fete"; 
        $db= config::getConnection();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



    
 function trouverfete($id_fete)
 {
 $sql="SELECT * from fete where id_fete=$id_fete";
 $db= config::getConnection();
 try{
     $liste=$db->query($sql);
     return $liste;
     }
 catch (Exception $e){
     die('Erreur: '.$e->getMessage());
     }
 }




 function modifierfete($fete,$id_fete){
    $sql="UPDATE fete SET id_fete=:id_fete, nom=:nom,pourcentage_reduction=:pourcentage_reduction,date_debut=:date_debut,date_fin=:date_fin,nom_prod=:nom_prod WHERE id_fete=:id_fete";
    
    $db = config::getConnection();
    try{

        $req=$db->prepare($sql);
		
        $id_fete=$fete->getid_fete();
        $nom=$fete->getnom();
        $pourcentage_reduction=$fete->getpourcentage_reduction();
        $date_debut=$fete->getdate_debut();
        $date_fin=$fete->getdate_fin();
    
        $req->bindValue(':id_fete',$id_fete);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':pourcentage_reduction',$pourcentage_reduction);
        $req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
        
        $req->execute();
    

    
    
    $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
/*   echo " Les datas : " ;
print_r($datas);*/
    }
    
}

    function ajouterfete($fete)
    {
        
 

        $sql = "INSERT into fete (id_fete,nom,pourcentage_reduction,date_debut,date_fin,nom_prod) 
                values (:id_fete,:nom,:pourcentage_reduction,:date_debut,:date_fin,:nom_prod) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $id_fete=$fete->getid_fete();
        $nom=$fete->getnom();
        $pourcentage_reduction=$fete->getpourcentage_reduction();
        $date_debut=$fete->getdate_debut();
        $date_fin=$fete->getdate_fin();
        $nom_prod=$fete->getnom_prod();
    
        $req->bindValue(':id_fete',$id_fete);
		$req->bindValue(':nom',$nom);
        $req->bindValue(':pourcentage_reduction',$pourcentage_reduction);
        $req->bindValue(':date_debut',$date_debut);
        $req->bindValue(':date_fin',$date_fin);
        $req->bindValue(':nom_prod',$nom_prod);
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }
}









?>
