<?php 

namespace Modelo;

use Clase\Modelo;
use Clase\Database;

class MetodoGrupo extends Modelo
{
    public function __construct(Database $coneccion)
    {
        $tabla = 'metodo_grupo';
        $relaciones = [
            'metodos' => "{$tabla}.metodo_id",
            'grupos' => "{$tabla}.grupo_id"
        ]; 
        $columnas = [
            'unicas' => ['usuario' => 'usuario','correo' => 'correo_electronico'],
            'obligatorias' => ['usuario','password','correo_electronico','grupo_id'],
            'protegidas' => ['password']
        ];
        parent::__construct($coneccion ,$tabla ,$relaciones,$columnas );
    }
}