<?php

namespace App\src;
class Personnage
{
    protected int $vie = 80;
    protected int $attak = 20;
    protected string $nom;

    public function __construct($noms)
    {
        $this->nom = $noms;
    }
    public function getAttak(): int
    {
        return $this->attak;
    }

    public function getVie(): int
    {
        return $this->vie;
    }
    public function setVie($unvie): void
    {
        $this->vie = $unvie;
    }
    public function attaque($cible): int
    {
        return $cible->vie -= $this->attak;
    }
    public function mort(): bool
    {
        return $this->getVie() <= 0;
    }
    public function vieNOtZero()
    {
        if ($this->getVie() <= 0) {
            $this->setVie(20);
        }
    }


}