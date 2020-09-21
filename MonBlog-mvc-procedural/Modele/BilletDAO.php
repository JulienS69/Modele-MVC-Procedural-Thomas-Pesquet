<?php

require_once 'DBInterface.php';
require_once 'Metier/Billet.php';

class BilletDAO {
  public static function getBillets() {
      $billets = DBInterface::executerRequete('select BIL_ID as id, BIL_DATE as date,'
              . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
              . ' order by BIL_ID desc');

      $lesBillets = array();
      foreach($billets as $billet)
      {
        $numero = $billet['id'];
        $lesBillets[$numero] = self::creerBillet($billet);
      }
      return $lesBillets;
  }

  // Renvoie les informations sur un billet
  public static function getBillet($idBillet) {
      $billet = DBInterface::executerRequete('select BIL_ID as id, BIL_DATE as date,'
              . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
              . ' where BIL_ID=?', array($idBillet));
      if ($billet->rowCount() == 1)
      {
          $ligneBillet = $billet->fetch();  // Accès à la première ligne de résultat
          $leBillet = self::creerBillet($ligneBillet);
          return $leBillet;
      }
      else
          throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
  }


  private static function creerBillet($billet) {
      $billetR = new Billet($billet['id'], $billet['date'],$billet['titre'], $billet['contenu']);
      return $billetR;
  }
}
  ?>
