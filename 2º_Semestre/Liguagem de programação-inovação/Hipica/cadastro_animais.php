<!DOCTYPE html>
<?php
include_once 'webcomplementes.html';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <br>
        <br>
        <div class="container">
            <div class="card bg-dark text-white text-center font-weight-bold">
                <div class="card-body">Cadastro de Inclusão de Animais</div>
            </div>
            <br>
            
            <form action="cadastrarAnimal.php" method="post">
                <div class="card-group">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <div class="custom-control custom-radio custom-control-inline">
                                 
                                <label class="custom-control-label" for="animal">Animal</label>
                                <br>
                            </div>
                            <br>                                                          
                            <label for="entidade">Entidade/Federação:</label>
                            <input type="text" name="entidade" size="70" id="usuentidade" class="form-control">
                            
                            <label for="nomeAnimal">Nome Animal:</label>
                            <input type="text" name="nomeAnimal" size="50" id="nomeAnimal" class="form-control">

                            <label for="prefixo">Prefixo:</label>
                            <input type="text" name="prefixo" size="20" id="prefixo" class="form-control col-4">
                            
                            <label for="sufixo">Sufixo:</label>
                            <input type="text" name="sufixo" size="20" id="sufixo" class="form-control col-4">
                            
                            <label for="patrocinio">Patrocínio:</label>
                            <input type="text" name="patrocinio" size="50" id="patrocinio" class="form-control">
                           
                            <label for="raca">Raça:</label>
                            <input type="text" name="raca" size="50" id="raca" class="form-control col-7">
                            <br>
                            <h2>Proprietário</h2>
                            
                            <br>
                            <label for="proprietario">Nome:</label>
                            <input type="text" name="proprietario" size="50" id="proprietario" class="form-control">
                            
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" size="50" id="endereco" class="form-control">

                            <label for="bairro">Bairro:</label>
                            <input type="text" name="bairro" class="form-control col-6" id="bairro">

                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" class="form-control col-6" id="cidade">

                            <label for="uf">UF:</label>
                            <input type="text" name="uf" class="form-control col-2" id="uf">
                            
                            <label for="cep">CEP:</label>
                            <input type="texnumber" name="cep" class="form-control col-6" id="cep">

                            <label for="cpf">CPF:</label>
                            <input type="texnumber" name="cpf" id="cpf" class="form-control col-6">

                            <label for="rg">RG:</label>
                            <input type="text" name="rg" id="rg" class="form-control col-6">

                            <label for="email">E-mail:</label>
                            <input type="text" name="email" size="50" id="email" class="form-control">

                            <label for="telefone">Telefone:</label>
                            <input type="texnumber" name="telefone" class="form-control col-6" id="telefone">
                        </div>
                    </div>
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <label for="paisorigem">Pais de Origem:</label>
                            <input type="text" size="60" name="paisorigem" id="paisorigem" class="form-control col-7">
                           
                            <label for="passaporte">Número do Passaporte</label>
                            <input type="texnumber" name="passaporte" id="passaporte" class="form-control col-6">
                           
                            <label for="chip">Chip de identificação</label>
                            <input type="number" name="chip" id="chip" class="form-control col-6">
                           
                            <label for="datanacimento">Data de Nascimento:</label>
                            <input type="date" name="datanascimento" id="datanacimento" class="form-control col-5">
                           
                            <label for="altura">Altura em Centímetros:</label>
                            <input type="number" name="altura" size="30" id="altura" class="form-control col-5" placeholder="150 cm">

                            <label for="pelagem">Pelagem:</label>
                            <input type="text" name="pelagem" size="30" id="prefixo" class="form-control col-6">
                            
                            <label for="nomeAnimal2">Nome Anterior do Animal:</label>
                            <input type="text" name="nomeAnimal2" size="50" id="nomeAnimal2" class="form-control">

                           <label for="sexo"> Sexo: </label>
                           <br>
                            <div class="custom-control custom-radio custom-control-inline" style="margin-top:2px; ">

                                <input type="radio" class="custom-control-input" id="masc" name="sexo" value="1">
                                <label class="custom-control-label" for="masc">Masculino</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fem" name="sexo" value="2">
                                <label class="custom-control-label" for="fem">Feminino</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="naodeclarado" name="sexo" value="3">
                                <label class="custom-control-label" for="naodeclarado">Não declarado</label>
                            </div>
                            <br><br>
                            <label for="modalidade"> Modalidades: </label>

                            <label class="container">Salto(acima de 1m)
                                  <input type="checkbox" value="salto" checked="checked">
                                    <span class="checkmark"></span> 
                            </label>
                            <label class="container">Salto Iniciante(até 0,90m) 
                                  <input type="checkbox" value="saltoIniciante"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">Enduro 
                                  <input type="checkbox" value="enduro"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">Adestramento
                                  <input type="checkbox" value="adestramento"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">Adetramento Iniciante 
                                  <input type="checkbox" value="adestramentoIniciante"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">CCE (acima de 1m) 
                                  <input type="checkbox" value="CCE"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">CCE Iniciante(até 0,90m) 
                                  <input type="checkbox" value="CCEiniciante"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">Volteio
                                  <input type="checkbox" value="volteio"> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">Volteio Iniciante
                                  <input type="checkbox" value="volteioIniciante"> 
                                    <span class="checkmark"></span>
                            </label> 

                            <br><br>
                            <br>
                            <br>
                            <button type="reset" class="btn btn-warning float-left">Limpar</button>
                            <button type="submit" class="btn btn-success float-left" style="margin-left: 5px;">Cadastrar</button>
                        </div>
                    </div>
                </div>
                <br>
                <center>

                </center>
            </form>
            <center>
                <?php
                if (!empty($_GET["msg"])) {
                    echo $_GET["msg"];
                }
                ?>
            </center>
        </div>


    
</body>
</html>