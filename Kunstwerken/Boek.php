<?php

namespace Kunstwerken;

class Boek extends KunstwerkenAbstract implements IAantalBladzijden
{
  public $aantalBladzijden;  
  public $aantalwoorden;

  public function getIAantalBladzijden(): int{               // interface implementeren.
    return $this ->aantalBladzijden;
 } 

 public function setIAantalBladzijden(int $aantalBladzijden): void {
     $this ->aantalBlazijden = $aantalBladzijden;
 }

 // implementatie interface iAantalwooren
 public function getIAantalwoorden(): int{               // interface implementeren.
  return $this ->aantalwoorden;
} 

public function setIAantalwoorden(int $aantalwoorden): void {
   $this ->aantalwoorden = $aantalwoorden;
}
}