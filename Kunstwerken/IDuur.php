<?php 
namespace Kunstwerken;

Interface IAantalwoorden {                           //in een interface kan/mags je niet implementeren.
    public function getIDuur(): ?int; 
    public function setIDuur(int $duur);
}