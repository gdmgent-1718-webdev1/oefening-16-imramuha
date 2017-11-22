<?php


namespace Kunstwerken;

class Film extends KunstwerkenAbstract
{
  public $afbeelding;  
  public $duur;

  // implementeren interface IAfbeelding
  public function getIAfbeelding(): string{               
    return $this ->afbeelding;
 } 

 public function setIAfbeelding(string $afbeelding): void {
     $this ->afbeelding = $afbeelding;
 }

 // implementatoe interface IDuur
 public function getIDuur(): int{               // interface implementeren.
  return $this ->duur;
} 

public function setIDuur(int $duur): void {
   $this ->duur = $duur;
}
}