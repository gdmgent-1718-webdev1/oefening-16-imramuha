<?php


namespace Kunstwerken;

class Schilderij extends KunstwerkenAbstract implements IAfbeelding
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