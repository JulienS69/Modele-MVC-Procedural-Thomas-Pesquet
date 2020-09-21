<?php

class Billet
{
  private $id;
  private $date;
  private $titre;
  private $contenu;

  public function __construct($id, $date, $titre, $contenu)
  {
    $this->id = $id;
    $this->date = $date;
    $this->titre = $titre;
    $this->contenu = $contenu;
  }

  public function getId() { return $this->id; }
  public function getDate(){ return $this->date; }
  public function getTitre() { return $this->titre; }
  public function getContenu() { return $this->contenu; }
}
?>
