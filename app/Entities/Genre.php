<?php

namespace App\Entities;

class Genre
{
  protected $id;
  protected $name;

  public function __construct($id = null, $name = null)
  {
    $this->setId($id);
    $this->setName($name);
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function toArray()
  {
    $arr = [
      'id' => $this->getId(),
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
