<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/livro.php");

/**
 * Class livro.
 *
 * @covers Livro
 */
class livroTest extends TestCase
{
    /**
     * @var Livro $livro An instance of "Livro" to test.
     */
    private $livro;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->livro = new Livro("123", "Um livro", 2019, 2, NULL, NULL, NULL, NULL);
    }

    /**
     * @covers Livro::getISBN
     */
    public function testGetISBN(): void
    {
        $this->assertSame($this->livro->getISBN(), "123");
    }

    /**
     * @covers Livro::getTitulo
     */
    public function testGetTitulo(): void
    {
        $this->assertSame($this->livro->getTitulo(), "Um livro");
    }

    /**
     * @covers Livro::getAno
     */
    public function testGetAno(): void
    {
        $this->assertSame($this->livro->getAno(), 2019);
    }

    /**
     * @covers Livro::getFaixa_Etaria
     */
    public function testGetFaixaEtaria(): void
    {
        $this->assertSame($this->livro->getFaixa_Etaria(), 2);
    }

    /**
     * @covers Livro::getDescricao
     */
    public function testGetDescricao(): void
    {
        $this->assertSame($this->livro->getDescricao(), NULL);
    }

    /**
     * @covers Livro::getPDF
     */
    public function testGetPDF(): void
    {
        $this->assertSame($this->livro->getPDF(), NULL);
    }

    /**
     * @covers Livro::getCod_Autor
     */
    public function testGetCodAutor(): void
    {
        $this->assertSame($this->livro->getCod_Autor(), NULL);
    }

    /**
     * @covers Livro::getCod_Editora
     */
    public function testGetCodEditora(): void
    {
        $this->assertSame($this->livro->getCod_Editora(), NULL);
    }

    /**
     * @covers Livro::getCod_Categoria
     */
    public function testGetCodCategoria(): void
    {
        $this->assertSame($this->livro->getCod_Categoria(), NULL);
    }
}
