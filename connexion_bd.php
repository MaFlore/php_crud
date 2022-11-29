<?php 
         try{
            $connexion=new PDO('mysql:host=localhost;dbname=devoir_it;charset=utf8','root', '');
        }
        catch(Exception $e){
            die('Erreur connexion non reussi'.$e->getMessage());
        }?>