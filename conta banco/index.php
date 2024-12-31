<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 02 - POO</title>

  <style>
    strong {
      color: red;
      display: block;
    }
  </style>
</head>
<body>
  <h1>Aula 04 - Métodos Getter, Setter e Constructor</h1>

  <pre>
  <?php 
  require_once "ContaBanco.php";

  echo "<h2>Conta CC</h2>";
  $c1 = new ContaBanco;

  $c1->abrirConta("cc");
  $c1->pagarMensal();
  $c1->depositar(20);
  $saque1 = $c1->sacar(8);

  print_r($c1);

  echo "<h2>Conta CP</h2>";
  $c2 = new ContaBanco;

  $c2->abrirConta("cp");
  $c2->pagarMensal();
  $saque2 = $c2->sacar(30);

  print_r($c2);
  ?>
  </pre>

</body>
</html>