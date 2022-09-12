<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Testando conexão ao banco de dados </title>
</head>
<body>
  <h3>Formulário de Consulta de Clientes Completo</h3><br>
  <form name="Cadastro" action="consulta.php" method="POST">
    <label>Consulta a Banco de Dados completo:</label>
    <input type="submit" name="consulta-completa" value="Consultar">
  </form>
</body>
</html>

<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>NOME</th>";
 echo "<th>SOBRENOME</th>";
 echo "<th>SEXO</th>";
 echo "</tr>";
  
 $sql = "SELECT * FROM cadastro";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome = $registro['NomeCliente'];
    $sobrenome = $registro['SobrenomeCliente'];
    $sexo = $registro['Sexo'];
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$sexo."</td>";
    echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 ?>

