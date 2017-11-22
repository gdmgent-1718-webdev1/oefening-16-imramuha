<?php 
namespace Kunstwerken;

Interface IAfbeelding {                           //in een interface kan/mags je niet implementeren.
    public function getIAfbeelding(): ?string; 
    public function setIAfbeelding(string $afbeelding);
}