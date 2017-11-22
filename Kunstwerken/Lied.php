<?php


namespace Kunstwerken;

class Lied extends KunstwerkenAbstract
{
  public $duur;

  public function getIDuur(): int{               // interface implementeren.
    return $this ->duur;
 } 

 public function setIDuur(int $duur): void {
     $this ->duur = $duur;
 }
}