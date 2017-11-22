<?php

    require 'acceuil.php';
    require 'model.php';
    try{
        $Donnes=GetDonne();
        require'donne.php';
    }
    catch(Exeption $erreur){
        $msgErreur = $e->getMessage();
        require 'erreur.php';
    }

?>
    
