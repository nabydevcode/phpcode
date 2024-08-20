<?php
namespace App\src;
use App\src\Personnage;

class Archer extends Personnage
{


    public function __construct($noms)
    {
        parent::__construct($noms);
    }
    public function attaque($cible): int
    {
        return $cible->vie -= 2 * $this->attak;
    }



}