<?php

namespace App\Entities;

class SpokenLanguages
{
  protected $iso6391;
  protected $name;

  public function __construct($iso6391, $name = null)
  {
    $this->setIso6391($iso6391);
    $this->setName($name);
  }

  public function setIso6391($iso6391)
  {
    $this->iso6391 = $iso6391;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getIso6391()
  {
    return $this->iso6391;
  }

  public function getName()
  {
    return $this->name;
  }

  public function toArray() {
    $arr = [
      'iso_639_1' => $this->getIso6391(),
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
