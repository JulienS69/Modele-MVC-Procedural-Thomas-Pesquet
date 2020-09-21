<?php

require 'Modele/BilletDAO.php';
require 'Modele/CommentaireDAO.php';

// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = BilletDAO::getBillets();
    require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = BilletDAO::getBillet($idBillet);
    $commentaires = CommentaireDAO::getCommentaires($idBillet);
    require 'Vue/vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'Vue/vueErreur.php';
}

function apropos() {
  require 'Vue/vueAPropos.php';
}
