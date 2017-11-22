<?php 
namespace Kunstwerken;

Interface IGewicht {                           //in een interface kan/mags je niet implementeren.
    public function getIGewicht(): ?int; 
    public function setIGewicht(int $gewicht);
}