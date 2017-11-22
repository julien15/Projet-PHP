
<?php $titre = 'Resevation'; ?>

<?php ob_start(); ?>
    <p> Le prix d'une reservation pour une personne est de 35$ </p>
    <p> Si vous voulez une assurance annulation, un suplement de 15$ vous sera facturé.</p>
    <form method ="POST" action="index.php?action=valider">
        <p> Destination : <select name ="Dest[]">
            <option value='Berlin'>Berlin</option>
            <option value='Paris'>Paris</option>
            <option value='Prague'>Prague</option>
            <option value='Bruxelles'>Bruxelles</option>
            </select><br>
        <p> Nombre de passager : <input type ="test" name ="Dest[]" /></p>
        <p> Assurance Annulation : <input type ="checkbox" onclick="Dest=[]" /></p>
        <p><input type ="submit" value ="Se connecter" /></p>
    </form >
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>