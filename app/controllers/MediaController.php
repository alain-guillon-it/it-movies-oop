<?php

namespace App\controllers;

use App\interfaces\TemplateInterface;

abstract class MediaController implements TemplateInterface
{


    protected $datas;
    protected $_defaultModel = "Model\\FilmModel";

    function list() {
        // $model = new $this->_defaultModel();
        // return $model->getDatas();
    }
    function detail($id) {
        $model = new $this->_defaultModel();
        $data = $model->getDataByID($id);
        return $data;
    }
}
