<?php

namespace App\controllers;

class HomeController
{
  use MediaTrait;

  function thanks() {
    return "Messaoud, merci vraiment pour ce que tu m'as apporté, merci infiniment";
  }
  function welcome()
  {
    return $lastDatas = [
      "films" => $this->getFilms(),
      "series" => $this->getSeries(),
      "realisators" => $this->getRealisators(),
    ];
  }
  function detail($id) {}
}
