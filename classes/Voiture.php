<?php
class Voiture
{
  public $nbrRoues;
  private $nbrPlaces = 5;
  public $masse;
  public $vitesse = 0;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }
  public function getNbrPlaces()
  {
    return $this->nbrPlaces;
  }
  public function setNbrPlaces()
  {
    return 0.5 * $this->masse * $this->vitesse **2;
}
}
