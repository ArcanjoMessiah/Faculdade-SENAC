<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Testando conexão ao banco de dados </title>
</head>
<body>
  <h3>Formulário de Cadastro de Clientes</h3><br>
  <form name="Cadastro" action="cadastrar.php" method="POST">
    <label>Nome do Cliente: </label>
    <input type="text" name="NomeCliente" size="30"><br>
    <label>Sobrenome do Cliente: </label>
    <input type="text" name="SobrenomeCliente" size="45"><br>
    <label>Sexo do Cliente: </label>
    <select name="Sexo">
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
      <option value="N">Não Declarado</option>
    </select><br>
    <input type="submit" name="enviar" value="Enviar">
  </form>
</body>
</html>