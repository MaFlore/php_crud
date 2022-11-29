<?php

include('connexion_bd.php');
$id=$_GET['id'];

$voiture=$connexion->prepare('DELETE FROM voiture WHERE id=:id');
$voiture->execute([':id'=> $id]);

header('Location: /php_crud/liste_voitures.php');
?>