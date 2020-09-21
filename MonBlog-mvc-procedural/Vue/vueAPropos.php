<?php $titre = 'A propos de Mon Blog'; ?>

<?php ob_start(); ?>

<p>Blog réalisé par M. Baptiste Pesquet. Un grand merci à lui pour ses ressources pédagogiques !</p>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>