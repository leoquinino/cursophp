<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados do Servidor</title>
    </head>
    <body>  
        <h1>Dados do Servidor</h1>
        <ul>
            <?php phpinfo(); ?>
            <li><strong>Nome do Host:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></li>
            <li><strong>Endereço IP do Servidor:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></li>
            <li><strong>Porta do Servidor:</strong> <?php echo $_SERVER['SERVER_PORT']; ?></li>
            <li><strong>Software do Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
            <li><strong>Protocolo de Requisição:</strong> <?php echo $_SERVER['SERVER_PROTOCOL']; ?></li>
        </ul>