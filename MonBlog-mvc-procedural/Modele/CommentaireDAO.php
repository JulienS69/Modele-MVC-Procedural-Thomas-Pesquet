<?php

require_once 'DBInterface.php';
require_once 'Metier/Commentaire.php';

class CommentaireDAO {
  public static function getCommentaires($idBillet) {
      $commentaires = DBInterface::executerRequete('select COM_ID as id, COM_DATE as date,'
              . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
              . ' where BIL_ID=?', array($idBillet));

      $lesCommentaires = array();
      foreach($commentaires as $commentaire)
      {
        $numero = $commentaire['id'];
        $lesCommentaires[$numero] = self::creerCommentaire($commentaire);
      }

      return $lesCommentaires;
  }

  private static function creerCommentaire($commentaire)
  {

      $commentaireR = new Commentaire($commentaire['id'], $commentaire['date'],$commentaire['auteur'], $commentaire['contenu']);
      return $commentaireR;
  }
}
?>
