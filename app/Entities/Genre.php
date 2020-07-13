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

  public static function getInstanceArrayByJson($json)
  {
    $arr = json_decode($json, true);
    $values = [];

    if (is_array($arr['genres'])) {
      foreach ($arr['genres'] as $genre) {
        array_push($values, new Genre($genre['id'], $genre['name']));
      }
    }

    return $values;
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
