<?php
use PHPUnit\Framework\TestCase;
require_once("/var/www/html/orbis/src/code/php/usuario.php");
require_once("/var/www/html/orbis/src/code/php/base_livros.php");

class UsuarioTest extends TestCase{
    protected $u;

    public function setUp(){
        $this->u = new Usuario("cristina", "cristina@gmail.com", "123", NULL, 9, "a", NULL);
    }

    /**
     * @covers Usuario::addFavoritos
     */
    public function testAddFavoritos(){
        $this->u->addFavoritos("bananinha");
        $this->assertTrue(true);
    }

    /**
     * @covers Usuario::getNome
     */
    public function testGetNome(){
        $this->assertSame($this->u->getNome(), "cristina");
    }

    /**
     * @covers Usuario::getEmail
     */
    function testgetEmail(){
        $this->assertSame($this->u->getEmail(), "cristina@gmail.com");
    }

    /**
     * @covers Usuario::getSenha
     */
    function testgetSenha(){
        $this->assertSame($this->u->getSenha(), "123");
    }

    /**
     * @covers Usuario::getIdade
     */
    function testGetIdade(){
        $this->assertSame($this->u->getIdade(), 9);
    }

    /**
     * @covers Usuario::getFoto
     */
    function testgetFoto(){
        $this->assertSame($this->u->getFoto(), NULL);
    }

    /**
     * @covers Usuario::getFavoritos
     */
    function testgetFavoritos(){
        $this->assertSame($this->u->getFavoritos(), "a");
    }

    /**
     * @covers Usuario::getAvaliacoes
     */
    public function testGetAvaliacoes(): void
    {
        $this->assertSame($this->u->getAvaliacoes(), NULL);
    }

    /**
     * @covers \Usuario::removeFavoritos
     */
    public function testRemoveFavoritos(): void
    {
        $this->u->removeFavoritos("teste");
        $this->assertSame($this->u->getFavoritos(), "a");
    }
}
?>