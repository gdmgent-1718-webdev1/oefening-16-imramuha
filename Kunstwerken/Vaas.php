<?php


namespace Kunstwerken;

class Vaas extends KunstwerkenAbstract
{
  public $afbeelding;
  public $gewicht;

  // implementeren interface IAfbeelding
  public function getIAfbeelding(): string{               
    return $this ->afbeelding;
 } 

 public function setIAfbeelding(string $afbeelding): void {
     $this ->afbeelding = $afbeelding;
 }

  // implementatie interface IGewicht
  public function getIGewicht(): int{               // interface implementeren.
    return $this ->gewicht;
 } 

 public function setIGewicht(int $gewicht): void {
     $this ->gewicht = $gewicht;
 }
}