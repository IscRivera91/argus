<?php

use Clase\Database;
use Modelo\Metodos;
use Error\Base AS ErrorBase;
use PHPUnit\Framework\TestCase;

class ModeloMetodosTest extends TestCase
{
    /**
     * @test
     */
    public function creaModelo()
    {
        $this->assertSame(1,1);
        $coneccion = new Database();
        return new Metodos($coneccion);
    }

    /**
     * @test
     * @depends creaModelo
     */
    public function buscarTodo($modelo)
    {
        $resultado = $modelo->buscarTodo();
        $this->assertIsArray($resultado);
        $this->assertSame(0,$resultado['n_registros']);
        $this->assertCount(0,$resultado['registros']);
    }
}