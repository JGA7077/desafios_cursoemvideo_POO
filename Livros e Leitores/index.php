<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orientação a Objectos com PHP - Curso em vídeo</title>

  <style>
    strong {
      color: red;
      display: block;
    }
  </style>
</head>
<body>
  <h1>Aula 09 - Exercício Prático POO em PHP</h1>

  <h2>Livros e Leitores</h2>

  <pre>
  <?php 
  require_once "Pessoa.php";
  require_once "Livro.php";

  $pessoas[0] = new Pessoa("João", 31, "M");
  $pessoas[1] = new Pessoa("Ewelyn", 26, "F");

  echo "<h2>Pessoas</h2>";

  $pessoas[0]->apresentarPessoa();
  $pessoas[1]->apresentarPessoa();

  echo "<h2>Livros</h2>";
  $livros[0] = new Livro("George Harrison O Beatle Relutante", "Philip Norman", 504, $pessoas[0]);
  $livros[1] = new Livro("Mitologia Nórdica: Lenda dos 9 mundos", "Jan Erik Madsen", 160, $pessoas[1]);

  $livros[0]->detalhes();
  $livros[0]->abrir();
  $livros[0]->fechar();
  $livros[0]->avancarPagina();
  $livros[0]->folhear(10);
  $livros[0]->voltarPagina();
  
  print_r($livros[0]);
  ?>
  </pre>

</body>
</html>