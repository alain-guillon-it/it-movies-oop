<?php

namespace App\controllers;

class HomeController
{
  use MediaTrait;

  function thanks() {
    return "Messaoud t'es un tueur, merci vraiment pour ce que tu m'as apporté, merci infiniment";
  }
  function welcome()
  {
    $lastDatas = [
      "films" => $this->getFilms(),
      "series" => $this->getSeries(),
      "realisators" => $this->getRealisators(),
    ];

    return $lastDatas;
  }
  function detail($id) {}
}
