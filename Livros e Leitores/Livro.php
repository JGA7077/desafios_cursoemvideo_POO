<?php 
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao {
  private $titulo;
  private $autor;
  private $totPaginas;
  private $paginaAtual;
  private $aberto;
  private $leitor;

  public function detalhes() {
    echo "<hr>";
    echo "<p>Nome do Livro: {$this->getTitulo()}.</p>";
    echo "<p>Total de páginas; {$this->getAutor()}</p>";
    echo "<p>Quantidade de páginas: {$this->getTotPaginas()}</p>";
    echo "<p>Página Atual: {$this->getPaginaAtual()}</p>";
  }
  public function __construct($titulo, $autor, $totPaginas, $leitor) {
    $this->setTitulo($titulo);
    $this->setAutor($autor);
    $this->setTotPaginas($totPaginas);
    $this->setLeitor($leitor);
    $this->setPaginaAtual(0);
    $this->setAberto(false);
  }

  // interface
  public function abrir() {
    if ($this->getAberto()) {
      echo "<strong>[ERRO] O livro já está aberto</strong>";
    } else {
      $this->setAberto(true);
    }
  }
  public function fechar() {
    if (!$this->getAberto()) {
      echo "<strong>[ERRO] O livro já está fechado</strong>";
    } else {
      $this->setAberto(false);
    }
  }
  public function folhear($pagina) {
    if ($pagina < 0) {
      echo "<strong>[ERRO] Informe um número válido.</strong>";
      $this->setPaginaAtual(0);
    } else if ($pagina > $this->getTotPaginas()) {
      echo "<strong>[ERRO] Não pode escolher um número acima do total de páginas.</strong>";
      $this->setPaginaAtual(0);
    } else if ($pagina === $this->getPaginaAtual()) {
      echo "<strong>[ERRO] Você já esá nessa página.</strong>";
    } else {
      $this->setPaginaAtual($pagina);
    }
  }
  public function avancarPagina() {
    if ($this->getPaginaAtual() + 1 > $this->getTotPaginas()) {
      echo "<strong>[ERRO] Não pode avançar para uma página acima do total, voltando para página 0</strong>";
      $this->setPaginaAtual(0);
    } else {
      $this->setPaginaAtual($this->getPaginaAtual() + 1);
    }
  }
  public function voltarPagina() {
    if ($this->getPaginaAtual() - 1 < 0) {
      echo "<strong>[ERRO] Não pode voltar para uma página abaixo de 0, indo para página 0</strong>";
      $this->setPaginaAtual(0);
    } else {
      $this->setPaginaAtual($this->getPaginaAtual() - 1);
    }
  }
  // Getters e Setters
  public function getTitulo()
  {
    return $this->titulo;
  }
  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }
  public function getAutor()
  {
    return $this->autor;
  }
  public function setAutor($autor)
  {
    $this->autor = $autor;
  }
  public function getTotPaginas()
  {
    return $this->totPaginas;
  }
  public function setTotPaginas($totPaginas)
  {
    $this->totPaginas = $totPaginas;
  }
  public function getPaginaAtual()
  {
    return $this->paginaAtual;
  }
  public function setPaginaAtual($paginaAtual)
  {
    $this->paginaAtual = $paginaAtual;
  }
  public function getAberto()
  {
    return $this->aberto;
  }
  public function setAberto($aberto)
  {
    $this->aberto = $aberto;
  }
  public function getLeitor()
  {
    return $this->leitor;
  }
  public function setLeitor($leitor)
  {
    $this->leitor = $leitor;
  }
}
?>