<?php

class fete{

private $id_fete;
private $nom;
private $pourcentage_reduction	;
private $date_debut;
private $date_fin;
private $nom_prod;

function __construct($id_fete, $nom, $pourcentage_reduction	, $date_debut,$date_fin,$nom_prod){

     $this->id_fete=$id_fete;
     $this->nom=$nom;
     $this->pourcentage_reduction=$pourcentage_reduction;
     $this->date_debut=$date_debut;
     $this->date_fin=$date_fin;
     $this->nom_prod=$nom_prod;
}


function getid_fete(){
    return $this->id_fete;
}
function getnom(){
    return $this->nom;
}
function getpourcentage_reduction(){
    return $this->pourcentage_reduction	;
}
function getdate_debut(){
    return $this->date_debut;
}
function getdate_fin(){
    return $this->date_fin;
}
function getnom_prod(){
    return $this->nom_prod;
}



function setid_fete($id_fete){
    $this->id_fete=$id_fete;
}
function setnom($nom){
    $this->nom;
}
function setpourcentage_reduction($pourcentage_reduction){
    $this->pourcentage_reduction=$pourcentage_reduction	;
}
function setdate_debut($date_debut){
    $this->date_debut=$date_debut;
}
function setdate_fin(){
    $this->date_fin=$date_fin;
}
function setnom_prod(){
    $this->nom_prod=$nom_prod;
}





}




?>