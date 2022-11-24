<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Cadastro Jogadas</title>
</head>
<body>
    <div class="geral">
        <div class="cabecario">Súmula Xadrez</div>
        <div class="menu2">
        <ul class="menu">  
            <li><li><a href="sumula.php">Sumula Xadrez</a></li>        
                <li><a href="Cadastro_torneio.php"> Cadastro Torneio</a></li>
                <li><a href="cadastro_jogadores.php"> Cadastro Jogadores</a></li>
                <li><a href="cadastro_jogadas.php"> Cadastro Jogadas</a></li>
            </ul></div>
<div class="cadastro1">
<form action="retaguarda.php" method="post">
    <table border="1">
        <thead>
           <h1> Cadastro jogadores</h1>
        </thead>
        <tr>


            <th>Dados</th>
            <th>Jogadas Brancas</th>
            <th>Jogadas Pretas</th>
            
        </tr>
        <tr>
            <td>Movimentos</td>
            <td><input type="text" name="movimento" id="" placeholder="digite a jogada" class="no"></td>
            <td><input type="text" name="" id="" placeholder="digite a jogada" class="no"></td>
        </tr>
        <tr>
            <td>Obs.</td>
            <td><input type="text" name="" id="" placeholder="digite a obs" class="no"></td>
            <td><input type="text" name="" id="" placeholder="digite a obs" class="no"></td>
        </tr> 
        <tr>
            <td>Faltas Jogadores</td>
            <td><input type="text" name="" id="" placeholder="digite a Numero" class="no"></td>
            <td><input type="text" name="" id="" placeholder="digite a Numero" class="no"></td>
        </tr>       
    </table>
        <input type="submit" value="enviar" class="enviar"></form>
    </div>
           
    </div>
</body>
</html>