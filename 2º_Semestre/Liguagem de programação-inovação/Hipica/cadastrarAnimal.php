<?php
include_once("conectar.php");
$entidade = $_POST['entidade'];
$nomedoanimal = $_POST['nomedoanimal'];
$prefixo = $_POST['prefixo'];
$sufixo = $_POST['sufixo'];
$patrocinio = $_POST['patrocinio'];
$raca = $_POST['raca'];
$proprietario = $_POST['proprietario'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$paisorigem = $_POST['paisorigem'];
$passaporte = $_POST['passaporte'];
$chip = $_POST['chip'];
$datanacimento = $_POST['datanacimento'];
$altura = $_POST['altura'];
$pelagem = $_POST['pelagem'];
$nomeAnimal2 = $_POST['nomeanteriordoanimal'];
$sexo = $_POST['Sexo'];
$modalidade = $_POST['modalidade'];



if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO cadastro (entidade, nomedoanimal, prefixo, sufixo, patrocinio, raca, proprietario, endereco, bairro, cidade, uf, cep, cpf, rg, email, telefone, paisorigem, passaporte, chip, datanascimento, altura, pelagem, nomeanteriordoanimal, sexo, modalidade )
VALUES ('{$entidade}', '{$nomeAnimal}', '{$prefixo}', '{$sufixo}', '{$patrocinio}', '{$raca}', '{$proprietario}', '{$endereco}', '{$bairro}', '{$cidade}', '{$uf}', '{$cep}', '{$cpf}', '{$rg}', '{$email}', '{$telefone}', '{$paisorigem}', '{$passaporte}', '{$chip}', '{$datanacimento}', '{$altura}', '{$pelagem}', '{$nomeAnimal2}', '{$sexo}', '{$modalidade}')";
    if (mysqli_query($strcon,$sql)){
        echo "Registro criado com sucesso";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($strcon); 
    }
mysqli_close($strcon);
$msg = "O campo deve ser preenchido";



echo "<br><a href='index.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>