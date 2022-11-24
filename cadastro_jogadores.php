<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Cadastro Jogadores</title>
</head>
<body>
    <div class="geral">
        <div class="cabecario">Súmula Xadrez</div>
        <div class="menu2">
        <ul class="menu">  
            <li><li><a href="index.php">Sumula Xadrez</a></li>        
                <li><a href="Cadastro_torneio.php"> Cadastro Torneio</a></li>
                <li><a href="cadastro_jogadores.php"> Cadastro Jogadores</a></li>
                <li><a href="cadastro_jogadas.php"> Cadastro Jogadas</a></li>
            </ul></div>
<div class="cadastro1"> 
<form action="retaguarda.php" method="post">    
    <table border="1">
        <thead><h1>Cadastro Partida</h1></thead>
        <tr>
            <th>Número da mesa </th>
            <th class="no"></th>
            <th>Data</th>
           
        </tr>
        <tr>
            <td><input type="text" placeholder="" class="no"></td>
            <td class="no"></td>
            <td><input type="datetime" placeholder="" class="no"></td>
        
        </tr>
    </table>
    <table border="1">
        <thead>
           <h1>Cadastro jogadores</h1>
        </thead>
        <tr>


            <th>Dados</th>
            <th>Nome Jogador 1</th>
            <th>Nome Jogador 2</th>
            
        </tr>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="" id="" placeholder="digite o nome" class="no"></td>
            <td><input type="text" name="" id="" placeholder="digite a nome" class="no"></td>
        </tr>
        <tr>
            <td>Pais</td>
            <td><input type="text" name="" id="" placeholder="" class="no"></td>
            <td><input type="text" name="" id="" placeholder="" class="no"></td>
        </tr>
        <tr>
            <td>Data de Nascimento</td>
            <td><input type="text" name="" id="" placeholder="digite a data" class="no"></td>
            <td><input type="text" name="" id="" placeholder="digite o valor" class="no"></td>
        </tr>        
    </table>
        <input type="submit" value="enviar" class="enviar">
    </form>
    </div>
           
    </div>
</body>
</html>