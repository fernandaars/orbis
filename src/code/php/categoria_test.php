<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/categoria.php");

/**
 * Class categoria.
 *
 * @covers Categoria
 */
class categoriaTest extends TestCase
{
    /**
     * @var Categoria $categoria An instance of "Categoria" to test.
     */
    private $categoria;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->categoria = new Categoria("Aventura", 1);
    }

    /**
     * @covers Categoria::getNome
     */
    public function testGetNome(): void
    {
        $this->assertSame($this->categoria->getNome(), "Aventura");
    }

    /**
     * @covers Categoria::getCodigo
     */
    public function testGetCodigo(): void
    {
        $this->assertSame($this->categoria->getCodigo(), 1);
    }
}
