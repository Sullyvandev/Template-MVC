<?php

namespace nameBDD\Controllers;

use nameBDD\Models\nameModel;


class MainController extends CoreController
{

   

    public function affichePageHome()
    {
        $this->show('home');
    }
}