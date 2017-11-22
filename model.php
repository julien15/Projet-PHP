<?php
    function valider($Dest[]){
        if (isset($_POST["Dest"]))
        {
            $Donne=$_POST["Dest"];
            return $Donne;
        }
        else{
            return 0;
        }
    }
?>