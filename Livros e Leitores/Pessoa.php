<?php 
class Pessoa {
  private $nome;
  private $idade;
  private $sexo;

  public function fazerAniver() {
    $this->setIdade($this->getIdade() + 1);
  }
  public function apresentarPessoa() {
    echo "<p>Olá, meu nome é {$this->getNome()}, tenho {$this->getIdade()} anos.</p>";
  }
  public function __construct($nome, $idade, $sexo) {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
  }
  public function getSexo()
  {
    return $this->sexo;
  }
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
  }
  public function getIdade()
  {
    return $this->idade;
  }
  public function setIdade($idade)
  {
    $this->idade = $idade;
  }
  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
}
?>