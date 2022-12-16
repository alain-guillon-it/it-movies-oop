<?php

namespace App\controllers;

use Model\FilmModel;
use Model\RealisatorModel;
use Model\SerieModel;

trait MediaTrait
{
    function getFilms() {
        $model = new FilmModel();
        return $model->getDatas();
    }

    function getSeries() {
        $model = new SerieModel();
        return $model->getDatas();
    }

    function getRealisators() {
        $model = new RealisatorModel();
        return $model->getDatas();
    }
}
