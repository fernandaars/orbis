<?php
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/editora.php");

/**
 * Class base_livros.
 *
 * @covers Base
 */
class base_livrosTest extends TestCase
{
    /**
     * @var Base $base An instance of "Base" to test.
     */
    private $base;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->b = new Base(5);
        $book = $this->b->retornaLivroTitulo("O Mágico de Oz");
        $this->assertSame($book->getTitulo(), "O Mágico de Oz");
        $book = $this->b->retornaCategoriaCod(6);
        $book = $this->b->retornaAutorCod(7);
        $book = $this->b->retornaEditoraCod(3);
    }

    /**
     * @covers Base::importaLivros
     */
    public function testImportaLivros(): void
    {
        $book = $this->b->retornaLivroTitulo("O Mágico de Oz");
        $this->assertSame($book->getTitulo(), "O Mágico de Oz");
    }

    /**
     * @covers Base::importaCategorias
     */
    public function testImportaCategorias(): void
    {
        $book = $this->b->retornaLivroTitulo("O Mágico de Oz");
        $this->assertSame($book->getTitulo(), "O Mágico de Oz");
    }

    /**
     * @covers Base::importaAutores
     */
    public function testImportaAutores(): void
    {
        $book = $this->b->retornaLivroTitulo("O Mágico de Oz");
        $this->assertSame($book->getTitulo(), "O Mágico de Oz");
    }

    /**
     * @covers Base::importaEditoras
     */
    public function testImportaEditoras(): void
    {
        $book = $this->b->retornaLivroTitulo("O Mágico de Oz");
        $this->assertSame($book->getTitulo(), "O Mágico de Oz");
    }

    /**
     * @covers Base::retornaLivroISBN
     */
    public function testRetornaLivroISBN(): void
    {
        $this->assertSame($this->b->retornaLivroISBN("teste"), NULL);
    }

    /**
     * @covers Base::retornaCategoriaCod
     */
    public function testRetornaCategoriaCod(): void
    {
        $this->assertSame($this->b->retornaCategoriaCod("teste"), NULL);
    }

    /**
     * @covers \Base::retornaLivroTitulo
     */
    public function testRetornaLivroTitulo(): void
    {
        $l = $this->b->retornaLivroTitulo("O Mágico de Oz")->getTitulo();
        $this->assertSame($l, "O Mágico de Oz");
    }
}
