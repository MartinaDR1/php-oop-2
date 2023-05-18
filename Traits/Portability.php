<?php
trait Portability
{

  protected $portability;

  public function setPortability(){
    if ($this->getType() === 'Desktop') {
      $this->portability = "Not Portable";
    } else {
     $this->portability = "Portable";
    }
  }

  public function getPortability(){
    return $this->portability;
  }
}
