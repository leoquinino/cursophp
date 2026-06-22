<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - ex002</title>
</head>
<body>
    <h1>Exercício 002 - Variáveis e Tipos de Dados</h1>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo "Hoje é dia " . date("d/m/Y") . "<br>";
        echo "A hora atual é " . date("G:i:s T") . "<br><br>";
        // Variáveis
        $nome = "João";
        $idade = 30;
        $altura = 1.75;
        $is_estudante = true;

        // Exibindo as variáveis
        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade anos</p>";
        echo "<p>Altura: $altura metros</p>";
        echo "<p>É estudante? " . ($is_estudante ? "Sim" : "Não") . "</p>";

        // Tipos de dados
        echo "<h2>Tipos de Dados</h2>";
        echo "<p>Tipo de \$nome: " . gettype($nome) . "</p>";
        echo "<p>Tipo de \$idade: " . gettype($idade) . "</p>";
        echo "<p>Tipo de \$altura: " . gettype($altura) . "</p>";
        echo "<p>Tipo de \$is_estudante: " . gettype($is_estudante) . "</p>";   
    ?>
</body>
</html>
