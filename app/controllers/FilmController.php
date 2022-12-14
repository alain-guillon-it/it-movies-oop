<?php

namespace App\controllers;

class FilmController extends MediaController
{
  protected $_defaultModel = "Model\\FilmModel";

  static function presentation() {
    return "Affiche le contenu d'un film";
  }
}
