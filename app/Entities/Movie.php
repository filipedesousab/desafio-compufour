<?php

namespace App\Entities;

class Movie
{
  protected $posterPath;
  protected $adult;
  protected $overview;
  protected $releaseDate;
  protected $genres;
  protected $id;
  protected $originalTitle;
  protected $originalLanguage;
  protected $title;
  protected $backdropPath;
  protected $popularity;
  protected $voteCount;
  protected $video;
  protected $voteAverage;
  protected $belongsToCollection;
  protected $budget;
  protected $homepage;
  protected $imdbId;
  protected $productionCompanies;
  protected $productionCountries;
  protected $revenue;
  protected $runtime;
  protected $spokenLanguages;
  protected $status;
  protected $tagline;

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

  public function setGenres($genres)
  {
    $this->genres = $genres;
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

  public function setBelongsToCollection($belongsToCollection)
  {
    $this->belongsToCollection = $belongsToCollection;
    return $this;
  }

  public function setBudget($budget)
  {
    $this->budget = $budget;
    return $this;
  }

  public function setHomepage($homepage)
  {
    $this->homepage = $homepage;
    return $this;
  }

  public function setImdbId($imdbId)
  {
    $this->imdbId = $imdbId;
    return $this;
  }

  public function setProductionCompanies($productionCompanies)
  {
    $this->productionCompanies = $productionCompanies;
    return $this;
  }

  public function setProductionCountries($productionCountries)
  {
    $this->productionCountries = $productionCountries;
    return $this;
  }

  public function setRevenue($revenue)
  {
    $this->revenue = $revenue;
    return $this;
  }

  public function setRuntime($runtime)
  {
    $this->runtime = $runtime;
    return $this;
  }

  public function setSpokenLanguages($spokenLanguages)
  {
    $this->spokenLanguages = $spokenLanguages;
    return $this;
  }

  public function setStatus($status)
  {
    $this->status = $status;
    return $this;
  }

  public function setTagline($tagline)
  {
    $this->tagline = $tagline;
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

  public function getGenres()
  {
    return $this->genres;
  }

  public function getGenresArray()
  {
    return $this->objectArrayToValueArray($this->getGenres());
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

  public function getBelongsToCollection()
  {
    return $this->belongsToCollection;
  }

  public function getBudget()
  {
    return $this->budget;
  }

  public function getHomepage()
  {
    return $this->homepage;
  }

  public function getImdbId()
  {
    return $this->imdbId;
  }

  public function getProductionCompanies()
  {
    return $this->productionCompanies;
  }

  public function getProductionCompaniesArray()
  {
    return $this->objectArrayToValueArray($this->getProductionCompanies());
  }

  public function getProductionCountries()
  {
    return $this->productionCountries;
  }

  public function getProductionCountriesArray()
  {
    return $this->objectArrayToValueArray($this->getProductionCountries());
  }

  public function getRevenue()
  {
    return $this->revenue;
  }

  public function getRuntime()
  {
    return $this->runtime;
  }

  public function getSpokenLanguages()
  {
    return $this->spokenLanguages;
  }

  public function getSpokenLanguagesArray()
  {
    return $this->objectArrayToValueArray($this->getSpokenLanguages());
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getTagline()
  {
    return $this->tagline;
  }

  private function objectArrayToValueArray($arr)
  {
    $objectArray = is_array($arr) ? $arr : [];

    return array_map(
      function ($object) {
        return $object->toArray();
      },
      $objectArray
    );
  }

  public function toArray()
  {
    $arr = [
      'poster_path' => $this->getPosterPath(),
      'adult' => $this->getAdult(),
      'overview' => $this->getOverview(),
      'release_date' => $this->getReleaseDate(),
      'genres' => $this->getGenresArray(),
      'id' => $this->getId(),
      'original_title' => $this->getOriginalTitle(),
      'original_language' => $this->getOriginalLanguage(),
      'title' => $this->getTitle(),
      'backdrop_path' => $this->getBackdropPath(),
      'popularity' => $this->getPopularity(),
      'vote_count' => $this->getVoteCount(),
      'video' => $this->getVideo(),
      'vote_average' => $this->getVoteAverage(),
      'belongs_to_collection' => $this->getBelongsToCollection(),
      'budget' => $this->getBudget(),
      'homepage' => $this->getHomepage(),
      'imdb_id' => $this->getImdbId(),
      'production_companies' => $this->getProductionCompaniesArray(),
      'production_countries' => $this->getProductionCountriesArray(),
      'revenue' => $this->getRevenue(),
      'runtime' => $this->getRuntime(),
      'spoken_languages' => $this->getSpokenLanguagesArray(),
      'status' => $this->getStatus(),
      'tagline' => $this->getTagline()
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
