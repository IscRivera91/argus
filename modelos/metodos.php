<?php
namespace Modelos;
use Clase\Modelo;
/*** modelo core ***/

class Metodos extends Modelo {

    public function __construct(database $link){
        $tabla = 'metodos';
        parent::__construct($link, $tabla);
    }

}