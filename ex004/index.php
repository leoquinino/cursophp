<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estudando PHP - Ex004 - Tipo Primitivo</title>
</head>
<body>    
    <?php 
    // existem 3 classes de tipos primitivos no PHP são elas
    // escalares , compostos e especiais
    // escalares: string, int, float, bool  
    // compostos: array, object
    // especiais: resource, null   

    //0x = inicia = hexadecimal
    //0b = inicia = binário  
    //0  = inicia = octal
    $num = 0x1A; // hexadecimal

    $num2 = 0b1101; // binário

    $num3 = 075; // octal

    $num4 = 3e2; // notação científica (3 x 10^2 = 300) -> 3 x 10 elevado a 2

    echo "<br>O número hexadecimal 0x1A é igual a $num em decimal.<br>";
    echo '<br>';

    echo "O número binário 0b1101 é igual a $num2 em decimal.<br>";
    echo '<br>';
    
    echo "O número octal 075 é igual a $num3 em decimal.<br>";
    echo '<br>';
    
    echo "O número em notação científica 3e2 é igual a $num4 em decimal.<br>";  
    echo '<br>';
    //var_dump() é uma função que exibe informações sobre uma variável, incluindo seu tipo e valor.
    var_dump($num);
    echo '<br>';
    var_dump($num2);
    echo '<br>';
    var_dump($num3);
    echo '<br>';
    var_dump($num4);
    echo '<br>';

    //coerção ou conversão de tipo é o processo pelo qual o PHP converte um valor de um tipo para outro, seja implicitamente (coerção automática) ou explicitamente (coerção manual).
    //coerção automática ocorre quando o PHP precisa realizar uma operação entre valores de tipos diferentes, como por exemplo, quando você tenta somar um número inteiro com uma string que contém um número. O PHP irá converter a string para um número inteiro antes de realizar a operação.
    $a = 10; // inteiro
    $b = "20"; // string
    $c = $a + $b; // coerção automática: a string "20" é convertida para o número 20
    echo "<br>O resultado da soma é: $c<br>";
    var_dump($c);  
    echo '<br>'; 

    $num5 = "3.14"; // string
    $num6 = (float) $num5; // coerção manual: convertendo a string para float
    echo "O número convertido é: $num6<br>";
    $num7 = (int) $num5; // coerção manual: convertendo a string para inteiro
    echo "O número convertido é: $num7<br>";
    echo '<br>';

    $varboleana = true; // booleano
    $varint = (int) $varboleana; // coerção manual: convertendo o booleano para inteiro (true se torna 1, false se torna 0)
    echo "O valor booleano convertido para inteiro é: $varint<br>"; 
    echo '<br>';

    $varfalso = false; // booleano
    $varint2 = (int) $varfalso; // coerção manual: convertendo o booleano para inteiro (true se torna 1, false se torna 0)
    echo "O valor booleano convertido para inteiro é: $varint2<br>";    
    echo '<br>';

    $vetor = [1, 2, 3, 4.5, "Maria", false, true]; // array
    var_dump($vetor);    
    echo "<br>O valor do vetor na posição 4 é: $vetor[4]<br>";

    class Pessoa{
        private string $nome;
        private string $idade;
        }
    $pessoa = new Pessoa("João", 30);
    echo '<br>';
    var_dump($pessoa);
    ?>
</body>
</html>