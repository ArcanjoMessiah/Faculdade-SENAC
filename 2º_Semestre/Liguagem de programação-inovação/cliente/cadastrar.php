<?php
include_once("conectar.php");
$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['Sexo'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO cadastro (NomeCliente, SobrenomeCliente, Sexo) VALUES ('{$nome}', '{$sobrenome}', '{$sexo}')";
    if (mysqli_query($strcon,$sql)){
        echo "Registro criado com sucesso";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($strcon); 
    }
mysqli_close($strcon);



echo "<br><a href='index.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>