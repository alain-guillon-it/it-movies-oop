<?php

namespace App\controllers;

class FilmController extends MediaController
{
  
  use MediaTrait;

  // protected $_defaultModel = "Model\\FilmModel";

  public static $_counter = 0;

  function __construct() {
    self::$_counter++;
  }

  // App\\constrollers\\FilmController::presentation()
  static function presentation() {
    return "Affiche le contenu d'un film";
  }

  function welcome() 
  {
    return $this->getFilms();
  }
}
