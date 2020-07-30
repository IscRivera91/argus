<?php 

namespace Modelo;

use Clase\Modelo;
use Interfas\Database;

class MetodosGrupos extends Modelo
{
    public function __construct(Database $coneccion)
    {
        $tabla = 'metodosgrupos';
        $relaciones = [
            'metodos' => "{$tabla}.metodo_id",
            'grupos' => "{$tabla}.grupo_id",
            'menus' => 'metodos.menu_id'
        ]; 
        $columnas = [
            'unicas' => [],
            'obligatorias' => ['grupo_id','metodo_id'],
            'protegidas' => []
        ];
        parent::__construct($coneccion, $tabla, $relaciones, $columnas);
    }
}