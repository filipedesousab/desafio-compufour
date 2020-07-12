<?php

namespace App\Entities;

class Movie
{
  protected $posterPath;
  protected $adult;
  protected $overview;
  protected $releaseDate;
  protected $genreIds;
  protected $id;
  protected $originalTitle;
  protected $originalLanguage;
  protected $title;
  protected $backdropPath;
  protected $popularity;
  protected $voteCount;
  protected $video;
  protected $voteAverage;

  public function setPosterPath($posterPath)
  {
    $this->posterPath = $posterPath;
    return $this;
  }

  public function setAdult($adult)
  {
    $this->adult = $adult;
    return $this;
  }

  public function setOverview($overview)
  {
    $this->overview = $overview;
    return $this;
  }

  public function setReleaseDate($releaseDate)
  {
    $this->releaseDate = $releaseDate;
    return $this;
  }

  public function setgenreIds($genreIds)
  {
    $this->genreIds = $genreIds;
    return $this;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setOriginalTitle($originalTitle)
  {
    $this->originalTitle = $originalTitle;
    return $this;
  }

  public function setOriginalLanguage($originalLanguage)
  {
    $this->originalLanguage = $originalLanguage;
    return $this;
  }

  public function setTitle($title)
  {
    $this->title = $title;
    return $this;
  }

  public function setBackdropPath($backdropPath)
  {
    $this->backdropPath = $backdropPath;
    return $this;
  }

  public function setPopularity($popularity)
  {
    $this->popularity = $popularity;
    return $this;
  }

  public function setVoteCount($voteCount)
  {
    $this->voteCount = $voteCount;
    return $this;
  }

  public function setVideo($video)
  {
    $this->video = $video;
    return $this;
  }

  public function setVoteAverage($voteAverage)
  {
    $this->voteAverage = $voteAverage;
    return $this;
  }

  public function getPosterPath()
  {
    return $this->posterPath;
  }

  public function getAdult()
  {
    return $this->adult;
  }

  public function getOverview()
  {
    return $this->overview;
  }

  public function getReleaseDate()
  {
    return $this->releaseDate;
  }

  public function getgenreIds()
  {
    return $this->genreIds;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getOriginalTitle()
  {
    return $this->originalTitle;
  }

  public function getOriginalLanguage()
  {
    return $this->originalLanguage;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getBackdropPath()
  {
    return $this->backdropPath;
  }

  public function getPopularity()
  {
    return $this->popularity;
  }

  public function getVoteCount()
  {
    return $this->voteCount;
  }

  public function getVideo()
  {
    return $this->video;
  }

  public function getVoteAverage()
  {
    return $this->voteAverage;
  }

  public function toArray() {
    return [
      'poster_path' => $this->getPosterPath(),
      'adult' => $this->getAdult(),
      'overview' => $this->getOverview(),
      'release_date' => $this->getReleaseDate(),
      'genre_ids' => $this->getGenreIds(),
      'id' => $this->getId(),
      'original_title' => $this->getOriginalTitle(),
      'original_language' => $this->getOriginalLanguage(),
      'title' => $this->getTitle(),
      'backdrop_path' => $this->getBackdropPath(),
      'popularity' => $this->getPopularity(),
      'vote_count' => $this->getVoteCount(),
      'video' => $this->getVideo(),
      'vote_average' => $this->getVoteAverage()
    ];
  }
}
