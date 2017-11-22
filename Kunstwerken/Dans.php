<?php


namespace Kunstwerken;

class Dans extends KunstwerkenAbstract
{
  public $afbeelding;

  // implementeren interface IAfbeelding
  public function getIAfbeelding(): string{               
    return $this ->afbeelding;
 } 

 public function setIAfbeelding(string $afbeelding): void {
     $this ->afbeelding = $afbeelding;
 }
}