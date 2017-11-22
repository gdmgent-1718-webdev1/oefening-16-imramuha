<?php


namespace Kunstwerken;

class Gedicht extends KunstwerkenAbstract
{
  public $aantalWoorden;

  
    public function getIAantalwoorden(): int{               // interface implementeren.
      return $this ->aantalwoorden;
   } 
  
   public function setIAantalwoorden(int $aantalwoorden): void {
       $this ->aantalwoorden = $aantalwoorden;
   }
}