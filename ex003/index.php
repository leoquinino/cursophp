<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estudando PHP - Ex003 - Variaveis e Constantes</title>
</head>
<body>
    <?php 
    const SALARIO = 2500;
    $nome = "Leonardo";
    $sobrenome = "Silva";
    const PAIS = "Brasil";
    echo 'Olá, ' . $nome . ' ' . $sobrenome . '!.<br>';
    echo ' Você é do ' . PAIS . '.<br>';
    echo ' Seu salário é R$ ' . SALARIO . '.';
    ?>
</body>
</html>