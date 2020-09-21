<?php $titre = "Mon Blog - " . $billet->getTitre(); ?>

<?php ob_start(); ?>
<article>
    <header>
        <h1 class="titreBillet"><?= $billet->getTitre() ?></h1>
        <time><?= $billet->getDate() ?></time>
    </header>
    <p><?= $billet->getContenu() ?></p>
</article>
<hr />
<header>
    <h1 id="titreReponses">Réponses à <?= $billet->getTitre() ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire->getAuteur() ?> dit :</p>
    <p><?= $commentaire->getContenu() ?></p>
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>
