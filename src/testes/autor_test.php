<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/autor.php");

/**
 * Class autor.
 *
 * @covers Autor
 */
class autorTest extends TestCase
{
    /**
     * @var Autor $autor An instance of "Autor" to test.
     */
    private $autor;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->autor = new Autor("Juliano", 2);
    }

    /**
     * @covers Autor::getNome
     */
    public function testGetNome(): void
    {
        $this->assertSame($this->autor->getNome(), "Juliano");
    }

    /**
     * @covers Autor::getCodigo
     */
    public function testGetCodigo(): void
    {
        $this->assertSame($this->autor->getCodigo(), 2);
    }
}
