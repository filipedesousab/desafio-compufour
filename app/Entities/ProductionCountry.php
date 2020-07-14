<?php

namespace App\Entities;

class ProductionCountry
{
  protected $iso31661;
  protected $name;

  public function __construct($iso31661, $name = null)
  {
    $this->setIso31661($iso31661);
    $this->setName($name);
  }

  public function setIso31661($iso31661)
  {
    $this->iso31661 = $iso31661;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getIso31661()
  {
    return $this->iso31661;
  }

  public function getName()
  {
    return $this->name;
  }

  public function toArray()
  {
    $arr = [
      'id' => $this->getIso31661(),
      'name' => $this->getName()
    ];

    $cleanArray = array_filter(
      $arr,
      function ($key) use ($arr) {
        return $arr[$key] !== null;
      },
      ARRAY_FILTER_USE_KEY
    );

    return $cleanArray;
  }
}
