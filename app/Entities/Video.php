<?php

namespace App\Entities;

class Video
{
  protected $id;
  protected $iso6391;
  protected $iso31661;
  protected $key;
  protected $name;
  protected $site;
  protected $size;
  protected $type;

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setIso6391($iso6391)
  {
    $this->iso6391 = $iso6391;
    return $this;
  }

  public function setIso31661($iso31661)
  {
    $this->iso31661 = $iso31661;
    return $this;
  }

  public function setKey($key)
  {
    $this->key = $key;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function setSite($site)
  {
    $this->site = $site;
    return $this;
  }

  public function setSize($size)
  {
    $this->size = $size;
    return $this;
  }

  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getIso6391()
  {
    return $this->iso6391;
  }

  public function getIso31661()
  {
    return $this->iso31661;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSite()
  {
    return $this->site;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function getType()
  {
    return $this->type;
  }

  public function toArray() {
    return [
      'id' => $this->getId(),
      'iso_639_1' => $this->getIso6391(),
      'iso_3166_1' => $this->getIso31661(),
      'key' => $this->getKey(),
      'name' => $this->getName(),
      'site' => $this->getSite(),
      'size' => $this->getSize(),
      'type' => $this->getType()
    ];
  }
}
