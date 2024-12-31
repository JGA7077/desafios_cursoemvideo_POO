<?php 
class ContaBanco {
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  public function __construct() {
    $this->status = false;
    $this->saldo = 0;
  }
  public function abrirConta($tipo) {
    if (($tipo !== "cc" && $tipo !== "cp") || !$tipo) {
      echo "<strong>Informe um tipo de conta Válido</strong>";
      return;
    }

    $this->setStatus(true);
    $this->setTipo($tipo);
    $tipo === 'cc' ? $this->setSaldo('+', 50) : $this->setSaldo('+', 150);
  }
  public function fecharConta() {
    $saldoAtual = $this->getSaldo();
    if ($saldoAtual === 0) {
      echo "<strong>Seu Saldo atual é: $saldoAtual</strong>";
      echo "<strong>Você deve deixar seu saldo em zero antes de fechar sua conta</strong>";
      return;
    }
    $statusAtual = $this->getStatus();
    if (!$statusAtual) {
      echo "<strong>Sua conta já está desativada</strong>";
    }

    $this->setStatus(false);
  }
  public function depositar($valor) {
    $statusAtual = $this->getStatus();
    if(!$statusAtual) {
      echo "<strong>Você precisa ativar sua conta!</strong>";
      return;
    }
    if ($valor <= 0) {
      echo "<strong>Informe um valor válido</strong>";
      return;
    }

    $this->setSaldo('+', $valor);
    $saldoAtual = $this->getSaldo();
    echo "<p>Valor do depósito: $valor</p>";
    echo "<p>Saldo Atual: {$saldoAtual}</p>";
    return $saldoAtual;
  }
  public function sacar($valor) {
    $statusAtual = $this->getStatus();
    if (!$statusAtual) {
      echo "<strong>Você precisa ativar sua conta!</strong>";
      return;
    }
    if ($valor <= 0) {
      echo "<strong>Informe um valor válido</strong>";
      return;
    }

    $saldoVerificacao = $this->getSaldo();
    if ($valor > $saldoVerificacao) {
      echo "<strong>Você não tem esse valor disponível</strong>";
      echo "<strong>Saldo Atual: {$saldoVerificacao}</strong>";
      return;
    }

    $this->setSaldo('-', $valor);
    $saldoAtual = $this->getSaldo();
    echo "<p>Valor à sacar: $valor</p>";
    echo "<p>Saldo Atual: {$saldoAtual}</p>";
    return $valor;
  }
  public function pagarMensal() {
    $statusAtual = $this->getStatus();
    if (!$statusAtual) {
      echo "<strong>Você deve ativar sua conta antes</strong>";
      return;
    }

    $tipo = $this->getTipo();
    $tipo === 'cc' ? $this->setSaldo('-', 12) : $this->setSaldo('-', 20);
  }
  // Getters and Setters
  public function getNumConta() {
    
  }
  public function setNumConta() {
    
  }
  public function getTipo() {
    return $this->tipo;
  }
  public function setTipo($tipo) {
    $this->tipo = $tipo;
  }
  public function getDono() {
    
  }
  public function setDono() {
    
  }
  public function getSaldo() {
    return $this->saldo;
  }
  public function setSaldo($tipoTransacao, $valor) {
    if (!$tipoTransacao || ($tipoTransacao !== '-' && $tipoTransacao !== '+')) {
      echo "<strong>Tipo de transação incorreta</strong>";
      return;
    }
    $tipoTransacao === '-' ? $this->saldo -= $valor : $this->saldo += $valor;

    echo "<p>Depósito Recebido: $valor</p>";
  }
  public function getStatus() {
    return $this->status;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
}
?>