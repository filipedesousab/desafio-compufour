<?php

namespace App\Entities;

class ProductionCompanie
{
  protected $id;
  protected $logoPath;
  protected $name;
  protected $originCountry;

  public function __construct($values = [])
  {
    $this->setId($values['id']);
    $this->setLogoPath($values['logo_path']);
    $this->setName($values['name']);
    $this->setOriginCountry($values['origin_country']);
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setLogoPath($logoPath)
  {
    $this->logoPath = $logoPath;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function setOriginCountry($originCountry)
  {
    $this->originCountry = $originCountry;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getLogoPath()
  {
    return $this->logoPath;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getOriginCountry()
  {
    return $this->originCountry;
  }

  public function toArray() {
    $arr = [
      'id' => $this->getId(),
      'logo_path' => $this->getLogoPath(),
      'name' => $this->getName(),
      'origin_country' => $this->getOriginCountry()
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
