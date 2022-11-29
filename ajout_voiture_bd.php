<?php
include('connexion_bd.php');

if (isset($_POST['Ajouter'])){

    $numero_serie = $_POST['numero_serie'];
    $modele = $_POST['modele'];
    $couleur = $_POST['couleur'];
    $date_acquisition = $_POST['date_acquisition'];
    $prix_vente = $_POST['prix_vente'];

    $voiture=$connexion->prepare('INSERT INTO voiture(numero_serie, modele, couleur, date_acquisition, prix_vente) VALUES(:numero_serie, :modele, :couleur, :date_acquisition, :prix_vente)');
    if($voiture->execute(array(
        'numero_serie'=>$numero_serie,
        'modele'=>$modele,
        'couleur'=>$couleur,
        'date_acquisition'=>$date_acquisition,
        'prix_vente'=>$prix_vente,
        ))){
    header('Location: /php_crud/liste_voitures.php');
    }
}
?>