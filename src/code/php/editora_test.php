<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/editora.php");

/**
 * Class editora.
 *
 * @covers Editora
 */
class editoraTest extends TestCase
{
    /**
     * @var Editora $editora An instance of "Editora" to test.
     */
    private $editora;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->editora = new Editora("Aventura", 1);;
    }

    /**
     * @covers Editora::getNome
     */
    public function testGetNome(): void
    {
        $this->assertSame($this->editora->getNome(), "Aventura");
    }

    /**
     * @covers Editora::getCodigo
     */
    public function testGetCodigo(): void
    {
        $this->assertSame($this->editora->getCodigo(), 1);
    }
}
