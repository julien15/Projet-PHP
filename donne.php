<?php $titre = 'Resevation'; ?>

<?php ob_start(); ?>
    <body>
        <?php foreach($Donnes as $lol) : ?>
            <?= $lol ?>
        <?php endforeach ?>
    </body>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>