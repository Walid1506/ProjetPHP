<?php
function addUtilisateur(){
    $idUtilisateur = $_POST["idUtilisateur"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    insertUtilisateur($idUtilisateur,$nom,$prenom,$email);
} 
function addMedicament(){
    $idMedicament = $_POST["idMedicament"];
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $effet_therapeutiques = $_POST["effet_therapeutiques"];
    $effet_secondaires = $_POST["effet_secondaires"];
    insertUtilisateur($idMedicament,$nom,$description,$effet_therapeutiques,$effet_secondaires);
}

function updVoit(){
    $voitures = $_POST["id"];
    $modele = $_POST["modele"];
    $marque = $_POST["marque"];
    $annee = $_POST["annee"];
    updateVoit($voitures,$modele,$marque,$annee);
    
}
function delVoit(){
    $voitures=$_POST["id"];
    deleteVoiture($voitures);
}?>