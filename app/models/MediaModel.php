<?php

namespace Model;

class MediaModel
{
  function getDatas()
  {
    return $this->datas;
  }
  function getDataByID($index)
  {
    return $this->datas[$index];
  }
}
