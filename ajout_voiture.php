<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir</title>
</head>
<style>
    
    form {
        /* Uniquement centrer le formulaire sur la page */
        margin: 0 auto;
        width: 400px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid black;
        border-radius: 2em;
        background-color:rgba(0,0,0,0.5);
        
    }

form div + div {
  margin-top: 1em;
}
label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
  color:white;
}

input{
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  border-radius: 2em;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid black;
}
input:focus{
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}


.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
p{
    text-align:center;
    color:white;
}
</style>
<body>
<form method='post' action="ajout_voiture_bd.php">
    <p> <strong>AJOUT D'UNE VOITURE </strong></p>
    <div>
        <label for="numero_serie">Numero serie :</label>
        <input type="text" placeholder="Numéro série" id="numero_serie" name="numero_serie" required>
    </div>
    <div>
        <label for="modele">Modèle :</label>
        <input type="text" placeholder="Modèle" id="modele" name="modele" required>
    </div>
    <div>
        <label for="couleur">Couleur :</label>
        <input type="text" placeholder="Couleur" id="couleur" name="couleur" required>
    </div>
    <div>
        <label for="date_acquisition">Date acquisition :</label>
        <input type="date" id="date_acquisition" name="date_acquisition" required>
    </div>
    <div>
        <label for="prix_vente">Prix vente :</label>
        <input type="number" id="prix_vente" name="prix_vente" required>
    </div>
    <div class="button">
        <input type="submit" name="Ajouter" value="Ajouter">
    </div>
    </form>
</body>
</html>