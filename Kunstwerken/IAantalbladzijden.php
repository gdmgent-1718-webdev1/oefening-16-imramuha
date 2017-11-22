<?php 
namespace Kunstwerken;

Interface IAantalBladzijden {                           //in een interface kan/mags je niet implementeren.
    public function getIAantalBladzijden(): ?int; 
    public function setIAantalBladzijden(int $aantalBladzijden);
}