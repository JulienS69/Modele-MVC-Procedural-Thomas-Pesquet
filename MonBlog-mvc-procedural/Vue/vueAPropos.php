<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

<p>Je vous souhaite la bienvenue sur mon modeste blog.<br/>
Blog realise par SANTONI Thomas</p>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>