<?php 
namespace Kunstwerken;

Interface IAantalwoorden {                           //in een interface kan/mags je niet implementeren.
    public function getIAantalwoorden(): ?int; 
    public function setIAantalwoorden(int $aantalwoorden);
}