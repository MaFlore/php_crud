<?php include('connexion_bd.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        button:hover{
        background-color:purple;
        color:white;}
        h2{
            text-align:center;
        }
       body{background-color:rgba(0,0,0,0.5);;
    } 
    </style>
<body>
    <center>
     
        <h2>LISTE DES VOITURES</h2>
        <button><a href="ajout_voiture.php">Ajouter</a></button>
        
        <table border="1px">
                    <tr>
                        <th style="text-align: center;">Index</th>
                        <th style="text-align: center;">Numero serie</th>
                        <th style="text-align: center;">Modèle</th>
                        <th style="text-align: center;">Couleur</th>
                        <th style="text-align: center;">Date acquisition</th>
                        <th style="text-align: center;">Prix vente</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                    <?php 
                $voitures=$connexion->query("SELECT * FROM voiture");
                while($element=$voitures->fetch()){
                ?>
            <tr>
                <td style="text-align: center;"><?php echo $element['id']?></td>
                <td style="text-align: center;"><?php echo $element['numero_serie']?></td>
                <td style="text-align: center;"><?php echo $element['modele']?></td>
                <td style="text-align: center;"><?php echo $element['couleur']?></td>
                <td style="text-align: center;"><?php echo $element['date_acquisition']?></td>
                <td style="text-align: center;"><?php echo $element['prix_vente']?></td>
                <td style="text-align: center;">
                <button> <a href="modification_voiture.php?id=<?=$element ['id']?>">Modifier</a></button>
                <button> <a href="suppression_voiture_bd.php?id=<?=$element ['id']?>">Supprimer</a></button>
                </td>
            </tr>
            <?php } ?>
            </table>
          
        
      </center>
</body>
</html>