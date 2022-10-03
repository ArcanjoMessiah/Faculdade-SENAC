<?php

$num = 0;

include_once 'webcomplementes.html';

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades PHP </title>
</head>

<body>

    <div class="container">
        <form action="Atividade_1.php">
        <div class="card-body">
            
            <h2>Atividade 1</h2>
            <br>
            <br>
            <label for="num">Informe um número </label>
            <input type="textnumber" name="num" size="50" id="num" class="form-control col-3">


        </div>



        <?php

        $num = $_POST['num'];


        if ($num > 0) {
            $result = "valor positivo";
        } elseif ($num < 0) {
            $rsult = "valor negativo";
        } else {
            $result = "igual a zero";
        }
        echo $result


        ?>

</body>

</html>