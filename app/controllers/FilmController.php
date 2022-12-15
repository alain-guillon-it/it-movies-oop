<?php

namespace App\controllers;

class FilmController extends MediaController
{
  
  use MediaTrait;

  // protected $_defaultModel = "Model\\FilmModel";


  // App\\constrollers\\FilmController::presentation()
  static function presentation() {
    return "Affiche le contenu d'un film";
  }

  function welcome() 
  {
    return $this->getFilms();
  }
}
