<?php

class Commentaire
{
  private $id;
  private $date;
  private $auteur;
  private $contenu;
  //private $bilId;

  public function __construct($id, $date, $auteur, $contenu)
  {
    $this->id = $id;
    $this->date = $date;
    $this->auteur = $auteur;
    $this->contenu = $contenu;
    //$this->bilId = $bilId;
  }

  public function getId() { return $this->id; }
  public function getDate(){ return $this->date; }
  public function getAuteur() { return $this->auteur; }
  public function getContenu() { return $this->contenu; }
  //public function getBildId() { return $this->bilId; }
}
?>
