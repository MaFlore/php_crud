<?php
include('connexion_bd.php');

if(isset($_POST['Modifier']) 
    && isset($_POST['id']) && isset($_POST['numero_serie']) 
    && isset($_POST['modele']) && isset($_POST['couleur']) 
    && isset($_POST['date_acquisition']) && isset($_POST['prix_vente'])){

    $id = $_POST['id'];
    $numero_serie = $_POST['numero_serie'];
    $modele = $_POST['modele'];
    $couleur = $_POST['couleur'];
    $date_acquisition = $_POST['date_acquisition'];
    $prix_vente = $_POST['prix_vente'];

    $voiture = $connexion->prepare('UPDATE voiture  SET numero_serie=:numero_serie, modele=:modele, couleur=:couleur, date_acquisition=:date_acquisition, prix_vente=:prix_vente WHERE id=:id');
    if( $voiture->execute(array(
        'numero_serie'=>$numero_serie,
        'modele'=>$modele,
        'couleur'=>$couleur,
        'date_acquisition'=>$date_acquisition,
        'prix_vente'=>$prix_vente,
        'id'=>$id
    ))){
        header('Location: /php_crud/liste_voitures.php'); 
    }
}

?>