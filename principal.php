
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Sumula</title>
</head>
<body>
    <?php 

$usuario = $_POST["usuario"];
$senha =  $_POST["senha"];

?>
    <div class="geral">
        <div class="cabecario">Súmula Xadrez</div>
        <div class="menu2">
        <ul class="menu">  
            <li><li><a href="sumula.php">Sumula Xadrez</a></li>        
                <li><a href="Cadastro_torneio.php"> Cadastro Torneio</a></li>
                <li><a href="cadastro_jogadores.php"> Cadastro Jogadores</a></li>
                <li><a href="cadastro_jogadas.php"> Cadastro Jogadas</a></li>
            </ul></div>    
            <?php
            echo "<h1>Seja bem vindo,$usuario<h1><br><h2> Para iniciar selecione uma pagina acima<h2><br>";
            ?>
</div>
</body>
</html>