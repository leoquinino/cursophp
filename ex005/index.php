<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estudando PHP - Ex005 - String em PHP - Concatenação e Interpolação</title>
</head>
<body>
    <h1>Estudando PHP - Ex005 - Strings</h1>
    <?php
        //exemplo de strings
        const Estado = "São Paulo";
        $nome = "João";
        $sobrenome = "Silva";
        echo "Nome completo: " . $nome . " " . $sobrenome . " <br>";
        echo "Nome completo: $nome $sobrenome \u{1F596} <br>"; // Unicode para o emoji de mão
        $nomeCompleto = $nome . " " . $sobrenome . " - " . Estado . "<br>";  
        echo 'Antes do nome da constante não use simbolo de dolar $';

        $inteiro = 42;
        $float = 3.14;
        $string = "Olá, PHP!";
        $boolean = true;
        $ano = date("Y");

        echo "<br>";
        echo "Ano atual: $ano<br>";
        echo "Inteiro: $inteiro<br>";
        echo "Float: $float<br>";
        echo "String: $string<br>";
        echo 'Boolean: ' . ($boolean ? 'true' : 'false') . '<br>';
    ?>
</body>
</html>
