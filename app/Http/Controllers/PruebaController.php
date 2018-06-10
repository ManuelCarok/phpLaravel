<?php

namespace phpLaravel\Http\Controllers;

use phpLaravel\Http\Controllers\Controller;

class PruebaController extends Controller {

    public function prueba ($param) {
        return 'Ejecutando controlador! con el parametro '.$param;
    }

}