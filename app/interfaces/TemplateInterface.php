<?php

namespace App\interfaces;

interface TemplateInterface
{
    public function list();
    public function detail($id);
}